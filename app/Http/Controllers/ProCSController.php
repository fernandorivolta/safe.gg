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
}
