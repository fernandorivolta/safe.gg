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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
