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
use App\Http\Controllers\admin\LecturerSchedule\Search\SearchByCompletionLevelController;
use App\Http\Controllers\admin\LecturerSchedule\Search\SearchByStartTimeController;
use App\Http\Controllers\admin\LecturerSchedule\Search\SearchForJobsNameByTimeController;
use App\Http\Controllers\admin\LecturerSchedule\Search\SearchForLecturersByTimeController;
use App\Http\Controllers\admin\LecturerSchedule\Search\SearchForUnitsByTimeController;
use App\Http\Controllers\admin\LecturerSchedule\Update\UpdateResultController;
use App\Http\Controllers\admin\LecturerSchedule\Update\UpdateWorkAssignmentController;
use App\Http\Controllers\admin\LecturerSchedule\Update\UpdateWorkController;
use App\Http\Controllers\admin\LecturerSchedule\Update\UpdateWorkDetailController;
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
use App\Models\Result;
use App\Models\Subject;
use App\Models\Unit;
use App\Models\User;
use App\Models\Work;
use App\Models\Work_assignment;
use App\Models\Work_detail;
use Carbon\Carbon;
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

//update work details
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/work/details', [UpdateWorkDetailController::class, 'index'])
            ->name('update/work/details');
        Route::post('/add/work/details', [UpdateWorkDetailController::class, 'store'])
            ->name('add/work/details');
        Route::post('/delete/work/details/{work_id}/{lecturer_id}', [UpdateWorkDetailController::class, 'delete'])
            ->name('delete/work/details');
        Route::get('/edit/work/details/index/{work_id}/{lecturer_id}', [UpdateWorkDetailController::class, 'edit_index'])
            ->name('edit/work/details/index');
        Route::post('/edit/work/details/{work_id}/{lecturer_id}', [UpdateWorkDetailController::class, 'edit'])
            ->name('edit/work/details');
        Route::get('/search/work/details', [UpdateWorkDetailController::class, 'search'])
            ->name('search/work/details');
    }
);
//end update work details

//update work results
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/results', [UpdateResultController::class, 'index'])
            ->name('update/results');
        Route::post('/add/results', [UpdateResultController::class, 'store'])
            ->name('add/results');
        Route::post('/delete/results/{result}', [UpdateResultController::class, 'delete'])
            ->name('delete/results');
        Route::get('/edit/results/index/{work_id}', [UpdateResultController::class, 'edit_index'])
            ->name('edit/results/index');
        Route::post('/edit/results//{result}', [UpdateResultController::class, 'edit'])
            ->name('edit/results');
        Route::get('/search/results', [UpdateResultController::class, 'search'])
            ->name('search/results');
    }
);
//end update results

// END UPDATE LECTURER SCHEDULES

//SEARCHING WORK

Route::get('/search/work', function () {
    return view('layouts.admin.teacher_work_schedule.search.menu_search');
})
    ->name('search/work')
    ->middleware('AdminMiddleware');

//search by completion level
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/search/by_completion_level/index', [SearchByCompletionLevelController::class, 'index'])
            ->name('search/by_completion_level/index');
        Route::get('/search/by_completion_level', [SearchByCompletionLevelController::class, 'search'])
            ->name('search/by_completion_level');
    }
);
// end search by completion level

//search by start time
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/search/by_start_time/index', [SearchByStartTimeController::class, 'index'])
            ->name('search/by_start_time/index');

        Route::get('/search/by_start_time', [SearchByStartTimeController::class, 'search'])
            ->name('search/by_start_time');
    }
);
// end search by start time

//search for jobs name by time

Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/search/for_jobs_name_by_time/index', [SearchForJobsNameByTimeController::class, 'index'])
            ->name('search/for_jobs_name_by_time/index');

        Route::get('/search/for_jobs_name_by_time', [SearchForJobsNameByTimeController::class, 'search'])
            ->name('search/for_jobs_name_by_time');
    }
);
// end search for jobs name by time

//search for lecturers by time
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/search/for_lecturers_by_time/index', [SearchForLecturersByTimeController::class, 'index'])
            ->name('search/for_lecturers_by_time/index');

        Route::get('/search/for_lecturers_by_time', [SearchForLecturersByTimeController::class, 'search'])
            ->name('search/for_lecturers_by_time');
    }
);
// end search for lecturers by time

//search for units by time
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('search/for_units_by_time/index', [SearchForUnitsByTimeController::class, 'index'])
            ->name('search/for_units_by_time/index');

        Route::get('/search/for_units_by_time', [SearchForUnitsByTimeController::class, 'search'])
            ->name('search/for_units_by_time');
    }
);
// end search for units by time
//END SEARCHING WORK

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
Route::get('search/instructor', function () {
    return view('layouts.admin.teacher_work_schedule.Search.search_teacher_work.search_for_lecturers_by_time');
});
Route::get('search/jobs_name', function () {
    return view('layouts.admin.teacher_work_schedule.Search.search_teacher_work.search_for_jobs_name_by_time');
});
Route::get('search/units', function () {
    return view('layouts.admin.teacher_work_schedule.Search.search_teacher_work.search_for_units_by_time');
});
Route::get('search/time', function () {
    return view('layouts.admin.teacher_work_schedule.Search.search_teacher_work.search_by_start_time');
});
Route::get('search/completion', function () {
    return view('layouts.admin.teacher_work_schedule.Search.search_teacher_work.search_by_completion_level');
});

//Phan Statistical
Route::get('statistical/teacher_work', function () {
    return view('layouts.admin.teacher_work_schedule.Statistical.statistcal_teacher_work_schedule');
});
//Het lich cong tac GV


//Th???i kh??a bi???u
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

Route::get('/search/student_info', function () {
    return view('layouts.admin.student_management.search.search_student.search_student_name ');
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


//phan statistical
Route::get('/statistical_student', function () {
    return view('layouts.admin.student_management.statistical.menu_statistical');
});
Route::get('/statistical_student/info', function () {
    return view('layouts.admin.student_management.statistical.statistical_student.statistical_number_of_student');
});
Route::get('/statistical_student/boarding_outpatient', function () {
    return view('layouts.admin.student_management.statistical.statistical_student.statistical_student_boarding_outpatient');
});
Route::get('/statistical_student/reward_discipline', function () {
    return view('layouts.admin.student_management.statistical.statistical_student.statistical_student_reward_discipline');
});
Route::get('/statistical_student/policy', function () {
    return view('layouts.admin.student_management.statistical.statistical_student.statistical_student_policy');
});
Route::get('/statistical_student/graduate_quit', function () {
    return view('layouts.admin.student_management.statistical.statistical_student.statistical_student_graduate_quit');
});
Route::get('/statistical_student/study_point', function () {
    return view('layouts.admin.student_management.statistical.statistical_student.statistical_student_study_point');
});

// NCKH SV

//phan update
Route::get('/update_scientific_student', function () {
    return view('layouts.admin.scientific_research_management_of_student.menu_update');
});
Route::get('/update_scientific_student/name', function () {
    return view('layouts.admin.scientific_research_management_of_student.update.update_scientific_name');
});
Route::get('/update_scientific_student/essay_course', function () {
    return view('layouts.admin.scientific_research_management_of_student.update.update_essay_graduation_course');
});
Route::get('/update_scientific_student/scientific', function () {
    return view('layouts.admin.scientific_research_management_of_student.update.update_scientific_student');
});

//phan search
Route::get('/search_scientific_student', function () {
    return view('layouts.admin.scientific_research_management_of_student.search.menu_search');
});
Route::get('/search_scientific_student/name', function () {
    return view('layouts.admin.scientific_research_management_of_student.search.search_science_student.search_science_name');
});
Route::get('/search_scientific_student/student_name', function () {
    return view('layouts.admin.scientific_research_management_of_student.search.search_science_student.search_science_student_name');
});
Route::get('/search_scientific_student/instructor', function () {
    return view('layouts.admin.scientific_research_management_of_student.search.search_science_student.search_science_instructor');
});
Route::get('/search_scientific_student/reward', function () {
    return view('layouts.admin.scientific_research_management_of_student.search.search_science_student.search_science_reward');
});

//phan statistical
Route::get('/statistical_scientific_student', function () {
    return view('layouts.admin.scientific_research_management_of_student.statistical.menu_statistical');
});
Route::get('/statistical_scientific_student/scientific', function () {
    return view('layouts.admin.scientific_research_management_of_student.statistical.statistical_science_student.statistical_sience');
});
Route::get('/statistical_scientific_student/reward', function () {
    return view('layouts.admin.scientific_research_management_of_student.statistical.statistical_science_student.statistical_science_reward');
});
Route::get('/statistical_scientific_student/instructor', function () {
    return view('layouts.admin.scientific_research_management_of_student.statistical.statistical_science_student.statistical_science_instructor');
});



//Phan NCKH GV
Route::get('/update_scientific_lecturers', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.menu_update');
});
//Phan update
Route::get('/update_scientific_lecturers/article_details', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_article_details');
});
Route::get('/update_scientific_lecturers/articles', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_articles');
});
Route::get('/update_scientific_lecturers/conferences_details', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_conferences_details');
});
Route::get('/update_scientific_lecturers/conferences', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_conferences');
});
Route::get('/update_scientific_lecturers/extra_trainings', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_extra_trainings');
});
Route::get('/update_scientific_lecturers/implementation', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_implementation_levels');
});
Route::get('/update_scientific_lecturers/kind_of_sciences', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_kind_of_sciences');
});
Route::get('/update_scientific_lecturers/topics_syllabuses', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.update.update_topics_syllabuses');
});

//Phan search
Route::get('/search_scientific_lecturers', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.search.menu');
});
Route::get('/search_scientific_lecturers/search_by_magazine', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.search.search_lecturer.search_by_magazine');
});
Route::get('/search_scientific_lecturers/search_fostering_lecturer', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.search.search_lecturer.search_fostering_lecturer');
});
Route::get('/search_scientific_lecturers/kind_of_sciences', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.search.search_lecturer.search_kind_of_sciences');
});
Route::get('/search_scientific_lecturers/lecturer_role', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.search.search_lecturer.search_lecturer_role');
});
Route::get('/search_scientific_lecturers/science_by_lecturer', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.search.search_lecturer.search_science_by_lecturer');
});

//Phan statistaical
Route::get('/statistical_scientific_lecturers', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.statistical.menu_statistical');
});
Route::get('/statistical_scientific_lecturers/articles_by_magazine', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.statistical.statistical_lecturer.statistical_articles_by_magazine');
});
Route::get('/statistical_scientific_lecturers/fostering_lecturers', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.statistical.statistical_lecturer.statistical_fostering_lecturers');
});
Route::get('/statistical_scientific_lecturers/scientific_by_years', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.statistical.statistical_lecturer.statistical_scientific_by_years');
});
Route::get('/statistical_scientific_lecturers/seminor_by_time', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.statistical.statistical_lecturer.statistical_seminor_by_time');
});
Route::get('/statistical_scientific_lecturers/topics_by_lecturers', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.statistical.statistical_lecturer.statistical_topics_by_lecturers');
});
Route::get('/statistical_scientific_lecturers/topics_by_level_of_implementation', function () {
    return view('layouts.admin.scientific_research_management_of_lecturers.statistical.statistical_lecturer.statistical_topics_by_level_of_implementation');
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
        Route::post('/delete/topic_details/{topic_syllabus_id}/{lecturer_id}', [topic_details_controller::class, 'delete'])
            ->name('delete/topic_details');
        Route::get('/edit/topic_details/index/{topic_syllabus_id}/{lecturer_id}', [topic_details_controller::class, 'edit_index'])
            ->name('edit/topic_details/index');
        Route::post('/edit/topic_details/{topic_syllabus_id}/{lecturer_id}', [topic_details_controller::class, 'edit'])
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
        Route::post('/search/article_details', [article_details_controller::class, 'search'])
            ->name('search/article_details');
        Route::post('/delete/article_details/{article_id}/{lecturer_id}', [article_details_controller::class, 'delete'])
            ->name('delete/article_details');
        Route::get('/edit/article_details/index/{article_id}/{lecturer_id}', [article_details_controller::class, 'edit_index'])
            ->name('edit/article_details/index');
        Route::post('/edit/article_details/{article_id}/{lecturer_id}', [article_details_controller::class, 'edit'])
            ->name('edit/article_details');
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
        Route::post('/add/conferences_details', [conferences_details_controller::class, 'store'])
            ->name('add/conferences_details');
        Route::post('/search/conferences_details', [conferences_details_controller::class, 'search'])
            ->name('search/conferences_details');
        Route::post('/delete/conferences_details/{conference_id}/{lecturer_id}', [conferences_details_controller::class, 'delete'])
            ->name('delete/conferences_details');
        Route::get('/edit/conferences_details/index/{conference_id}/{lecturer_id}', [conferences_details_controller::class, 'edit_index'])
            ->name('edit/conferences_details/index');
        Route::post('/edit/conferences_details/{conference_id}/{lecturer_id}', [conferences_details_controller::class, 'edit'])
            ->name('edit/conferences_details');
    }
);
//end conferences_details

//extra_trainings
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/update/extra_trainings', [extra_trainings_controller::class, 'index'])
            ->name('update/extra_trainings');
        Route::post('/add/extra_trainings', [extra_trainings_controller::class, 'store'])
            ->name('add/extra_trainings');
        Route::post('/search/extra_trainings', [extra_trainings_controller::class, 'search'])
            ->name('search/extra_trainings');
        Route::post('/delete/extra_trainings/{id}/{lecturer_id}', [extra_trainings_controller::class, 'delete'])
            ->name('delete/extra_trainings');
        Route::get('/edit/extra_trainings/index/{id}/{lecturer_id}', [extra_trainings_controller::class, 'edit_index'])
            ->name('edit/extra_trainings/index');
        Route::post('/edit/extra_trainings/{id}/{lecturer_id}', [extra_trainings_controller::class, 'edit'])
            ->name('edit/extra_trainings');
    }
);
//end extra_trainings

//SEARCHING LECTURER NCKH
Route::group(
    ['middleware' => ['protectedAdminPage']],
    function () {
        Route::get('/search/kind_of_sciences', [search_kind_of_sciences_controller::class, 'index'])
            ->name('search/kind_of_sciences');
        Route::get('/search/kind_of_sciences/keyword', [search_kind_of_sciences_controller::class, 'search'])
            ->name('search/kind_of_sciences/keyword');
    }
);
//END SEARCHING LECTURER
//end Hiep

//datatest

Route::get('/create/units', function () {
    $unit = new Unit();
    $unit->id = '1KTCN';
    $unit->name = 'K?? thu???t c??ng ngh???';

    $unit->save();

    $unit = new Unit();
    $unit->id = '2NN';
    $unit->name = 'Ngo???i ng???';

    $unit->save();
});

Route::get('/create/subjects', function () {
    $subject = new Subject();
    $subject->id = '1BM';
    $subject->name = 'C??ng ngh??? ph???n m???m';
    $subject->unit_id = '1KTCN';

    $subject->save();

    $subject = new Subject();
    $subject->id = '2BM';
    $subject->name = 'M???ng v?? truy???n th??ng';
    $subject->unit_id = '1KTCN';

    $subject->save();

    $subject = new Subject();
    $subject->id = '3BM';
    $subject->name = 'S???a ??i???n';
    $subject->unit_id = '1KTCN';

    $subject->save();

    $subject = new Subject();
    $subject->id = '4BM';
    $subject->name = 'H??n x??';
    $subject->unit_id = '1KTCN';

    $subject->save();
});

Route::get('/create/majors', function () {
    $major = new Major();
    $major->id = '1N';
    $major->name = 'C??ng ngh??? th??ng tin';
    $major->subject_id = '1BM';

    $major->save();

    $major = new Major();
    $major->id = '2N';
    $major->name = '??i???n ??i???n t???';
    $major->subject_id = '3BM';

    $major->save();

    $major = new Major();
    $major->id = '3N';
    $major->name = 'C?? kh??';
    $major->subject_id = '4BM';

    $major->save();
});

Route::get('/create/positions', function () {
    $position = new Position();
    $position->id = '1CV';
    $position->name = 'Tr?????ng khoa';
    $position->save();

    $position = new Position();
    $position->id = '2CV';
    $position->name = 'Ph?? khoa';
    $position->save();

    $position = new Position();
    $position->id = '3CV';
    $position->name = 'C??? v???n h???c t???p';
    $position->save();

    $position = new Position();
    $position->id = '4CV';
    $position->name = 'Gi???ng vi??n';
    $position->save();
});

Route::get('/create/levels', function () {
    $level = new Level();
    $level->id = '1TD';
    $level->name = 'Gi??o s??';
    $level->save();

    $level = new Level();
    $level->id = '2TD';
    $level->name = 'Ti???n s??';
    $level->save();

    $level = new Level();
    $level->id = '3TD';
    $level->name = 'Th???c s??';
    $level->save();

    $level = new Level();
    $level->id = '4TD';
    $level->name = '?????i h???c';
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
    $lecturer->name = 'Nguy???n Xu??n ?????i';
    $lecturer->sex = 'Nam';
    $lecturer->hometown = 'C??? Th???ng - Thanh S??n - Ph?? Th???';
    $lecturer->address = 'Khu 41- C??? th???ng - Thanh S??n - Ph?? Th???';
    $lecturer->phone_number = '0328199325';
    $lecturer->note = '?????p trai nh???t khoa';
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
    $lecturer->name = 'Nguy???n Ho??ng Hi???p';
    $lecturer->sex = 'N???';
    $lecturer->hometown = 'Ph?? Th???';
    $lecturer->address = 'Thanh Vinh - Th??? X?? Ph?? Th??? - Ph?? Th???';
    $lecturer->phone_number = '12345678910';
    $lecturer->note = '??en nh???t khoa';
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
    $lecturer->name = 'T??? M???nh H??ng';
    $lecturer->sex = 'Kh??c';
    $lecturer->hometown = 'Ph?? Th???';
    $lecturer->address = 'T??? 9 - Khu D???u L??u - Ph?????ng D???u L??u - Vi???t Tr?? - Ph?? Th???';
    $lecturer->phone_number = '12345678910';
    $lecturer->note = 'Kh??ng bi???t b??i';
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
    $lecturer->name = 'Nguy???n Ti???n Ch??';
    $lecturer->sex = 'Nam';
    $lecturer->hometown = 'Ph?? Th???';
    $lecturer->address = 'Thanh ba - Ph?? Th???';
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
    $lecturer->name = 'G?? ?????c Nh???t';
    $lecturer->sex = 'N???';
    $lecturer->hometown = 'Ph?? Th???';
    $lecturer->address = 'Thanh ba - Ph?? Th???';
    $lecturer->phone_number = '12345678910';
    $lecturer->note = 'Hay n??i ph??t';
    $lecturer->position_id = '2CV';
    $lecturer->level_id = '2TD';
    $lecturer->major_id = '3N';
    $lecturer->save();
});


Route::get('/create/works', function () {
    $work = new Work();
    $work->id = '1CV';
    $work->name = 'Ph??n t??ch thi???t k??? h??? th???ng qu???n l?? gi???ng vi??n sinh vi??n';
    // $work->start_time = 2018-06-12T19:30;
    //  $level->save();

    $level = new Level();
    $level->id = '2TD';
    $level->name = 'Ti???n s??';
    $level->save();


    $work = new Work();
    $work->id = '2CV';
    $work->name = 'M??t ?????';
    $work->start_time = Carbon::create(2020, 10, 18, 21, 40, 16);
    $work->end_time = Carbon::create(2021, 1, 10, 9, 40, 16);;
    $work->place = 'Ph??ng Hi???p ??en';
    $work->note = '????i th?? vl';
    $work->save();

    $work = new Work();
    $work->id = '3CV';
    $work->name = 'Tr??u con ch?? nh??n';
    $work->start_time = Carbon::create(2020, 7, 18, 21, 40, 16);
    $work->end_time = Carbon::create(2021, 1, 10, 9, 40, 16);;
    $work->place = 'X??m tr??? ?????i';
    $work->note = 'Con ch?? b??? l??o';
    $work->save();
});

Route::get('/create/work_assignments', function () {
    $work_assignment = new Work_assignment();
    $work_assignment->work_id = '1CV';
    $work_assignment->unit_id = '1KTCN';
    $work_assignment->role = 'Thi???t k???';
    $work_assignment->note = 'Lo???ng ngo???ng';
    $work_assignment->save();

    $work_assignment = new Work_assignment();
    $work_assignment->work_id = '2CV';
    $work_assignment->unit_id = '1KTCN';
    $work_assignment->role = 'D??ng m??t ?????';
    $work_assignment->note = 'Hi???p k th??m l??m';
    $work_assignment->save();

    $work_assignment = new Work_assignment();
    $work_assignment->work_id = '3CV';
    $work_assignment->unit_id = '2NN';
    $work_assignment->role = 'Tr??u ch??';
    $work_assignment->note = '????nh ch???t m??? n??';
    $work_assignment->save();
});


Route::get('/create/work_details', function () {
    $work_detail = new Work_detail();
    $work_detail->work_id = '1CV';
    $work_detail->lecturer_id = '1GV';
    $work_detail->role = 'L???p tr??nh';
    $work_detail->note = 'Kh??ng l??m ???????c ????u';
    $work_detail->save();

    $work_detail = new Work_detail();
    $work_detail->work_id = '2CV';
    $work_detail->lecturer_id = '2GV';
    $work_detail->role = 'X??y d???ng h??? th???ng E learning';
    $work_detail->note = 'Hi???p k th??m l??m';
    $work_detail->save();

    $work_detail = new Work_detail();
    $work_detail->work_id = '3CV';
    $work_detail->lecturer_id = '3GV';
    $work_detail->role = 'Thu???n h??a ch??';
    $work_detail->note = 'Con ch?? nh??n x???u nh?? ch??';
    $work_detail->save();
});

Route::get('/create/results', function () {
    $result = new Result();
    $result->work_id = '1CV';
    $result->status = 'Ch??a ho??n th??nh';
    $result->note = 'Kh?? l???m';
    $result->save();

    $result = new Result();
    $result->work_id = '2CV';
    $result->status = 'S???p ho??n th??nh';
    $result->note = 'Kh?? b??nh th?????ng';
    $result->save();

    $result = new Result();
    $result->work_id = '3CV';
    $result->status = 'Ho??n th??nh';
    $result->note = 'D??? nh?? ??n b??nh';
    $result->save();
});


//end datatest
