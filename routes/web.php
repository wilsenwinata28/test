<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/first/{a}/{b}', 'web\DashboardController@first')->name('first');
Route::get('/second', 'web\DashboardController@second')->name('second');



/*Route::middleware('guest')->group(function () {
    Route::get('/', 'web\LoginController@loginForm')->name('login.form');
    Route::get('/register', 'web\RegisterController@registerForm')->name('register.form');
    Route::post('/login', 'web\LoginController@login')->name('login');
    Route::post('/user_register', 'web\RegisterController@register')->name('register');
});

Route::middleware('checkUserAuth')->group(function () {
    Route::get('/dashboard', 'web\DashboardController@dashboard')->name('dashboard');
    Route::get('/logout', 'web\LoginController@logout')->name('logout');
});*/
