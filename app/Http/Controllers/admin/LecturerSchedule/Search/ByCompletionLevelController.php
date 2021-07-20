<?php

namespace App\Http\Controllers\admin\LecturerSchedule\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ByCompletionLevelController extends Controller
{
    public function index(){
        //$lecturers = Lecturer::all();
        return view('layouts.admin.teacher_work_schedule.search.search_by_conpletion_level');
    }
}
