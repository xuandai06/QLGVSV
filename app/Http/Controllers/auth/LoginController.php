<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt([
            'email' => $request->email, 'password' => $request->password,
        ])) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('admin');
            }
            if (auth()->user()->role == 'lecturer') {
                return redirect()->route('lecturer');
            }
            if (auth()->user()->role == 'student') {
                return redirect()->route('student');
            }
        } else {
            return back()->with('status', 'Tài khoản hoặc mật khẩu không đúng');
        }
    }
}
