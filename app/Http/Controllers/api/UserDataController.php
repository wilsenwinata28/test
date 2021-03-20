<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserDataRequest;
use App\Repositories\UserDataReposity;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
/**
 * @group  Users
 *
 * APIs for User
 */
class UserDataController extends Controller
{
    protected $userDataReposity;
    function __construct(UserDataReposity $userDataReposity)
    {
        $this->userDataReposity = $userDataReposity;
    }

    /**
     * Get User List
     *
     *
     *
     */
    function getUsersData(){
        try {
            $data= $this->userDataReposity->getUsersData();
            return response()->true($data);
        } catch (\Exception $e) {
            report($e);
            return response()->false($e);
        }
    }

    /**
     * Get User Detail
     *
     *
     *
     */
    function getUserData($user_id){
        try {
            $data = $this->userDataReposity->getUserData($user_id);
            return response()->true($data);
        } catch (\Exception $e) {
            report($e);
            return response()->false($e);
        }
    }

    /**
     * Store User
     *
     * @queryParam  position required string. Example: testasd
     * @queryParam  status required string. Example: active
     *
     */
    function postUserData(UserDataRequest $request,$user_id) {
        try {
            $data = $this->userDataReposity->postUserData($request,$user_id);
            return response()->true($data);
        } catch (\Exception $e) {
            report($e);
            return response()->false($e);
        }
    }

    /**
     * Update User
     *
     * @queryParam  position required string. Example: testdsa
     * @queryParam  status required string. Example: inactive
     *
     */
    function putUserData(UserDataRequest $request,$user_id,$id) {
        try {
            $data = $this->userDataReposity->putUserData($request,$user_id,$id);
            return response()->true($data);
        } catch (\Exception $e) {
            report($e);
            return response()->false($e);
        }
    }

    /**
     * Delete User
     *
     *
     *
     */
    function deleteUserData($user_id) {
        try {
            $data = $this->userDataReposity->deleteUserData($user_id);
            return response()->true($data);
        } catch (\Exception $e) {
            report($e);
            return response()->false($e);
        }

    }
}
