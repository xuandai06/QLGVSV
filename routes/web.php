<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\lecturer\LecturerController;
use App\Http\Controllers\student\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/lecturer', [LecturerController::class, 'lecturer'])->name('lecturer');
Route::get('/student', [studentController::class, 'student'])->name('student');

Route::get('/student', function(){
    return view('layouts.student.menu');
});


