<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your api!
|
*/

Route::get('/get_user', 'api\UserDataController@getUsersData');
Route::get('/get_user/{user_id}', 'api\UserDataController@getUserData');
Route::post('/post_user_data/{user_id}', 'api\UserDataController@postUserData');
Route::put('/put_user_data/{user_id}/{id}', 'api\UserDataController@putUserData');
Route::delete('/delete_user_data/{user_id}', 'api\UserDataController@deleteUserData');
