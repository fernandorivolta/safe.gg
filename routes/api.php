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
Route::post('/user/icon','UserController@set_icon');
Route::get('/users','UserController@index_api');

Route::post('/user/post', 'PostController@create');
Route::post('/user/update', 'UserController@update');

Route::get('/post/{post_id}/like/{user_id}', 'PostController@like_post');
Route::get('/post/{post_id}/unlike/{user_id}', 'PostController@unlike_post');
Route::get('/post/{post_id}/modal/', 'FeedController@get_modal_info');
Route::post('/post/comment', 'PostController@comment');

Route::post('/find/register/cs', 'FindController@registercs');
Route::post('/find/register/lol', 'FindController@registerlol');
Route::get('/find/{id}/{game}', 'FindController@sign_up_verifier');


Route::get('/setadmin/{username}', 'UserController@set_admin');
Route::get('/unsetadmin/{username}', 'UserController@unset_admin');

Route::post('/news/create', 'NewsController@create');
Route::get('/news', 'NewsController@index');
Route::post('/procs/create', 'ProCSController@create');

Route::get('/lol/proplayers', 'ProController@index_api');
Route::get('/cs/proplayers', 'ProCSController@index_api');