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
        if (
            $request->subject_types != 'Không' && $request->major_types == 'Không' &&
            $request->level_types == 'Không' && $request->position_types == 'Không'
            && $request->sex_types == 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('subjects.name', '=', $request->subject_types)
                ->select('lecturers.*')
                ->paginate(10);
            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } else if (
            $request->subject_types != 'Không' && $request->major_types != 'Không' &&
            $request->level_types == 'Không' && $request->position_types == 'Không'
            && $request->sex_types == 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('subjects.name', '=', $request->subject_types)
                ->where('majors.name', '=', $request->major_types)
                ->select('lecturers.*')
                ->paginate(10);
            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } else if (
            $request->subject_types != 'Không' && $request->major_types != 'Không' &&
            $request->level_types != 'Không' && $request->position_types == 'Không'
            && $request->sex_types == 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('subjects.name', '=', $request->subject_types)
                ->where('majors.name', '=', $request->major_types)
                ->where('levels.name', '=', $request->level_types)
                ->select('lecturers.*')
                ->paginate(10);
            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } else if (
            $request->subject_types != 'Không' && $request->major_types != 'Không' &&
            $request->level_types != 'Không' && $request->position_types != 'Không'
            && $request->sex_types == 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('subjects.name', '=', $request->subject_types)
                ->where('majors.name', '=', $request->major_types)
                ->where('levels.name', '=', $request->level_types)
                ->where('positions.name', '=', $request->position_types)
                ->select('lecturers.*')
                ->paginate(10);
            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        }
        else if (
            $request->subject_types != 'Không' && $request->major_types != 'Không' &&
            $request->level_types != 'Không' && $request->position_types != 'Không'
            && $request->sex_types != 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('subjects.name', '=', $request->subject_types)
                ->where('majors.name', '=', $request->major_types)
                ->where('levels.name', '=', $request->level_types)
                ->where('positions.name', '=', $request->position_types)
                ->where('lecturers.sex', '=', $request->sex_types)
                ->select('lecturers.*')
                ->paginate(10);
            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        }
        else if (
            $request->subject_types != 'Không' && $request->major_type != 'Không' &&
            $request->level_types != 'Không' && $request->position_types != 'Không'
            && $request->sex_types != 'Không' && $request->address_types != 'Không'
        ) {

            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('subjects.name', '=', $request->subject_types)
                ->where('majors.name', '=', $request->major_types)
                ->where('positions.name', '=', $request->position_types)
                ->where('levels.name', '=', $request->level_types)
                ->where('lecturers.sex', '=', $request->sex_types)
                ->where('lecturers.address', '=', $request->address_types)
                ->select('lecturers.*')
                ->paginate(10);

            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } // major_types
        else if (
            $request->subject_types == 'Không' && $request->major_types != 'Không' &&
            $request->level_types == 'Không' && $request->position_types == 'Không'
            && $request->sex_types == 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('majors.name', '=', $request->major_types)
                ->select('lecturers.*')
                ->paginate(10);
            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } else if (
            $request->subject_types == 'Không' && $request->major_types != 'Không' &&
            $request->level_types != 'Không' && $request->position_types == 'Không'
            && $request->sex_types == 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('majors.name', '=', $request->major_types)
                ->where('levels.name', '=', $request->level_types)
                ->select('lecturers.*')
                ->paginate(10);
            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } else if (
            $request->subject_types == 'Không' && $request->major_types != 'Không' &&
            $request->level_types != 'Không' && $request->position_types != 'Không'
            && $request->sex_types == 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('majors.name', '=', $request->major_types)
                ->where('positions.name', '=', $request->position_types)
                ->where('levels.name', '=', $request->level_types)
                ->select('lecturers.*')
                ->paginate(10);

            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } else if (
            $request->subject_types == 'Không' && $request->major_types != 'Không' &&
            $request->level_types != 'Không' && $request->position_types != 'Không'
            && $request->sex_types != 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('majors.name', '=', $request->major_types)
                ->where('positions.name', '=', $request->position_types)
                ->where('levels.name', '=', $request->level_types)
                ->where('lecturers.sex', '=', $request->sex_types)
                ->select('lecturers.*')
                ->paginate(10);

            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } else if (
            $request->subject_types == 'Không' && $request->major_types != 'Không' &&
            $request->level_types != 'Không' && $request->position_types != 'Không'
            && $request->sex_types != 'Không' && $request->address_types != 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('majors.name', '=', $request->major_types)
                ->where('positions.name', '=', $request->position_types)
                ->where('levels.name', '=', $request->level_types)
                ->where('lecturers.sex', '=', $request->sex_types)
                ->where('lecturers.address', '=', $request->address_types)
                ->select('lecturers.*')
                ->paginate(10);

            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } //level_types
        else if (
            $request->subject_types == 'Không' && $request->major_types == 'Không' &&
            $request->level_types != 'Không' && $request->position_types == 'Không'
            && $request->sex_types == 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('levels.name', '=', $request->level_types)
                ->select('lecturers.*')
                ->paginate(10);

            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } else if (
            $request->subject_types == 'Không' && $request->major_types == 'Không' &&
            $request->level_types != 'Không' && $request->position_types != 'Không'
            && $request->sex_types == 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('positions.name', '=', $request->position_types)
                ->where('levels.name', '=', $request->level_types)
                ->select('lecturers.*')
                ->paginate(10);

            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } else if (
            $request->subject_types == 'Không' && $request->major_types == 'Không' &&
            $request->level_types != 'Không' && $request->position_types != 'Không'
            && $request->sex_types != 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')

                ->where('positions.name', '=', $request->position_types)
                ->where('levels.name', '=', $request->level_types)
                ->where('lecturers.sex', '=', $request->sex_types)
                ->select('lecturers.*')
                ->paginate(10);

            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } else if (
            $request->subject_types == 'Không' && $request->major_types == 'Không' &&
            $request->level_types != 'Không' && $request->position_types != 'Không'
            && $request->sex_types != 'Không' && $request->address_types != 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('positions.name', '=', $request->position_types)
                ->where('levels.name', '=', $request->level_types)
                ->where('lecturers.sex', '=', $request->sex_types)
                ->where('lecturers.address', '=', $request->address_types)
                ->select('lecturers.*')
                ->paginate(10);

            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } //position_types
        else if (
            $request->subject_types == 'Không' && $request->major_types == 'Không' &&
            $request->level_types == 'Không' && $request->position_types != 'Không'
            && $request->sex_types == 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('positions.name', '=', $request->position_types)
                ->select('lecturers.*')
                ->paginate(10);

            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } else if (
            $request->subject_types == 'Không' && $request->major_types == 'Không' &&
            $request->level_types == 'Không' && $request->position_types != 'Không'
            && $request->sex_types != 'Không' && $request->address_types == 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('positions.name', '=', $request->position_types)
                ->where('lecturers.sex', '=', $request->sex_types)
                ->select('lecturers.*')
                ->paginate(10);

            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } else if (
            $request->subject_types == 'Không' && $request->major_types == 'Không' &&
            $request->level_types == 'Không' && $request->position_types != 'Không'
            && $request->sex_types != 'Không' && $request->address_types != 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
            ->join('positions', 'positions.id', '=', 'lecturers.position_id')
            ->join('majors', 'majors.id', '=', 'lecturers.major_id')
            ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
           
            ->where('positions.name', '=', $request->position_types)
            ->where('lecturers.sex', '=', $request->sex_types)
            ->where('lecturers.address', '=', $request->address_types)
            ->select('lecturers.*')
            ->paginate(10);

            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } //sex_types
        else if (
            $request->subject_types == 'Không' && $request->major_types == 'Không' &&
            $request->level_types == 'Không' && $request->position_types == 'Không'
            && $request->sex_types != 'Không' && $request->address_types == 'Không'
        ) {
            
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
                ->join('positions', 'positions.id', '=', 'lecturers.position_id')
                ->join('majors', 'majors.id', '=', 'lecturers.major_id')
                ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
                ->where('lecturers.sex', '=', $request->sex_types)
                ->select('lecturers.*')
                ->paginate(10);

            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } else if (
            $request->subject_types == 'Không' && $request->major_types == 'Không' &&
            $request->level_types == 'Không' && $request->position_types == 'Không'
            && $request->sex_types != 'Không' && $request->address_types != 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
            ->join('positions', 'positions.id', '=', 'lecturers.position_id')
            ->join('majors', 'majors.id', '=', 'lecturers.major_id')
            ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
            ->where('lecturers.sex', '=', $request->sex_types)
            ->where('lecturers.address', '=', $request->address_types)
            ->select('lecturers.*')
            ->paginate(10);
            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        } //address_types
        else if (
            $request->subject_types == 'Không' && $request->major_types == 'Không' &&
            $request->level_types == 'Không' && $request->position_types == 'Không'
            && $request->sex_types == 'Không' && $request->address_types != 'Không'
        ) {
            $lecturers = Lecturer::join('levels', 'levels.id', '=', 'lecturers.level_id')
            ->join('positions', 'positions.id', '=', 'lecturers.position_id')
            ->join('majors', 'majors.id', '=', 'lecturers.major_id')
            ->join('subjects', 'subjects.id', '=', 'majors.subject_id')
            ->where('lecturers.address', '=', $request->address_types)
            ->select('lecturers.*')
            ->paginate(10);
            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        }
        else{
            $lecturers = Lecturer::paginate(10);
            return view('layouts.admin.lecturer_management.statistical.statistical_lecturers', ['lecturers' => $lecturers]);
        }
    }
}
