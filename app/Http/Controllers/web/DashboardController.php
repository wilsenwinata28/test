<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Repositories\RegisterRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $userRepository;
    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function dashboard() {
        $data['users'] = $this->userRepository->getUser();
        return view('main.dashboard')->with($data);
    }
}
