<?php

namespace App\Http\Controllers\Admin\LecturerManagement;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class SearchLecturerController extends Controller
{
    public function index(){
        $lecturers = Lecturer::all();
        return view('layouts.admin.lecturer_management.search.search_lecturers', ['lecturers' => $lecturers]);
    }

    public function Search(Request $request)
    {
       
        if($request->search_type){
            
        }
      //  $units =  Unit::where('id', 'LIKE', '%' . $request->id . '%')->paginate(10);
        //return view('layouts.admin.lecturer_management.update.update_units', ['units' => $units]);
    }
}
