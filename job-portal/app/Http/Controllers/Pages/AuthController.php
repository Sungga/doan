<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Account;
use App\Models\Category;
use App\Models\Candidate;
use App\Models\Employer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Mail;
use Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\RateLimiter;

class AuthController extends Controller
{
    // Hiển thị trang đăng ký
    public function showRegisterForm()
    {
        return view('pages.register'); // Trả về giao diện đăng ký
    }
    
    // Xử lý đăng ký
    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'username' =>'required|min:6|unique:accounts,username',
    //         'password' => 'required|min:6',
    //         'name' => 'required|string|max:255' // Thêm kiểm tra name
    //     ]);

    //     // nhatuyendung == 1, ungvien == 2
    //     $role = $request->role == 'nhatuyendung' ? 1 : 2;

    //     $account = Account::create([
    //         'username' => $request->username,
    //         'password' => Hash::make($request->password), // Mã hóa mật khẩu
    //         'role' => $role
    //     ]);

    //     if ($account) {
    //         // truong hop nguoi dung la nha tuyen dung
    //         if ($account->role == 1) {
    //             return redirect()->route('addCompanyInfo.form')
    //                 ->with(['user_id' => $account->id, 'name' => $request->name]);
    //         }
    //         // truong hop nguoi dung la ung vien
    //          else {
    //             Candidate::create([
    //                 'email' => $request->email,
    //                 'id_user' => $account->id,
    //                 'name' => $request->name
    //             ]);
    //             return redirect()->route('addBasicInfo.form')
    //                 ->with(['user_id' => $account->id, 'name' => $request->name]);
    //         }
    //         return redirect()->route('home');
    //     } else {
    //         return redirect()->back()->with('error', 'Đăng ký thất bại! Vui lòng thử lại.');
    //     }
    // }
    public function register(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'username' => 'required|min:6|unique:accounts,username',
            'password' => 'required|min:6',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:candidates,email',
            'code' => 'required|digits:6',
            'role' => 'required|in:nhatuyendung,ungvien'
        ]);

        // Kiểm tra mã xác nhận
        $cachedCode = Cache::get('verification_code_'.$request->email);
        if (!$cachedCode || $cachedCode != $request->code) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['code' => 'Mã xác nhận không hợp lệ hoặc đã hết hạn']);
        }

        // Tạo tài khoản
        try {
            $role = $request->role == 'nhatuyendung' ? 1 : 2;
            
            $account = Account::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'role' => $role
            ]);

            // Xóa mã xác nhận sau khi đăng ký thành công
            Cache::forget('verification_code_'.$request->email);

            // Xử lý theo role
            if ($account->role == 1) { // Nhà tuyển dụng
                Employer::create([
                    'email' => $request->email,
                    'id_user' => $account->id,
                    'name' => $request->name
                ]);
                return redirect()->route('login.form');
            } else { // Ứng viên
                Candidate::create([
                    'email' => $request->email,
                    'id_user' => $account->id,
                    'name' => $request->name
                ]);
                
                return redirect()
                    ->route('addBasicInfo.form')
                    ->with([
                        'user_id' => $account->id,
                        'name' => $request->name
                    ]);
            }

        } catch (\Exception $e) {
            Log::error('Đăng ký thất bại: '.$e->getMessage());
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Đăng ký thất bại! Vui lòng thử lại sau.');
        }
    }

    // Hiển thị trang đăng nhập
    public function showLoginForm()
    {
        return view('pages.login');
    }

    // Xử lý đăng nhập
    public function login(Request $request) {
        $data = $request->all();

        // 1. Tìm user bằng username
        $user = Account::where('username', $data['username'])->first();
    
        // 2. Kiểm tra user tồn tại VÀ mật khẩu khớp
        if ($user && Hash::check($data['password'], $user->password)) {
            // Đăng nhập thành công
            session(['user' => ['id' => $user->id, 'role' => $user->role]]);
            return redirect()->route('home');
        } else {
            // Sai thông tin
            return redirect()->back()->withErrors(['code' => 'Sai mật khẩu hoặc tài khoản!']);;
        }
    }

    // Đăng xuất
    public function logout() {
        session()->forget('user');
        return redirect()->route('home');
    }

    // Hiện thị trang quên mật khẩu
    public function showForgotPasswordForm() {
        return view('pages.forgotPassword');
    }

    // Xử lý quên mật khẩu
    public function forgotPassword(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'code' => 'required|digits:6'
        ]);

        // Kiểm tra mã xác nhận
        $cachedCode = Cache::get('verification_code_'.$request->email);
        if (!$cachedCode || $cachedCode != $request->code) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['code' => 'Mã xác nhận không hợp lệ hoặc đã hết hạn']);
        }

        // Thay đổi mật khẩu mới
        try {
            $user = Candidate::where('email', $request->email)->first();
            $user_id = $user->id_user;

            Account::where('id', $user_id)->update([
                'password' => Hash::make($request->password)
            ]);

            // Xóa mã xác nhận sau khi đăng ký thành công
            Cache::forget('verification_code_'.$request->email);
                
            return redirect()->route('login.form');

        } catch (\Exception $e) {
            Log::error('Đăng ký thất bại: '.$e->getMessage());
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['code' => 'Đổi mật khẩu thất bại!']);
        }
    }
    
    // Xu ly gui email (phiên bản bảo mật)
    public function sendCode(Request $request) {
        $request->validate([
            'email' => 'required|email|max:255'
        ]);
    
        $email = $request->email;
        $code = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
    
        try {
            // Sửa lại cách truyền tham số như phiên bản hoạt động của bạn
            Mail::send('emails.emailCodeRegister', ['randomNumber' => $code], function($message) use ($email) {
                $message->to($email)
                       ->subject('Mã xác nhận đăng ký tài khoản Việc Tốt');
            });
    
            // Lưu mã vào cache để xác thực sau này
            Cache::put('verification_code_'.$email, $code, now()->addMinutes(5));
    
            return response()->json([
                'success' => true,
                'message' => 'Mã xác nhận đã được gửi đến email của bạn!'
            ]);
    
        } catch (\Exception $e) {
            \Log::error('Gửi email thất bại: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Gửi email thất bại. Vui lòng thử lại sau.',
                'error' => env('APP_DEBUG') ? $e->getMessage() : null
            ], 500);
        }
    }

    // Them thong tin co ban
    public function ShowAddBasicInfoForm(Request $request) {
        $user_id = $request->session()->get('user_id'); // Lấy từ session
        $name = $request->session()->get('name'); // Lấy từ session

        $categories = Category::all();

        // $user_id = 9;
        // $name = 'Trương Anh Vũ';
        return view('pages.addBasicInfo', compact('user_id', 'name', 'categories'));
    }

    public function addBasicInfo(Request $request) {
        // dd($request->all());
        // Validate form
        $request->validate([
            'user_id' => 'required',
            'birthdate' => 'date', // Ngày sinh có thể để trống
            'sex' => 'in:nam,nữ,khác', // Đồng bộ với ENUM trong database
            'district' => 'integer', // Phải là số nguyên, tồn tại trong bảng districts
            'province' => 'integer', // Phải là số nguyên, tồn tại trong bảng provinces
            'phone' => 'regex:/^(0[1-9][0-9]{8,9})$/', // Hỗ trợ số điện thoại có 10-11 chữ số
            'category_id' => 'exists:categories,id' // Kiểm tra tồn tại trong bảng categories
        ]);

        // Save data to database
        $candidate = Candidate::where('id_user', $request->user_id)->first();

        if ($candidate) {
            $candidate->birthdate = $request->birthdate;
            $candidate->sex = $request->sex;
            $candidate->district = $request->district;
            $candidate->province = $request->province;
            $candidate->phone = $request->phone;
            $candidate->id_category = $request->category_id;
        
            // Kiểm tra xem việc lưu có thành công không
            if ($candidate->save()) {
                return redirect()->route('login');
            } else {
                return redirect()->back()->with('error', 'Thêm thông tin thất bại! Vui lòng thử lại.');
            }
        } else {
            return response()->json(['error' => 'Candidate not found'], 404);
        }
    }

    public function ShowAddCompanyInfoForm(Request $request) {
        $userId = $request->session()->get('user_id'); // Lấy từ session
        $name = $request->session()->get('name'); // Lấy từ session

        return view('pages.addCompanyInfo', compact('userId'));
    }
}
