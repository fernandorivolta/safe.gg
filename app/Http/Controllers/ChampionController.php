<?php

namespace App\Http\Controllers;

use App\Champion;
use Illuminate\Http\Request;

class ChampionController extends Controller
{

    public function index(){
        $champions = Champion::orderBy('name')->get();
        return view('champions',[
            'champions' => $champions
        ]);
    }

    public function find($champion){
        $champion = Champion::where('name', $champion)->first();
        return view('profilechampion', [
            'champion' => $champion
        ]);
    }
}
