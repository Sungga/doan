<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\CheckUserSession;

use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\AuthController;
use App\Http\Controllers\Pages\CvController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// account routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgotPassword', [AuthController::class, 'showForgotPasswordForm'])->name('forgotPassword.form');
Route::post('/forgotPassword', [AuthController::class, 'forgotPassword'])->name('forgotPassword');
Route::get('/addBasicInfo', [AuthController::class, 'showAddBasicInfoForm'])->name('addBasicInfo.form');
Route::post('/addBasicInfo', [AuthController::class, 'addBasicInfo'])->name('addBasicInfo');
Route::get('/addCompanyInfo', [AuthController::class, 'showAddCompanyInfoForm'])->name('addCompanyInfo.form');
Route::post('/send-code', [AuthController::class, 'sendCode'])->name('sendCode');

// cv routers
// Route::get('cv/listCv', [CvController::class, 'listCv'])->name('listCv');
// Route::get('cv/makeCv', [CvController::class, 'makeCv'])->name('makeCv.form');

Route::middleware([CheckUserSession::class])->group(function () {
    Route::get('cv/listCv', [CvController::class, 'listCv'])->name('listCv');
    Route::get('cv/makeCv', [CvController::class, 'makeCv'])->name('makeCv.form');
    Route::get('/cv/BuyCv', [CvController::class, 'buyCvForm'])->name('buyCv.form');
});