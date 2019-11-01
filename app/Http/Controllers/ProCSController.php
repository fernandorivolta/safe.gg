<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProPlayerCS;

class ProCSController extends Controller
{
    public function index(){
        $list_pro_players = ProPlayerCS::all();
        return view('pro_cs',[
            'proplayers' => $list_pro_players,
        ]);
    }

    public function index_api(){
        $list_pro = ProPlayerCS::all();
        return response()->json($list_pro);
    }

    public function create(Request $request)
    {
        $pro = new ProPlayerCS;
        $pro->roundcontribution = $request->input('roundcontribution');
        $pro->deathperround = $request->input('deathperround');
        $pro->mapsplayed = $request->input('mapsplayed');
        $pro->kddiff = $request->input('kddiff');
        $pro->team = $request->input('team');
        $pro->age = $request->input('age');
        $pro->proplayername = $request->input('proplayername');
        $pro->nationality = $request->input('nacionality');
        $pro->nick = $request->input('nick');
        $pro->steamlink = $request->input('steamlink');
        $pro->save();

        return response()->json([
            'message' => "Success"
        ]);
    }

    public function profile_pro($id){
        $pro = ProPlayerCS::findOrFail($id);
        return view('profilepro_cs',[
            'proplayer' => $pro
        ]);
    }
}
