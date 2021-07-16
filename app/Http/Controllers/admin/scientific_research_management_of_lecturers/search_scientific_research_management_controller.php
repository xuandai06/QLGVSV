<?php

namespace App\Http\Controllers\admin\scientific_research_management_of_lecturers;

use App\Http\Controllers\Controller;
use App\Models\Kind_of_science;
use Illuminate\Http\Request;

class search_scientific_research_management_controller extends Controller
{
    public function index(){
        $kind_of_sciences = Kind_of_science::all();
        return view('layouts.admin.scientific_research_management_of_lecturers.search.search_scientific_research_management', ['kind_of_sciences' => $kind_of_sciences]);
    }

    public function Search(Request $request)
    {
       
        
    }
}
