<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    function getUser() {
        $data = User::with('userData')->get()->toArray();
        return $data;
    }
}
