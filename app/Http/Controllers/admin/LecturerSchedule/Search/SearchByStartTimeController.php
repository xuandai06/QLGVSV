<?php

namespace App\Http\Controllers\admin\LecturerSchedule\Search;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;

class SearchByStartTimeController extends Controller
{
    public function index(){
        $works = Work::paginate(10);
        return view(
            'layouts.admin.teacher_work_schedule.search.search_teacher_work.search_by_start_time',
            ['works' => $works]
        );
    }

    public function search(Request $request)
    {

        $works = Work::query();

        $works->join('results', 'works.id', '=', 'results.work_id')
            ->where('start_time', '>=', $request->keyword);

        $works = $works->paginate(10);
        
        return view(
            'layouts.admin.teacher_work_schedule.search.search_teacher_work.search_by_start_time',
            ['works' => $works]
        );
    }
}
