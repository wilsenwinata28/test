<?php
namespace App\Repositories;
use App\Models\User;

class RegisterRepository
{
    function register($request) {

        $check = User::where('email',$request->email)->first();

        if(!empty($check))
        {
            return false;
        }

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => password_hash($request->password, PASSWORD_BCRYPT),
        );

        User::create($data);

        return true;
    }
}
