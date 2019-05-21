<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ApiController extends Controller
{
    public function user_info(){
        $api_array = ['RGAPI-9ea5bcd3-87de-4efa-9e24-c09bf7fac74c'];
        $user = Auth::user();
        $user_id = $user->get_summoner_id($api_array[rand(0,count($api_array)-1)]);
        return view('feed',[
            'user' => $user,
            'ranked_stats' => $user->get_ranked_stats($user_id, $api_array[rand(0,count($api_array)-1)])
        ]);
    }
}
