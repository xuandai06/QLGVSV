<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\LecturerManangement\Statistical\UpdateUnitController;
use App\Http\Controllers\Admin\LecturerManangement\Update\UpdateSubjectController;
use App\Http\Controllers\Admin\LecturerManangement\Update\UpdateUnitController as UpdateUpdateUnitController;
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

Route::get('/update_gv', function () {
    return view('layouts.admin.lecturer_management.update.update');
})->name('update_gv')->middleware('AdminMiddleware');

Route::post('/add/unit', [UpdateUpdateUnitController::class, 'store'])->name('add/unit');
Route::post('/add/subject', [UpdateSubjectController::class, 'store'])->name('add/subject');

Route::get('/lecturer', [LecturerController::class, 'index'])->name('lecturer')->middleware('LecturerMiddleware');

Route::get('/student', [StudentController::class, 'index'])->name('student');


