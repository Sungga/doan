<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Account;
use App\Models\Category;
use App\Models\Candidate;
use App\Models\Employer;


class CvController extends Controller
{
    public function listCv() {
        $candidate = Candidate::where('id_user', session('user.id'))->first();
        
        return view('cv.listCv', compact('candidate'));
    }

    public function makeCv() {
        $candidate = Candidate::where('id_user', session('user.id'))->first();

        return view('cv.makeCv', compact('candidate'));
    }

    public function buyCvForm() {
        return view('cv.buyCv');
    }
}
