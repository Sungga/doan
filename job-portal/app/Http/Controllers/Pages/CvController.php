<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use PhpOffice\PhpWord\IOFactory; // dùng thư viện này để đọc Word
use Spatie\PdfToImage\Pdf; // chuyển pdf sang ảnh
use Illuminate\Support\Str;

use App\Models\Account;
use App\Models\Category;
use App\Models\Candidate;
use App\Models\Employer;
use App\Models\Cv;


class CvController extends Controller
{
    public function listCv() {
        $candidate = Candidate::where('id_user', session('user.id'))->first();
        $cvs = Cv::where('id_user', session('user.id'))->get();

        // dd($cvs);
        
        return view('cv.listCv', compact('candidate', 'cvs'));
    }

    public function makeCv() {
        $candidate = Candidate::where('id_user', session('user.id'))->first();

        return view('cv.makeCv', compact('candidate'));
    }

    public function buyCvForm() {
        return view('cv.buyCv');
    }

    public function uploadCv(Request $request) {
        if (!session()->has('user.id')) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để upload CV.');
        }

        $request->validate([
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',
            'name' => 'required',
        ]);
    
        $file = $request->file('cv');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::uuid()->toString(); // tên file random
    
        // ✅ Tạo thư mục nếu chưa có
        \Storage::makeDirectory('public/cv');
        \Storage::makeDirectory('public/cv_images');
    
        $pdfPath = storage_path("app/public/cv/{$filename}.pdf");
        if (in_array($extension, ['doc', 'docx'])) {
            // Chuyển Word -> PDF
            $phpWord = IOFactory::load($file->getPathname());

            // Cấu hình trình chuyển PDF bằng TCPDF
            \PhpOffice\PhpWord\Settings::setPdfRendererName(\PhpOffice\PhpWord\Settings::PDF_RENDERER_TCPDF);
            \PhpOffice\PhpWord\Settings::setPdfRendererPath(base_path('vendor/tecnickcom/tcpdf'));
            // \PhpOffice\PhpWord\Settings::setPdfRendererExtension('.php');

            $pdfWriter = new \PhpOffice\PhpWord\Writer\PDF($phpWord);
            $pdfWriter->save($pdfPath);
        } else {
            // Lưu file PDF trực tiếp
            $file->move(storage_path('app/public/cv'), "{$filename}.pdf");
        }

        // Thêm cv vào database
        $id_user = session('user.id');
        $name = $request->name;
        $status = CV::userHasCV(session('user.id')) ? 2 : 1;
        Cv::create([
            'id_user' => $id_user,
            'file_name' => $filename . '.pdf',
            'name' => $name,
            'status' => $status
        ]);
    
        return back()->with('success', 'CV đã được tải lên!');
    }
}
