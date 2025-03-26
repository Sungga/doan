<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Mail;

class AuthController extends Controller
{
    // Hiển thị trang đăng ký
    public function showRegisterForm()
    {
        return view('pages.register'); // Trả về giao diện đăng ký
    }
    
    // Xử lý đăng ký
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:accounts,email',
            'password' => 'required|min:6'
        ]);

        // nhatuyendung == 1, ungvien == 2
        $role = $request->role == 'nhatuyendung' ? 1 : 2;

        Account::create([
            'email' => $request->email,
            'password' => Hash::make($request->password), // Mã hóa mật khẩu
            'role' => $role
        ]);

        // return redirect()->back()->with('success', 'Đăng ký thành công!');
        return redirect()->route('home');
    }

    // Hiển thị trang đăng nhập
    public function showLoginForm()
    {
        return view('pages.login'); // Trả về giao diện đăng ký
    }

    // Xử lý đăng nhập
    public function login(Request $request) {
        // Lấy dữ liệu từ request
        $data = $request->all();

        
    }

    public function sendCode(Request $request) {
        // Lấy dữ liệu từ request
        $data = $request->all();
    
        // Kiểm tra xem email có tồn tại trong request không
        if (!isset($data['email'])) {
            return response()->json([
                'success' => false,
                'message' => 'Email không được cung cấp!',
            ], 400); // Trả về mã lỗi 400 (Bad Request)
        }
    
        $emailAddress = $data['email'];
    
        // Log dữ liệu để kiểm tra
        // \Log::info('Dữ liệu nhận được từ AJAX:', $data);
    
        // Tạo mã ngẫu nhiên
        $randomNumber = Str::random(6);
    
        // Gửi email
        try {
            Mail::send('emails.emailCodeRegister', compact('randomNumber'), function($email) use($emailAddress) {
                $email->subject('Mã xác nhận đăng ký tài khoản Việc Tốt');
                $email->to($emailAddress);
            });
    
            // Trả về phản hồi JSON
            return response()->json([
                'success' => true,
                'message' => 'Dữ liệu nhận được thành công!',
                'data' => $randomNumber
            ]);
        } catch (\Exception $e) {
            // Log lỗi nếu gửi email thất bại
            // \Log::error('Lỗi khi gửi email: ' . $e->getMessage());
    
            return response()->json([
                'success' => false,
                'message' => 'Gửi email thất bại!',
                'error' => $e->getMessage() // Trả về thông báo lỗi chi tiết
            ], 500); // Trả về mã lỗi 500 (Internal Server Error)
        }
    }
}
