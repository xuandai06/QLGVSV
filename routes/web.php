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
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\articles_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\implementation_levels_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\journals_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\topic_details_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\topics_syllabuses_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\update_kind_of_sciences_controller;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\lecturer\LecturerController;
use App\Http\Controllers\student\StudentController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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


//Route cua Hung

//Phan Update
Route::get('/teacherwork', function () {
    return view('layouts.admin.teacher_work_schedule.menu_update');
});
Route::get('update/work_info', function () {
    return view('layouts.admin.teacher_work_schedule.update.update_work_info');
});
Route::get('update/work_assignment', function () {
    return view('layouts.admin.teacher_work_schedule.update.update_work_assignment');
});
Route::get('update/result', function () {
    return view('layouts.admin.teacher_work_schedule.update.update_result');
});
Route::get('update/detail', function () {
    return view('layouts.admin.teacher_work_schedule.update.update_jobs_detail');
});

//Phan Search
Route::get('search/instuctor', function () {
    return view('layouts.admin.teacher_work_schedule.Search.search_for_instuctors_by_time');
});
Route::get('search/jobs_name', function () {
    return view('layouts.admin.teacher_work_schedule.Search.search_for_jobs_name_by_time');
});
Route::get('search/units', function () {
    return view('layouts.admin.teacher_work_schedule.Search.search_for_units_by_time');
});
Route::get('search/time', function () {
    return view('layouts.admin.teacher_work_schedule.Search.search_by_start_time');
});
Route::get('search/completion', function () {
    return view('layouts.admin.teacher_work_schedule.Search.search_by_completion_level');
});

//Phan Statistical
Route::get('statistical/teacher_work', function () {
    return view('layouts.admin.teacher_work_schedule.Statistical.statistcal_teacher_work_schedule');
});

//Het Route cua Hung





//Hiep lam backend tu day

//nckh_type
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/kind_of_sciences', [update_kind_of_sciences_controller::class, 'index'])
            ->name('update/kind_of_sciences');
        Route::post('/add/kind_of_sciences', [update_kind_of_sciences_controller::class, 'store'])
            ->name('add/kind_of_sciences');
        Route::post('/delete/kind_of_sciences/{kind_of_science}', [update_kind_of_sciences_controller::class, 'delete'])
            ->name('delete/kind_of_sciences');
        Route::post('/search/kind_of_sciences', [update_kind_of_sciences_controller::class, 'search'])
            ->name('search/kind_of_sciences');
        Route::get('/edit/nckh_type/index/{id}', [update_kind_of_sciences_controller::class, 'edit_index'])
            ->name('edit/kind_of_sciences/index');
        Route::post('/edit/kind_of_sciences/{kind_of_science}', [update_kind_of_sciences_controller::class, 'edit'])
            ->name('edit/kind_of_sciences');
    }
);
//end nckh_type

//update_implementation_levels
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/update_implementation_levels', [implementation_levels_controller::class, 'index'])
            ->name('update/update_implementation_levels');
    }
);
//end update_implementation_levels

//update_topics_syllabuses
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/topics_syllabuses', [topics_syllabuses_controller::class, 'index'])
            ->name('update/topics_syllabuses');
    }
);
//end update_topics_syllabuses

//topics_details
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/topic_details', [topic_details_controller::class, 'index'])
            ->name('update/topic_details');
    }
);
//end topics_details

//journals
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/journals', [journals_controller::class, 'index'])
            ->name('update/journals');
    }
);
//end journals

//articles
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/articles', [articles_controller::class, 'index'])
            ->name('update/articles');
    }
);
//end 
//end articles
//end Hiep