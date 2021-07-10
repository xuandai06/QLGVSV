<?php

namespace App\Http\Controllers\Admin\LecturerManagement;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\Position;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchLecturerController extends Controller
{
    public function index(){
        $lecturers = Lecturer::all();
        return view('layouts.admin.lecturer_management.search.search_lecturers', ['lecturers' => $lecturers]);
    }

    public function Search(Request $request)
    {
       
        if($request->search_type == 'Tìm theo mã giảng viên'){
            $lecturers =  Lecturer::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('layouts.admin.lecturer_management.search.search_lecturers', ['lecturers' => $lecturers]);
        }
        else if($request->search_type == 'Tìm theo chức vụ'){
            $lecturers = Lecturer::join('positions', 'lecturers.position_id','=', 'positions.id')
            ->where('positions.name', 'LIKE', '%' . $request->keyword . '%')
            ->select('lecturers.*')
            ->paginate(10);
            return view('layouts.admin.lecturer_management.search.search_lecturers', ['lecturers' => $lecturers]);
        }
        else if($request->search_type == 'Tìm theo ngành'){
            $lecturers = Lecturer::join('majors', 'lecturers.major_id','=', 'majors.id')
            ->where('majors.name', 'LIKE', '%' . $request->keyword . '%')
            ->select('lecturers.*')
            ->paginate(10);
            return view('layouts.admin.lecturer_management.search.search_lecturers', ['lecturers' => $lecturers]);
        }
        else if($request->search_type == 'Tìm theo trình độ'){
            $lecturers = Lecturer::join('levels', 'lecturers.levels_id','=', 'levels.id')
            ->where('levels.name', 'LIKE', '%' . $request->keyword . '%')
            ->select('lecturers.*')
            ->paginate(10);
            return view('layouts.admin.lecturer_management.search.search_lecturers', ['lecturers' => $lecturers]);
        }
        else if($request->search_type == 'Tìm theo bộ môn'){
            $lecturers = Lecturer::join('majors', 'lecturers.major_id','=', 'majors.id')
            ->join('subjects', 'subjects.id','=', 'majors.subject_id')
            ->where('subjects.name', 'LIKE', '%' . $request->keyword . '%')
            ->select('lecturers.*')
            ->paginate(10);
            return view('layouts.admin.lecturer_management.search.search_lecturers', ['lecturers' => $lecturers]);
        }
        else if($request->search_type == 'Tìm theo họ tên'){
            $lecturers =  Lecturer::where('name', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('layouts.admin.lecturer_management.search.search_lecturers', ['lecturers' => $lecturers]);
        }
        else if($request->search_type == 'Tìm theo địa chỉ'){
            $lecturers =  Lecturer::where('address', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('layouts.admin.lecturer_management.search.search_lecturers', ['lecturers' => $lecturers]);
        }
        else if($request->search_type == 'Tìm theo quê quán'){
            $lecturers =  Lecturer::where('hometown', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('layouts.admin.lecturer_management.search.search_lecturers', ['lecturers' => $lecturers]);
        }
        else{
            $lecturers =  Lecturer::where('sex', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('layouts.admin.lecturer_management.search.search_lecturers', ['lecturers' => $lecturers]);
        }
        
    }
}
