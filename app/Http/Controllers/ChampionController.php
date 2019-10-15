<?php

namespace App\Http\Controllers;

use App\Champion;
use Illuminate\Http\Request;

class ChampionController extends Controller
{

    public function find($champion){
        $champion = Champion::where('name', $champion)->first();
        return view('profilechampion', [
            $champion
        ]);
    }
}
