<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers\Search;

use App\Http\Controllers\Controller;
use App\Models\Kind_of_science;
use Illuminate\Http\Request;

class search_kind_of_sciences_controller extends Controller
{
    public function index(){
        $kind_of_sciences = Kind_of_science::all();
        return view('layouts.admin.scientific_research_management_of_lecturers.search.search_lecturer.search_kind_of_sciences', ['kind_of_sciences' => $kind_of_sciences]);
    }

    public function search(Request $request)
    {
        if($request->search_type == 'Tìm theo mã loại khoa học'){
            $kind_of_sciences =  Kind_of_science::where('id', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('layouts.admin.scientific_research_management_of_lecturers.search.search_lecturer.search_kind_of_sciences', ['kind_of_sciences' => $kind_of_sciences]);
        }
        else {
            $kind_of_sciences =  Kind_of_science::where('name', 'LIKE', '%' . $request->keyword . '%')->paginate(10);
            return view('layouts.admin.scientific_research_management_of_lecturers.search.search_lecturer.search_kind_of_sciences', ['kind_of_sciences' => $kind_of_sciences]);
        }
        
    }
}
