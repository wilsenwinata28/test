<?php
namespace App\Repositories;

use App\Models\UserData;

class UserDataReposity
{
    function getUsersData() {
        $data = UserData::with("user")->get()->toArray();
        return $data;
    }

    function getUserData($user_id) {
        $data = UserData::with("user")->where('user_id',$user_id)->first();
        if(empty($data)) {
            $data = [];
            return $data;
        }

        $data = $data->toArray();
        return $data;
    }

    function postUserData($request,$user_id) {
        $data = array(
            'user_id' => $user_id,
            'position' => $request->position,
            'status' => $request->status
        );

        $check = UserData::where('user_id',$user_id)->first();
        if(!empty($check)) {
            UserData::where('user_id',$user_id)->delete();
        }

        UserData::create($data);

        $userData = $this->getUserData($user_id);
        return $userData;
    }

    function putUserData($request,$user_id,$id) {
        $data = array(
            'position' => $request->position,
            'status' => $request->status
        );
        UserData::where('id',$id)->update($data);
        $userData = $this->getUserData($user_id);
        return $userData;
    }

    function deleteUserData($user_id) {
        $check = UserData::where('user_id',$user_id)->first();
        if(!empty($check)) {
            UserData::where('user_id',$user_id)->delete();
        }

        $userData = $this->getUserData($user_id);
        return $userData;
    }


}
