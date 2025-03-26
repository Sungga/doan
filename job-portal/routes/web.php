<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/send-code', [AuthController::class, 'sendCode'])->name('sendCode');