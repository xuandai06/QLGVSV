<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\LecturerManagement\LecturerStatisticController;
use App\Http\Controllers\Admin\LecturerManagement\SearchController;
use App\Http\Controllers\Admin\LecturerManagement\SearchLecturerController;
use App\Http\Controllers\Admin\LecturerManagement\Update\UpdateLecturerController;
use App\Http\Controllers\Admin\LecturerManagement\Update\UpdateLevelController;
use App\Http\Controllers\Admin\LecturerManagement\Update\UpdateMajorController;
use App\Http\Controllers\Admin\LecturerManagement\Update\UpdatePositionController;
use App\Http\Controllers\Admin\LecturerManagement\Update\UpdateSubjectController;
use App\Http\Controllers\Admin\LecturerManagement\Update\UpdateUnitController;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\nckh_type_controller;
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
    }
);
//END SEARCHING LECTURER


//LECTURER STATISTICS
Route::get('/statistic/lecturers', [LecturerStatisticController::class, 'index'])
    ->name('statistic/lecturers')
    ->middleware('AdminMiddleware');

Route::get('/analyse/lecturers', [LecturerStatisticController::class, 'analyse'])
    ->name('analyse/lecturers')
    ->middleware('AdminMiddleware');

//END LECTURERS STATISTICS

//Hiep lam backend tu day

//nckh_type
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/nckh_type', [nckh_type_controller::class, 'index'])
            ->name('update/nckh_type');
        Route::post('/add/nckh_type', [nckh_type_controller::class, 'store'])
            ->name('add/nckh_type');
        Route::post('/delete/nckh_type/{kind_of_science}', [nckh_type_controller::class, 'delete'])
            ->name('delete/nckh_type');
        Route::post('/search/nckh_type', [nckh_type_controller::class, 'search'])
            ->name('search/nckh_type');
        Route::get('/edit/nckh_type/index/{id}', [nckh_type_controller::class, 'edit_index'])
            ->name('edit/nckh_type/index');
        Route::post('/edit/nckh_type/{kind_of_science}', [nckh_type_controller::class, 'edit'])
            ->name('edit/nckh_type');
    }
);
//end nckh_type

//endHiep




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

Route::get('/nckh_update/magazine', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.nckh_magazine');
})->name('/nckh_update/magazine');

Route::get('/nckh_update/info', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.nckh_info');
})->name('/nckh_update/info');

Route::get('/nckh_update/role', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.nckh_role');
})->name('/nckh_update/role');

Route::get('/nckh_update/category', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.nckh_category');
})->name('/nckh_update/category');

Route::get('/nckh_update/seminor_role', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.nckh_seminor_role');
})->name('/nckh_update/seminor_role');

Route::get('/nckh_update/fostering', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.nckh_fostering');
})->name('/nckh_update/fostering');

// end hung stupid