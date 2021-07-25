<?php

namespace App\Http\Controllers\admin\LecturerSchedule\Search;

use App\Http\Controllers\Controller;
use App\Models\Result;
use App\Models\Work;
use Illuminate\Http\Request;

class SearchByCompletionLevelController extends Controller
{
    public function index()
    {
        $works = Work::paginate(10);
        return view(
            'layouts.admin.teacher_work_schedule.search.search_teacher_work.search_by_completion_level',
            ['works' => $works]
        );
    }

    public function search(Request $request)
    {
        $works = Work::query();

        $works->join('results', 'works.id', '=', 'results.work_id')
            ->where('status', '=', $request->search_type);

        $works = $works->paginate(10);
        
        return view(
            'layouts.admin.teacher_work_schedule.search.search_teacher_work.search_by_completion_level',
            ['works' => $works]
        );
    }
}
