<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function loginForm() {
        return view('user.login');
    }

    function login(LoginRequest $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        } else {
            return redirect('/')->with('status', 'Email and Password Do Not Match');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect(route('login.form'));
    }
}
