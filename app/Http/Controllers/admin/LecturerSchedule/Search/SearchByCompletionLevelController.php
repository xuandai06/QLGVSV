<?php

namespace App\Http\Controllers\admin\LecturerSchedule\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchByCompletionLevelController extends Controller
{
    public function index(){
        return view('layouts.admin.teacher_work_schedule.search.search_teacher_work.search_by_completion_level');
    }
    
}
