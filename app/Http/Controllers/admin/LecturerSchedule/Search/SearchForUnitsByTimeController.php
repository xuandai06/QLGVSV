<?php

namespace App\Http\Controllers\admin\LecturerSchedule\Search;

use App\Http\Controllers\Controller;
use App\Models\Result;
use App\Models\Work;
use Illuminate\Http\Request;

class SearchForUnitsByTimeController extends Controller
{
    public function index()
    {
        $works = Work::paginate(10);
        return view(
            'layouts.admin.teacher_work_schedule.search.search_teacher_work.search_for_units_by_time',
            ['works' => $works]
        );
    }

    public function search(Request $request)
    {
        $works = Work::query();

        $works->join('work_assignments', 'works.id', '=', 'work_assignments.work_id');
            
            if($request->unit_id != 'Không'){
                $works->where('unit_id', '=', $request->unit_id);
            }
            if($request->start_time){
                $works->where('start_time', '>=', $request->start_time);
            }

            if($request->end_time){
               $works->where('end_time', '<=', $request->end_time);
            }
           
        $works = $works->paginate(10);
        
        return view(
            'layouts.admin.teacher_work_schedule.search.search_teacher_work.search_for_units_by_time',
            ['works' => $works]
        );
    }
}
