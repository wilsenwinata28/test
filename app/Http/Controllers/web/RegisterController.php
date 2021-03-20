<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Repositories\RegisterRepository;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $registerRepository;
    function __construct(RegisterRepository $registerRepository)
    {
        $this->registerRepository = $registerRepository;
    }

    function registerForm() {
        return view('user.register');
    }

    function register(RegisterRequest $request) {
        $data = $this->registerRepository->register($request);

        if($data == false) {
            return redirect(route('register.form'))->with('status', 'Email Used');
        }
        return redirect('/')->with('status_success', 'Register Successful');
    }
}
