<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view('posts.login');
    }

    function store(){
        dd('ok');
    }
}
