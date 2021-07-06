<?php

use App\Http\Controllers\admin\AdminController;
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

Route::get('/login', [LoginController::class, 'index'])
->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin')
->middleware('AdminMiddleware');

Route::get('/update/units', [UpdateUpdateUnitController::class, 'index'])
->name('update/units');
Route::post('/add/units', [UpdateUpdateUnitController::class, 'store'])
->name('add/units');
Route::post('/delete/units/{unit}', [UpdateUpdateUnitController::class, 'delete'])
->name('delete/units');
Route::post('/edit/units/index/{unit}', [UpdateUpdateUnitController::class, 'edit_index'])
->name('edit/units/index');
Route::post('/edit/units/{unit}', [UpdateUpdateUnitController::class, 'edit'])
->name('edit/units');
Route::post('/search/units',[UpdateUpdateUnitController::class, 'search'])
->name('search/units');

Route::post('/add/subjects', [UpdateSubjectController::class, 'store'])
->name('add/subjects');


Route::get('/lecturer', [LecturerController::class, 'index'])
->name('lecturer')
->middleware('LecturerMiddleware');

Route::get('/student', [StudentController::class, 'index'])->name('student');

//trang bộ môn
Route::get('/update_subject', function () {
    return view('layouts.admin.lecturer_management.update.update_subject');
})->name('update_subject');

//trang menu update
Route::get('/hiep', function () {
    return view('layouts.admin.lecturer_management.menu_update');
})->name('update');