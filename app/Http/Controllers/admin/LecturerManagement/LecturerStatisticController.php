<?php

namespace App\Http\Controllers\admin\LecturerManagement;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerStatisticController extends Controller
{
    public function index()
    {
        $lecturers = Lecturer::all();
        return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
    }

    public function analyse(Request $request)
    {
        $lecturers = Lecturer::query();

        $lecturers->join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id');

        if($request->subject_types != 'Không'){
            $lecturers->where('subjects.name', '=',$request->subject_types);
        }
        if($request->major_types != 'Không'){
            $lecturers->where('majors.name', '=', $request->major_types);
        }
        if($request->level_types != 'Không'){
            $lecturers->where('levels.name', '=', $request->level_types);
        }
        if($request->position_types != 'Không'){
            $lecturers->where('positions.name', '=', $request->position_types);
        }
        if($request->sex_types != 'Không'){
            $lecturers->where('lecturers.sex', '=', $request->sex_types);
        }
        if($request->address_types != 'Không'){
            $lecturers->where('lecturers.address', '=', $request->address_types);
        }
        $lecturers = $lecturers->get();
        return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
     }
}
