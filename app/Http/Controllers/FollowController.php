<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserFollowPro;
use App\ProPlayer;
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
    public function show($id)
    {
        //
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