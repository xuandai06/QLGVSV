<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\lecturer\LecturerController;
use App\Http\Controllers\student\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('AdminMiddleware');

Route::get('/lecturer', [LecturerController::class, 'index'])->name('lecturer')->middleware('LecturerMiddleware');

Route::get('/student', [StudentController::class, 'index'])->name('student');



