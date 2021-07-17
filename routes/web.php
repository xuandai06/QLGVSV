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
use App\Http\Controllers\admin\LecturerSchedule\Update\UpdateWorkAssignmentController;
use App\Http\Controllers\admin\LecturerSchedule\Update\UpdateWorkController;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Search\search_kind_of_sciences_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\article_details_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\articles_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\conferences_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\conferences_details_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\extra_trainings_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\implementation_levels_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\journals_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\topic_details_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\topics_syllabuses_controller;
use App\Http\Controllers\admin\scientific_research_management_of_lecturers\Update\update_kind_of_sciences_controller;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;

use App\Http\Controllers\student\StudentController;
use App\Models\Lecturer;
use App\Models\Level;
use App\Models\Major;
use App\Models\Position;
use App\Models\Subject;
use App\Models\Unit;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Hash;
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


// UPDATE  LECTURER SCHEDULES

//update work
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/works', [UpdateWorkController::class, 'index'])
            ->name('update/works');
        Route::post('/add/works', [UpdateWorkController::class, 'store'])
            ->name('add/works');
        Route::post('/delete/works/{work}', [UpdateWorkController::class, 'delete'])
            ->name('delete/works');
        Route::get('/edit/works/index/{id}', [UpdateWorkController::class, 'edit_index'])
            ->name('edit/works/index');
        Route::post('/edit/works/{work}', [UpdateWorkController::class, 'edit'])
            ->name('edit/works');
        Route::post('/search/works', [UpdateWorkController::class, 'search'])
            ->name('search/works');
    }
);
//end update work

//update work assignment
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/work/assignments', [UpdateWorkAssignmentController::class, 'index'])
            ->name('update/work/assignments');
        Route::post('/add/work/assignments', [UpdateWorkAssignmentController::class, 'store'])
            ->name('add/work/assignments');
        Route::post('/delete/work/assignments/{work_id}/{unit_id}', [UpdateWorkAssignmentController::class, 'delete'])
            ->name('delete/work/assignments');
        Route::get('/edit/work/assignments/index/{work_id}/{unit_id}', [UpdateWorkAssignmentController::class, 'edit_index'])
            ->name('edit/work/assignments/index');
        Route::post('/edit/work/assignments/{work_id}/{unit_id}', [UpdateWorkAssignmentController::class, 'edit'])
            ->name('edit/work/assignments');
        Route::get('/search/work/assignments', [UpdateWorkAssignmentController::class, 'search'])
            ->name('search/work/assignments');
    }
);
//end update work assignment
// END UPDATE LECTURER SCHEDULES

// END UPDATE NCKH GV




//Route cua Hung


//Lich cong tac GV
//Phan Update
Route::get('/teacherwork', function () {
    return view('layouts.admin.teacher_work_schedule.menu_update');
});
Route::get('update/work_info', function () {
    return view('layouts.admin.teacher_work_schedule.update.update_works');
});
Route::get('update/work_assignment', function () {
    return view('layouts.admin.teacher_work_schedule.update.update_work_assignment');
});
Route::get('update/result', function () {
    return view('layouts.admin.teacher_work_schedule.update.update_result');
});
Route::get('update/detail', function () {
    return view('layouts.admin.teacher_work_schedule.update.update_works_detail');
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
//Het lich cong tac GV


//Thời khóa biểu
Route::get('/timetable', function () {
    return view('layouts.admin.timetable.menu_update');
});

//Phan Update
Route::get('update/class', function () {
    return view('layouts.admin.timetable.Update.update_classes_section');
});
Route::get('update/courses', function () {
    return view('layouts.admin.timetable.Update.update_register_courses');
});
Route::get('update/rooms', function () {
    return view('layouts.admin.timetable.Update.update_rooms');
});
Route::get('update/timetable', function () {
    return view('layouts.admin.timetable.Update.update_timetables');
});

//phan search

Route::get('search/by_student_code', function () {
    return view('layouts.admin.timetable.Search.search_by_student_code');
});
Route::get('search/by_teacher_code', function () {
    return view('layouts.admin.timetable.Search.search_by_teacher_code');
});
Route::get('search/by_rooms', function () {
    return view('layouts.admin.timetable.Search.search_by_rooms');
});
Route::get('search/by_teaching_day', function () {
    return view('layouts.admin.timetable.Search.search_by_teaching_day');
});
Route::get('search/by_teaching_day_and_lesson', function () {
    return view('layouts.admin.timetable.Search.search_by_teaching_day_and_lesson');
});

//phan statistical
Route::get('/statistical', function () {
    return view('layouts.admin.timetable.statistical.menu_update');
});
Route::get('/statistical/lecturer', function () {
    return view('layouts.admin.timetable.statistical.GV.statistical_lecturer');
});
Route::get('/statistical/student', function () {
    return view('layouts.admin.timetable.statistical.SV.statistical_student');
});

//Phan quan ly sinh vien

Route::get('/student', function () {
    return view('layouts.admin.student_management.menu_update');
});

//Phan Update

Route::get('/update/student_information', function () {
    return view('layouts.admin.student_management.update.update_student_information');
});
Route::get('/update/student_class', function () {
    return view('layouts.admin.student_management.update.update_student_class');
});
Route::get('/update/student_boarding', function () {
    return view('layouts.admin.student_management.update.update_student_boarding');
});
Route::get('/update/student_outpatient', function () {
    return view('layouts.admin.student_management.update.update_student_outpatient');
});
Route::get('/update/student_policy', function () {
    return view('layouts.admin.student_management.update.update_student_policy');
});
Route::get('/update/student_reward_discipline', function () {
    return view('layouts.admin.student_management.update.update_student_reward_discipline');
});
Route::get('/update/student_graduate', function () {
    return view('layouts.admin.student_management.update.update_student_graduate');
});
Route::get('/update/student_quit', function () {
    return view('layouts.admin.student_management.update.update_student_quit_school');
});
Route::get('/update/student_study_point', function () {
    return view('layouts.admin.student_management.update.update_student_study_point ');
});

//phan search
Route::get('/search_student', function () {
    return view('layouts.admin.student_management.search.menu_search ');
});

Route::get('/search/student_by_name', function () {
    return view('layouts.admin.student_management.search.search_student.search_student_name ');
});
Route::get('/search/student_by_address', function () {
    return view('layouts.admin.student_management.search.search_student.search_student_address ');
});
Route::get('/search/student_by_sex', function () {
    return view('layouts.admin.student_management.search.search_student.search_student_sex ');
});
Route::get('/search/student_by_course', function () {
    return view('layouts.admin.student_management.search.search_student.search_student_course ');
});
Route::get('/search/student_by_boarding_outpatient', function () {
    return view('layouts.admin.student_management.search.search_student.search_student_boarding_outpatient ');
});
Route::get('/search/student_by_class', function () {
    return view('layouts.admin.student_management.search.search_student.search_student_class ');
});
Route::get('/search/student_by_policy', function () {
    return view('layouts.admin.student_management.search.search_student.search_student_policy ');
});
Route::get('/search/student_by_graduate', function () {
    return view('layouts.admin.student_management.search.search_student.search_student_graduate ');
});
Route::get('/search/student_by_quit', function () {
    return view('layouts.admin.student_management.search.search_student.search_student_quit ');
});
Route::get('/search/student_by_reward_discipline', function () {
    return view('layouts.admin.student_management.search.search_student.search_student_reward_discipline ');
});
Route::get('/search/student_by_study_point', function () {
    return view('layouts.admin.student_management.search.search_student.search_student_study_point ');
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
        Route::get('/edit/kind_of_sciences/index/{id}', [update_kind_of_sciences_controller::class, 'edit_index'])
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
        Route::post('/add/implementation_levels', [implementation_levels_controller::class, 'store'])
            ->name('add/implementation_levels');
        Route::post('/search/implementation_levels', [implementation_levels_controller::class, 'search'])
            ->name('search/implementation_levels');
        Route::post('/delete/implementation_levels/{implementation_levels}', [implementation_levels_controller::class, 'delete'])
            ->name('delete/implementation_levels');
        Route::get('/edit/implementation_levels/index/{id}', [implementation_levels_controller::class, 'edit_index'])
            ->name('edit/implementation_levels/index');
        Route::post('/edit/implementation_levels/{implementation_levels}', [implementation_levels_controller::class, 'edit'])
            ->name('edit/implementation_levels');
    }
);
//end update_implementation_levels

//update_topics_syllabuses
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/topics_syllabuses', [topics_syllabuses_controller::class, 'index'])
            ->name('update/topics_syllabuses');
        Route::post('/add/topics_syllabuses', [topics_syllabuses_controller::class, 'store'])
            ->name('add/topics_syllabuses');
        Route::post('/search/topics_syllabuses', [topics_syllabuses_controller::class, 'search'])
            ->name('search/topics_syllabuses');
        Route::post('/delete/topics_syllabuses/{topics_syllabuses}', [topics_syllabuses_controller::class, 'delete'])
            ->name('delete/topics_syllabuses');
        Route::get('/edit/topics_syllabuses/index/{id}', [topics_syllabuses_controller::class, 'edit_index'])
            ->name('edit/topics_syllabuses/index');
        Route::post('/edit/topics_syllabuses/{topics_syllabuses}', [topics_syllabuses_controller::class, 'edit'])
            ->name('edit/topics_syllabuses');
    }
);
//end update_topics_syllabuses

//topics_details
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/topic_details', [topic_details_controller::class, 'index'])
            ->name('update/topic_details');
        Route::post('/add/topic_details', [topic_details_controller::class, 'store'])
            ->name('add/topic_details');
        Route::post('/search/topic_details', [topic_details_controller::class, 'search'])
            ->name('search/topic_details');
        Route::post('/delete/topic_details/{topic_detail}', [topic_details_controller::class, 'delete'])
            ->name('delete/topic_details');
        Route::get('/edit/topic_details/index/{id}', [topic_details_controller::class, 'edit_index'])
            ->name('edit/topic_details/index');
        Route::post('/edit/topic_details/{topic_detail}', [topic_details_controller::class, 'edit'])
            ->name('edit/topic_details');
    }
);
//end topics_details

//journals
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/journals', [journals_controller::class, 'index'])
            ->name('update/journals');
        Route::post('/add/journals', [journals_controller::class, 'store'])
            ->name('add/journals');
        Route::post('/search/journals', [journals_controller::class, 'search'])
            ->name('search/journals');
        Route::post('/delete/journals/{journal}', [journals_controller::class, 'delete'])
            ->name('delete/journals');
        Route::get('/edit/journals/index/{id}', [journals_controller::class, 'edit_index'])
            ->name('edit/journals/index');
        Route::post('/edit/journals/{journal}', [journals_controller::class, 'edit'])
            ->name('edit/journals');
    }
);
//end journals

//articles
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/articles', [articles_controller::class, 'index'])
            ->name('update/articles');
        Route::post('/add/articles', [articles_controller::class, 'store'])
            ->name('add/articles');
        Route::post('/search/articles', [articles_controller::class, 'search'])
            ->name('search/articles');
        Route::post('/delete/articles/{article}', [articles_controller::class, 'delete'])
            ->name('delete/articles');
        Route::get('/edit/articles/index/{id}', [articles_controller::class, 'edit_index'])
            ->name('edit/articles/index');
        Route::post('/edit/articles/{article}', [articles_controller::class, 'edit'])
            ->name('edit/articles');
    }
);
//end articles

//article_details
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/article_details', [article_details_controller::class, 'index'])
            ->name('update/article_details');
        Route::post('/add/article_details', [article_details_controller::class, 'store'])
            ->name('add/article_details');
    }
);
//end article_details

//conferences
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/conferences', [conferences_controller::class, 'index'])
            ->name('update/conferences');
        Route::post('/add/conferences', [conferences_controller::class, 'store'])
            ->name('add/conferences');
        Route::post('/search/conferences', [conferences_controller::class, 'search'])
            ->name('search/conferences');
        Route::post('/delete/conferences/{conference}', [conferences_controller::class, 'delete'])
            ->name('delete/conferences');
        Route::get('/edit/conferences/index/{id}', [conferences_controller::class, 'edit_index'])
            ->name('edit/conferences/index');
        Route::post('/edit/conferences/{conference}', [conferences_controller::class, 'edit'])
            ->name('edit/conferences');
    }
);
//end conferences

//conferences_details
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/conferences_details', [conferences_details_controller::class, 'index'])
            ->name('update/conferences_details');
    }
);
//end conferences_details

//extra_trainings
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/extra_trainings', [extra_trainings_controller::class, 'index'])
            ->name('update/extra_trainings');
    }
);
//end extra_trainings

//SEARCHING LECTURER NCKH
Route::get('/search/kind_of_sciences', [search_kind_of_sciences_controller::class, 'index'])
    ->name('search/kind_of_sciences');
//END SEARCHING LECTURER
//end Hiep

//datatest

Route::get('/create/units', function () {
    $unit = new Unit();
    $unit->id = '1KTCN';
    $unit->name = 'Kĩ thuật công nghệ';

    $unit->save();

    $unit = new Unit();
    $unit->id = '2NN';
    $unit->name = 'Ngoại ngữ';

    $unit->save();
});

Route::get('/create/subjects', function () {
    $subject = new Subject();
    $subject->id = '1BM';
    $subject->name = 'Công nghệ phần mềm';
    $subject->unit_id = '1KTCN';

    $subject->save();

    $subject = new Subject();
    $subject->id = '2BM';
    $subject->name = 'Mạng và truyền thông';
    $subject->unit_id = '1KTCN';

    $subject->save();

    $subject = new Subject();
    $subject->id = '3BM';
    $subject->name = 'Sửa điện';
    $subject->unit_id = '1KTCN';

    $subject->save();

    $subject = new Subject();
    $subject->id = '4BM';
    $subject->name = 'Hàn xì';
    $subject->unit_id = '1KTCN';

    $subject->save();
});

Route::get('/create/majors', function () {
    $major = new Major();
    $major->id = '1N';
    $major->name = 'Công nghệ thông tin';
    $major->subject_id = '1BM';

    $major->save();

    $major = new Major();
    $major->id = '2N';
    $major->name = 'Điện điện tử';
    $major->subject_id = '3BM';

    $major->save();

    $major = new Major();
    $major->id = '3N';
    $major->name = 'Cơ khí';
    $major->subject_id = '4BM';

    $major->save();
});

Route::get('/create/positions', function () {
    $position = new Position();
    $position->id = '1CV';
    $position->name = 'Trưởng khoa';
    $position->save();

    $position = new Position();
    $position->id = '2CV';
    $position->name = 'Phó khoa';
    $position->save();

    $position = new Position();
    $position->id = '3CV';
    $position->name = 'Cố vấn học tập';
    $position->save();

    $position = new Position();
    $position->id = '4CV';
    $position->name = 'Giảng viên';
    $position->save();
});

Route::get('/create/levels', function () {
    $level = new Level();
    $level->id = '1TD';
    $level->name = 'Giáo sư';
    $level->save();

    $level = new Level();
    $level->id = '2TD';
    $level->name = 'Tiến sĩ';
    $level->save();

    $level = new Level();
    $level->id = '3TD';
    $level->name = 'Thạc sĩ';
    $level->save();

    $level = new Level();
    $level->id = '4TD';
    $level->name = 'Đại học';
    $level->save();
});

Route::get('/create/lecturers', function () {

    $user = new User();
    $user->id = '1GV';
    $user->email = 'daideptrai41@gmail.com';
    $user->role = 'lecturer';
    $user->password = Hash::make('123456');
    $user->save();

    $lecturer = new Lecturer();
    $lecturer->id = '1GV';
    $lecturer->name = 'Nguyễn Xuân Đại';
    $lecturer->sex = 'Nam';
    $lecturer->hometown = 'Cự Thắng - Thanh Sơn - Phú Thọ';
    $lecturer->address = 'Khu 41- Cự thắng - Thanh Sơn - Phú Thọ';
    $lecturer->phone_number = '0328199325';
    $lecturer->note = 'Đẹp trai nhất khoa';
    $lecturer->position_id = '1CV';
    $lecturer->level_id = '1TD';
    $lecturer->major_id = '1N';
    $lecturer->save();

    $user = new User();
    $user->id = '2GV';
    $user->email = 'hoanghiep@gmail.com';
    $user->role = 'lecturer';
    $user->password = Hash::make('123456');
    $user->save();

    $lecturer = new Lecturer();
    $lecturer->id = '2GV';
    $lecturer->name = 'Nguyễn Hoàng Hiệp';
    $lecturer->sex = 'Nữ';
    $lecturer->hometown = 'Phú Thọ';
    $lecturer->address = 'Thanh Vinh - Thị Xã Phú Thọ - Phú Thọ';
    $lecturer->phone_number = '12345678910';
    $lecturer->note = 'Đen nhất khoa';
    $lecturer->position_id = '4CV';
    $lecturer->level_id = '4TD';
    $lecturer->major_id = '1N';
    $lecturer->save();


    $user = new User();
    $user->id = '3GV';
    $user->email = 'manhhung@gmail.com';
    $user->role = 'lecturer';
    $user->password = Hash::make('123456');
    $user->save();
    $lecturer = new Lecturer();
    $lecturer->id = '3GV';
    $lecturer->name = 'Tạ Mạnh Hùng';
    $lecturer->sex = 'Khác';
    $lecturer->hometown = 'Phú Thọ';
    $lecturer->address = 'Tổ 9 - Khu Dữu Lâu - Phường Dữu Lâu - Việt Trì - Phú Thọ';
    $lecturer->phone_number = '12345678910';
    $lecturer->note = 'Không biết bơi';
    $lecturer->position_id = '3CV';
    $lecturer->level_id = '3TD';
    $lecturer->major_id = '1N';
    $lecturer->save();


    $user = new User();
    $user->id = '4GV';
    $user->email = 'tienchi@gmail.com';
    $user->role = 'lecturer';
    $user->password = Hash::make('123456');
    $user->save();
    $lecturer = new Lecturer();
    $lecturer->id = '4GV';
    $lecturer->name = 'Nguyễn Tiến Chí';
    $lecturer->sex = 'Nam';
    $lecturer->hometown = 'Phú Thọ';
    $lecturer->address = 'Thanh ba - Phú Thọ';
    $lecturer->phone_number = '12345678910';
    $lecturer->note = 'cao 1m6';
    $lecturer->position_id = '2CV';
    $lecturer->level_id = '2TD';
    $lecturer->major_id = '2N';
    $lecturer->save();

    $user = new User();
    $user->id = '5GV';
    $user->email = 'ducnhat@gmail.com';
    $user->role = 'lecturer';
    $user->password = Hash::make('123456');
    $user->save();
    $lecturer = new Lecturer();
    $lecturer->id = '5GV';
    $lecturer->name = 'Gì Đức Nhật';
    $lecturer->sex = 'Nữ';
    $lecturer->hometown = 'Phú Thọ';
    $lecturer->address = 'Thanh ba - Phú Thọ';
    $lecturer->phone_number = '12345678910';
    $lecturer->note = 'Hay nói phét';
    $lecturer->position_id = '2CV';
    $lecturer->level_id = '2TD';
    $lecturer->major_id = '3N';
    $lecturer->save();
});


//end datatest
