<?php

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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/account', function (){
    return view('account');
});

Route::prefix('/user')->group( function (){
    Route::post('/account','UserController@pre_register');
    Route::post('/create','UserController@create');
    Route::post('/login', 'UserController@login');
    Route::get('/logout','UserController@logout');
    Route::post('/icon','UserController@set_icon');
});

Route::middleware(['user_validation'])->group(function () {
    Route::get('/feed','ApiController@user_info');

    Route::get('/champions', function (){
        return view('champions');
    });

    Route::get('/pro', function (){
        return view('pro');
    });
});

