<?php

use App\Http\Controllers\UserController;

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

Route::get('/players', function () {
    return view('findplayer');
});


Route::get('/grenades', function () {
    return view('grenades');
});

Route::get('/admin', function(){
    return view('admin');
});


Route::prefix('/user')->group( function (){
    Route::match(['get', 'post'], '/account','UserController@pre_register');
    Route::post('/create','UserController@create');
    Route::post('/login', 'UserController@login');
    Route::get('/logout','UserController@logout');
    Route::get('/search','UserController@index');
    Route::get('/follow/{id}', 'FollowController@follow_user');
    Route::get('/unfollow/{id}', 'FollowController@unfollow_user');
    Route::get('/{id}', 'ApiController@users_info');
});

Route::middleware(['user_validation'])->group(function () {
    
    Route::get('/feed', 'UserController@user_info');

    Route::get('/myhistory', 'UserController@user_info');

    Route::get('/procurar', 'GameController@index');

    Route::get('/perfil', function(){
        return view('editprofile');
    });

    Route::get('/champions', 'ChampionController@index');

    Route::get('/champion/{champion}', 'ChampionController@find');

    Route::prefix('/lol/proplayers')->group( function (){
        Route::get('/', 'ProController@index');
        Route::get('/{id}', 'ApiController@profile_pro');
        Route::get('/follow/{id}', 'FollowController@follow_pro');
        Route::get('/unfollow/{id}', 'FollowController@unfollow_pro');
    });

    Route::prefix('/cs/proplayers')->group( function (){
        Route::get('/', 'ProCSController@index');
        Route::get('/{id}', 'ProCSController@profile_pro');
    });
});



