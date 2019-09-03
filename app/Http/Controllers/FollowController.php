<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserFollowPro;
use App\UserFollowUser;
use App\UserFollowGame;
use App\ProPlayer;
use App\User;
use Auth;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function unfollow_pro($id){
        $user = Auth::user();
        $follow = UserFollowPro::where([['user_id', $user->id],['proplayer_id', $id]]);
        if($follow){
            $follow->delete();
        }
        return redirect('/pro');
    }
    
    public function follow_pro($id){
        $user = Auth::user();
        if(ProPlayer::find($id)){
            $follow = new UserFollowPro();
            $follow->user_id = $user->id;
            $follow->proplayer_id = $id;
            $follow->save();
        }
        return redirect('/pro');
    }

    public function unfollow_user($id_user, $id_followed){
        $follow = UserFollowUser::where([['user_id', $id_user],['user_id_followed', $id_followed]]);
        if(!$follow){
            return response()->json([
                'message' => 'Fail'
            ], 400);
        }
        $follow->delete();
        return response()->json([
            'message' => 'Success'
        ], 200);
    }
    
    public function follow_user($id_user, $id_followed){
        $follow = new UserFollowUser();
        $follow->user_id = $id_user;
        $follow->user_id_followed = $id_followed;
        $follow->save();
        return response()->json([
            'message' => 'Success'
        ], 200);
    }
    
    public function follow_game($id_user, $id_game){
        $follow = new UserFollowGame();
        $follow->user_id = $id_user;
        $follow->game_id = $id_game;
        $follow->save();
        return response()->json([
            'message' => 'Success'
        ], 200);
    }

    public function unfollow_game($id_user, $id_game){
        $follow = UserFollowGame::where([['user_id', $id_user],['game_id', $id_game]]);
        if(!$follow){
            return response()->json([
                'message' => 'Fail'
            ], 400);
        }
        $follow->delete();
        return response()->json([
            'message' => 'Success'
        ], 200);
    }
}
