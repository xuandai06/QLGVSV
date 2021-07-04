<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\lecturer\LecturerController;
use App\Http\Controllers\student\StudentController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin')
->middleware('AdminMiddleware');
Route::get('/update_gv', [AdminController::class, 'index'])->name('admin')
->middleware('AdminMiddleware');
Route::get('/update_gv', function () {
    return view('layouts.admin.lecturer_management.update.update');
})->name('update_gv')->middleware('AdminMiddleware');

Route::get('/lecturer', [LecturerController::class, 'index'])->name('lecturer')->middleware('LecturerMiddleware');

Route::get('/student', [StudentController::class, 'index'])->name('student');

<<<<<<< HEAD
//trang cap nhat don vi cua phan admin
=======
//trang chu cua admin
Route::get('/home_admin', function () {
    return view('layouts.admin.home');
})->name('home_admin');

//trang cap nhat don vi cua phan amin
Route::get('/update_gv', function () {
    return view('layouts.admin.lecturer_management.update.update');
})->name('update_gv');
>>>>>>> 5c0aff7b8631c362df936b1444f5bc6b029412dd
