<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use Auth;
use DB;

class GameController extends Controller
{

    public function index()
    {
        $list_followed_games = [];
        $user = Auth::user();
        $aux_followed = DB::table('userfollowgames')->where('user_id', '=', $user->id)->pluck('game_id');
        foreach ($aux_followed as $follow){
            $list_followed_games [] = $follow;
        }
        $games = Game::all();
        return view('directory', [
            'games' => $games,
            'followed_games' => $list_followed_games
        ]);
    }

    public function create()
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function delete($id)
    {
        //
    }
}
