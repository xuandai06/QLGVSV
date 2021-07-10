<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $lecturers = Lecturer::all();
        return view('layouts.admin.home',['lecturers' => $lecturers]);
    }
}
