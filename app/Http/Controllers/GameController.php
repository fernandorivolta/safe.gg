<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{

    public function index()
    {
        $games = Game::all();
        return view('directory', [
            'games' => $games
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
