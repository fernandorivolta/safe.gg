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
    Route::get('/champions', function(){
        return view('champions',[
            'champions' => ["Aatrox", "Thresh", "Tryndamere", "Gragas", "Cassiopeia", "AurelionSol", "Ryze", "Poppy", "Sion", "Annie", "Jhin", "Karma", "Nautilus", "Kled", "Lux", "Ahri", "Olaf", "Viktor", "Anivia", "Singed", "Garen", "Lissandra", "Maokai", "Morgana", "Evelynn", "Fizz", "Heimerdinger", "Zed", "Rumble", "Mordekaiser", "Sona", "KogMaw", "Katarina", "Lulu", "Ashe", "Karthus", "Alistar", "Darius", "Vayne", "Varus", "Udyr", "Leona", "Jayce", "Syndra", "Pantheon", "Riven", "KhaZix", "Corki", "Azir", "Caitlyn", "Nidalee", "Kennen", "Galio", "Veigar", "Bard", "Gnar", "Malzahar", "Graves", "Vi", "Kayle", "Irelia", "LeeSin", "Illaoi", "Elise", "Volibear", "Nunu", "TwistedFate", "Jax", "Shyvana", "Kalista", "DrMundo", "Ivern", "Diana", "TahmKench", "Brand", "Sejuani", "Vladimir", "Zac", "RekSai", "Quinn", "Akali", "Taliyah", "Tristana", "Hecarim", "Sivir", "Lucian", "Rengar", "Warwick", "Skarner", "Malphite", "Yasuo", "Xerath", "Teemo", "Nasus", "Renekton", "Draven", "Shaco", "Swain", "Talon", "Janna", "Ziggs", "Ekko", "Orianna", "Fiora", "Fiddlesticks", "ChoGath", "Rammus", "LeBlanc", "Soraka", "Zilean", "Nocturne", "Jinx", "Yorick", "Urgot", "Kindred", "MissFortune", "Wukong", "Blitzcrank", "Shen", "Braum", "XinZhao", "Twitch", "MasterYi", "Taric", "Amumu", "Gangplank", "Trundle", "Kassadin", "Vel'Koz", "Zyra", "Nami", "JarvanIV", "Ezreal", "Pyke", "Kaisa", "Zoe", "Ornn", "Kayn", "Rakan", "Xayah", "Camille", "Yuumi", "Sylas"]
        ]);
    });

    Route::prefix('/pro')->group( function (){
        Route::get('/', 'ProController@index');
        Route::get('/{id}', 'ApiController@profile_pro');
        Route::get('/follow/{id}', 'FollowController@follow_pro');
        Route::get('/unfollow/{id}', 'FollowController@unfollow_pro');
    });
});



