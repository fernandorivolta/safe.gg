<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserFollowGame;
use App\UserFollowUser;
use App\Game;
use App\News;
use App\User;

class FeedController extends Controller
{
    public function user_feed($id){
        $list_games = UserFollowGame::where('user_id', $id)->get('game_id');
        foreach($list_games as $games){
            $list_id [] = $games->game_id; 
        }

        $games = Game::findOrFail($list_id);

        foreach($games as $game){
            $news [] = News::where('tag', $game->tag)->whereOr('tag', $game->game)->get();
        }
        
        return response()->json([
            'news' => $news
        ]);

    }
}
