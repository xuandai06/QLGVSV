<?php

namespace App\Http\Controllers\admin\LecturerSchedule\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchForJobsNameByTimeController extends Controller
{
    public function index(){
        return view('layouts.admin.teacher_work_schedule.search.search_teacher_work.search_for_jobs_name_by_time');
    }
}
