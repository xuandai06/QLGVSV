<?php

use App\Http\Controllers\auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/admin', function(){
    return view('layouts.layouts_admin.menu');
});

Route::get('/student', function(){
    return view('layouts.layouts_student.menu');
});

Route::get('/', function () {
    return view('layouts.home');
})->name('home');
