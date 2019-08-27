<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user/{id}/history', 'ApiController@user_match_history');

Route::get('/user/{id}/rank','ApiController@ranked_info');

Route::get('/user/{id_user}/follow/{idfollowed}','FollowController@follow_user');
Route::get('/user/{id_user}/unfollow/{idfollowed}','FollowController@unfollow_user');

Route::get('/user/{id_user}/feed', 'FeedController@user_feed');

Route::post('/user/post', 'PostController@create');