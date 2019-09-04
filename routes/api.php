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

Route::get('/game/{id_user}/follow/{id_game}','FollowController@follow_game');
Route::get('/game/{id_user}/unfollow/{id_game}','FollowController@unfollow_game');

Route::get('/user/{id_user}/feed', 'FeedController@user_feed');
Route::get('/user/{id_followed}/one_match', 'ApiController@one_match');

Route::post('/user/post', 'PostController@create');

Route::get('/post/{post_id}/like/{user_id}', 'PostController@like_post');
Route::get('/post/{post_id}/unlike/{user_id}', 'PostController@unlike_post');
Route::get('/post/{post_id}/comments/', 'PostController@get_comments');