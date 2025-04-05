<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Account;
use App\Models\Category;
use App\Models\Candidate;
use App\Models\Employer;

class HomeController extends Controller
{
    // home page
    public function index() {
        // Lấy danh mục các ngành nghề
        $categories = Category::all();

        // kiểm tra đã đăng nhập chưa? nếu đã thì đi đến trang tuyển dụng hay ứng viên
        if(session()->has('user')) {
            if(session('user.role') == 1) { //la nha tuyen dung
                $employer = Employer::where('id_user', session('user.id'))->first();
                return view('pages.home', compact('employer', 'categories', 'categories'));
            }
            else if(session('user.role') == 2) { //la ung vien
                $candidate = Candidate::where('id_user', session('user.id'))->first();
                return view('pages.home', compact('candidate', 'categories', 'categories'));
            }
        }
        return view('pages.home', compact('categories'));

        // // kiểm tra đã đăng nhập chưa? nếu đã thì đi đến trang tuyển dụng hay ứng viên
        // if(session()->has('user')) {
        //     if(session('user.role') == 1) { //la nha tuyen dung
        //         $employer = Employer::where('id_user', session('user.id'))->first();
        //         return view('pages.home', compact('employer'));
        //     }
        //     else if(session('user.role') == 2) { //la ung vien
        //         $candidate = Candidate::where('id_user', session('user.id'))->first();
        //         return view('pages.home', compact('candidate'));
        //     }
        // }
        // return view('pages.home');
    }
}
