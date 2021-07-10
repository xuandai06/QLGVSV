<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\LecturerManagement\SearchController;
use App\Http\Controllers\Admin\LecturerManagement\SearchLecturerController;
use App\Http\Controllers\Admin\LecturerManagement\Update\UpdateLecturerController;
use App\Http\Controllers\Admin\LecturerManagement\Update\UpdateLevelController;
use App\Http\Controllers\Admin\LecturerManagement\Update\UpdateMajorController;
use App\Http\Controllers\Admin\LecturerManagement\Update\UpdatePositionController;
use App\Http\Controllers\Admin\LecturerManagement\Update\UpdateSubjectController;
use App\Http\Controllers\Admin\LecturerManagement\Update\UpdateUnitController;
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
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/positions', [UpdatePositionController::class, 'index'])
            ->name('update/positions');
        Route::post('/add/positions', [UpdatePositionController::class, 'store'])
            ->name('add/positions');
        Route::post('/delete/positions/{position}', [UpdatePositionController::class, 'delete'])
            ->name('delete/positions');
        Route::get('/edit/positions/index/{id}', [UpdatePositionController::class, 'edit_index'])
            ->name('edit/positions/index');
        Route::post('/edit/positions/{position}', [UpdatePositionController::class, 'edit'])
            ->name('edit/positions');
        Route::post('/search/positions', [UpdatePositionController::class, 'search'])
            ->name('search/positions');
    }
);
//end positions

//levels
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/levels', [UpdateLevelController::class, 'index'])
            ->name('update/levels');
        Route::post('/add/levels', [UpdateLevelController::class, 'store'])
            ->name('add/levels');
        Route::post('/delete/levels/{level}', [UpdateLevelController::class, 'delete'])
            ->name('delete/levels');
        Route::get('/edit/levels/index/{id}', [UpdateLevelController::class, 'edit_index'])
            ->name('edit/levels/index');
        Route::post('/edit/levels/{level}', [UpdateLevelController::class, 'edit'])
            ->name('edit/levels');
        Route::post('/search/levels', [UpdateLevelController::class, 'search'])
            ->name('search/levels');
    }
);
//end levels

//lecturer
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/lecturers', [UpdateLecturerController::class, 'index'])
            ->name('update/lecturers');
        Route::post('/add/lecturers', [UpdateLecturerController::class, 'store'])
            ->name('add/lecturers');
        Route::post('/delete/lecturers/{lecturer}', [UpdateLecturerController::class, 'delete'])
            ->name('delete/lecturers');
        Route::get('/edit/lecturers/index/{id}', [UpdateLecturerController::class, 'edit_index'])
            ->name('edit/lecturers/index');
        Route::post('/edit/lecturers/{lecturer}', [UpdateLecturerController::class, 'edit'])
            ->name('edit/lecturers');
        Route::post('/search/lecturers', [UpdateLecturerController::class, 'search'])
            ->name('search/lecturers');
    }
);
//end lecturer

//END UPDATE LECTURER

//SEARCHING LECTURER
Route::get('/search/index/details/lecturers', [SearchLecturerController::class, 'index'])
    ->name('search/index/details/lecturers')
    ->middleware('AdminMiddleware');

Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/search/details/lecturers', [SearchLecturerController::class, 'search'])
            ->name('search/details/lecturers');



        Route::get('/search/lecturers/by_lecturers_id', [SearchLecturerController::class, 'by_lecturers_id'])
            ->name('search/lecturers/by_lecturers_id');
        Route::get('/search/lecturers/by_positions_id', [SearchLecturerController::class, 'by_positions_id'])
            ->name('search/lecturers/by_positions_id');
        Route::get('/search/lecturers/by_majors_id', [SearchLecturerController::class, 'by_majors_id'])
            ->name('search/lecturers/by_majors_id');
        Route::get('/edit/lecturers/by_levels_id', [SearchLecturerController::class, 'by_levels_id'])
            ->name('edit/lecturers/by_levels_id');
        Route::get('/edit/lecturers/by_subjects_id', [SearchLecturerController::class, 'by_subjects_id'])
            ->name('edit/lecturers/by_subjects_id');
        Route::get('/edit/lecturers/by_fullname_id', [SearchLecturerController::class, 'by_fullname'])
            ->name('edit/lecturers/by_fullname_id');
        Route::get('/edit/lecturers/by_name', [SearchLecturerController::class, 'by_name'])
            ->name('edit/lecturers/by_name');
        Route::get('/edit/lecturers/by_address', [SearchLecturerController::class, 'by_address'])
            ->name('edit/lecturers/by_address');
        Route::get('/edit/lecturers/by_hometown', [SearchLecturerController::class, 'by_hometown'])
            ->name('edit/lecturers/by_hometown');
        Route::get('/edit/lecturers/by_sex', [SearchLecturerController::class, 'by_sex'])
            ->name('edit/lecturers/by_sex');
    }
);
//END SEARCHING LECTURER

// hung ngu

Route::get('/thongke', function () {
    return view('layouts.admin.lecturer_management.statistical.statistical_lecturers');
});
Route::get('/nckh_update', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.menu_update');
});

Route::get('/nckh_update/type', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.nckh_type');
})->name('/nckh_update/type');

// end hung stupid




//Hiep ngu
Route::get('/lecturer', [LecturerController::class, 'index'])
    ->name('lecturer')
    ->middleware('LecturerMiddleware');

Route::get('/student', [StudentController::class, 'index'])->name('student');

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

//trang search lucturer

Route::get('/search_lecturers', function () {
    return view('layouts.admin.lecturer_management.search.search_lecturers');
});
