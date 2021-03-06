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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::view('/register', 'auth.register')->name('register');
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', 'authController@login');
    Route::view('/register','auth.register')->name('register');
    Route::post('/register','authController@register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::view('/index', 'pages.dashboard')->name('index');
    Route::get('/logout', 'authController@logout');
});
