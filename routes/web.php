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

Route::get('/account', function (){
    return view('account');
});

Route::get('/players', function () {
    return view('findplayer');
});


Route::get('/grenades', function () {
    return view('grenades');
});


Route::prefix('/user')->group( function (){
    Route::post('/account','UserController@pre_register');
    Route::post('/create','UserController@create');
    Route::post('/login', 'UserController@login');
    Route::get('/logout','UserController@logout');
    Route::post('/icon','UserController@set_icon');
    Route::get('/search','UserController@index');
    Route::get('/follow/{id}', 'FollowController@follow_user');
    Route::get('/unfollow/{id}', 'FollowController@unfollow_user');
    Route::get('/{id}', 'ApiController@users_info');
});

Route::middleware(['user_validation'])->group(function () {
    
    Route::get('/feed', function(){
        $user_controller = new UserController;
        return view('feed', [
            'user' => $user_controller->user_info()
        ]);
    });

    Route::get('/myhistory', function(){
        $user_controller = new UserController;
        return view('myhistory', [
            'user' => $user_controller->user_info()
        ]);
    });

    Route::get('/procurar', 'GameController@index');
    Route::get('/champions', 'ChampionsController@index');

    Route::prefix('/pro')->group( function (){
        Route::get('/', 'ProController@index');
        Route::get('/{id}', 'ApiController@profile_pro');
        Route::get('/follow/{id}', 'FollowController@follow_pro');
        Route::get('/unfollow/{id}', 'FollowController@unfollow_pro');
    });
});



