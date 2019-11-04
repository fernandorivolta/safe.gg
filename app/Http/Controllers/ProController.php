<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProPlayer;
use App\UserFollowPro;
use Auth;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Http\Controllers\ApiController;

class ProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_followed_pro = [];
        $user = Auth::user();
        $list_pro_players = ProPlayer::all();
        $aux_followed = DB::table('userfollowpro')->where('user_id', '=', $user->id)->pluck('proplayer_id');
        foreach ($aux_followed as $follow){
            $list_followed_pro [] = $follow;
        }
        return view('pro',[
            'proplayers' => $list_pro_players,
            'followed_proplayers' => $list_followed_pro
        ]);
    }

    public function index_api()
    {
        $list_pro = ProPlayer::all();
        return response()->json($list_pro);
    }

    public function create(Request $request)
    {
        $pro = new ProPlayer;
        $pro->nick = $request->input('nick');
        $pro->team = $request->input('team');
        $pro->region = $request->input('region');
        $pro->position = $request->input('position');
        $pro->photo = $request->input('photo');
        $pro->nationality = $request->input('nationality');
        $pro->name = $request->input('name');
        $pro->account_id = $request->input('account_id');
        $pro->save();
        return response()->json([
            'message' => 'Success'
        ]);
    }

    public function update(Request $request)
    {
        $pro = ProPlayer::findOrFail($request->input('id'));
        $pro->nick = $request->input('nick');
        $pro->team = $request->input('team');
        $pro->region = $request->input('region');
        $pro->position = $request->input('position');
        $pro->photo = $request->input('photo');
        $pro->nationality = $request->input('nationality');
        $pro->name = $request->input('name');
        $pro->account_id = $request->input('account_id');
        $pro->save();
        return response()->json([
            'message' => 'Success'
        ]);
    }

    public function delete($id)
    {
        $pro = ProPlayer::findOrFail($id);
        $pro->delete();
        return response()->json([
            'message' => 'Success'
        ]);
    }
}
