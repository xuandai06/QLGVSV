<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\LecturerManangement\Update\UpdateLecturerController;
use App\Http\Controllers\Admin\LecturerManangement\Update\UpdateLevelController;
use App\Http\Controllers\Admin\LecturerManangement\Update\UpdateMajorController;
use App\Http\Controllers\Admin\LecturerManangement\Update\UpdatePositionController;
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

//UPDATE LECTURER
Route::get('/update/lecturer', function () {
    return view('layouts.admin.lecturer_management.menu_update');
})
    ->name('update/lecturer')
    ->middleware('AdminMiddleware');

// units

Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
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
        Route::post('/search/units', [UpdateUnitController::class, 'search'])
            ->name('search/units');
    }
);

//end units

//subjects
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
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
        Route::post('/search/subjects', [UpdateSubjectController::class, 'search'])
            ->name('search/subjects');
    }
);

//end subjects

//majors
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/majors', [UpdateMajorController::class, 'index'])
            ->name('update/majors');
        Route::post('/add/majors', [UpdateMajorController::class, 'store'])
            ->name('add/majors');
        Route::post('/delete/majors/{major}', [UpdateMajorController::class, 'delete'])
            ->name('delete/majors');
        Route::get('/edit/majors/index/{id}', [UpdateMajorController::class, 'edit_index'])
            ->name('edit/majors/index');
        Route::post('/edit/majors/{major}', [UpdateMajorController::class, 'edit'])
            ->name('edit/majors');
        Route::post('/search/majors', [UpdateMajorController::class, 'search'])
            ->name('search/majors');
    }
);
//end majors

//positions
Route::get('/update/positions', [UpdatePositionController::class, 'index'])
    ->name('update/positions');
//end positions

//levels
Route::get('/update/levels', [UpdateLevelController::class, 'index'])
    ->name('update/levels');
//end levels

//lecturer
Route::get('/update/lecturers', [UpdateLecturerController::class, 'index'])
    ->name('update/lecturers');
//end lecturer

//END UPDATE LECTURER
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
