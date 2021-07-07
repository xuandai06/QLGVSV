<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\LecturerManangement\Update\UpdateMajorController;
use App\Http\Controllers\Admin\LecturerManangement\Update\UpdateSubjectController;
use App\Http\Controllers\Admin\LecturerManangement\Update\UpdateUnitController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\lecturer\LecturerController;
use App\Http\Controllers\student\StudentController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
})->name('home');

// auth
Route::get('/login', [LoginController::class, 'index'])
->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin')
->middleware('AdminMiddleware');
//end auth

//update lecturer
Route::get('/update/lecturer', function(){
 return view('layouts.admin.lecturer_management.menu_update');
})
->name('update/lecturer')
->middleware('AdminMiddleware');

    // units

Route::group(['middleware' => ['protectedAdminPage']], 
function(){
    Route::get('/update/units', [UpdateUnitController::class, 'index'])
    ->name('update/units');
    Route::post('/add/units', [UpdateUnitController::class, 'store'])
    ->name('add/units');
    Route::post('/delete/units/{unit}', [UpdateUnitController::class, 'delete'])
    ->name('delete/units');
    Route::get('/edit/units/index/{id}', [UpdateUnitController::class, 'edit_index'])
    ->name('edit/units/index');
    Route::post('/edit/units/{unit}', [UpdateUnitController::class, 'edit'])
    ->name('edit/units');
    Route::post('/search/units',[UpdateUnitController::class, 'search'])
    ->name('search/units');
});

    //end units

    //subjects
Route::get('/update/subjects', [UpdateSubjectController::class, 'index'])
->name('update/subjects');
Route::post('/add/subjects', [UpdateSubjectController::class, 'store'])
->name('add/subjects');
Route::post('/delete/subjects/{subject}', [UpdateSubjectController::class, 'delete'])
->name('delete/subjects');
Route::get('/edit/subjects/index/{id}', [UpdateSubjectController::class, 'edit_index'])
->name('edit/subjects/index');

Route::post('/edit/subjects/{subject}', [UpdateSubjectController::class, 'edit'])
->name('edit/subjects');
    //end subjects

    //subjects
Route::get('/update/majors', [UpdateMajorController::class, 'index'])
->name('update/majors');
    //end subjects

//end update lecturer
Route::get('/lecturer', [LecturerController::class, 'index'])
->name('lecturer')
->middleware('LecturerMiddleware');

Route::get('/student', [StudentController::class, 'index'])->name('student');

//trang bộ môn
Route::get('/update_subject', function () {
    return view('layouts.admin.lecturer_management.update.update_subjects');
})->name('update_subject');

//trang menu update
Route::get('/hiep', function () {
    return view('layouts.admin.lecturer_management.menu_update');
})->name('update');

//trang menu nganh
Route::get('/nganh', function () {
    return view('layouts.admin.lecturer_management.update.update_majors');
})->name('update_nganh');

//trang update chuc vu
Route::get('/chucvu', function () {
    return view('layouts.admin.lecturer_management.update.update_ positions');
})->name('update_ positions');

//trang update trinh do
Route::get('/trinhdo', function () {
    return view('layouts.admin.lecturer_management.update.update_ levels');
})->name('update_ levels');

//trang cap nhat update_lectures
Route::get('/update_lectures', function () {
    return view('layouts.admin.lecturer_management.update.update_lectures');
})->name('update_lectures');