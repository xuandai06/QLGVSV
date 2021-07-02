<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view('auth.login');
    }

    function store(){
        dd('ok');
    }
}
