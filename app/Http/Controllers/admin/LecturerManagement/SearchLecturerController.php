<?php

namespace App\Http\Controllers\Admin\LecturerManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchLecturerController extends Controller
{
    public function index(){
        return view('layouts.admin.lecturer_management.search.search_lecturers');
    }
}
