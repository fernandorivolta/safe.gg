<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LolFind;
use App\CsgoFind;

class FindController extends Controller
{
    public function elo_controller($elo, $game){
        switch($game){
            case "CSGO":
                switch($elo){
                    case "Prata":
                        $supported_elos = ['Prata', 'Ouro']; 
                    break;
                    case "Ouro":
                        $supported_elos = ['Prata', 'Ouro', 'Ak']; 
                    break;
                    case "Ak":
                        $supported_elos = ['Ak', 'Ouro', 'Xerife']; 
                    break;
                    case "Xerife":
                        $supported_elos = ['Ak', 'Xerife', 'Aguia']; 
                    break;
                    case "Aguia":
                        $supported_elos = ['Aguia', 'Xerife', 'Supremo']; 
                    break;
                    case "Supremo":
                        $supported_elos = ['Supremo', 'Aguia', 'Xerife', 'Global']; 
                    break;
                    case "Global":
                        $supported_elos = ['Global', 'Supremo', 'Aguia']; 
                    break;
                }
            break;
            case "LOL":
            switch($elo){
                case "Ferro":
                    $supported_elos = ['Ferro', 'Bronze']; 
                break;
                case "Bronze":
                    $supported_elos = ['Bronze', 'Prata', 'Ferro']; 
                break;
                case "Prata":
                    $supported_elos = ['Bronze', 'Prata', 'Ouro']; 
                break;
                case "Ouro":
                    $supported_elos = ['Ouro', 'Prata', 'Platina']; 
                break;
                case "Platina":
                    $supported_elos = ['Ouro', 'Platina', 'Diamante']; 
                break;
                case "Diamante":
                    $supported_elos = ['Diamante', 'Platina', 'Mestre']; 
                break;
                case "Mestre":
                    $supported_elos = ['Mestre', 'Diamante', 'Grão-Mestre']; 
                break;
                case "Grão-Mestre":
                    $supported_elos = ['Mestre', 'Grão-Mestre', 'Challenger']; 
                break;
                case "Challenger":
                    $supported_elos = ['Challenger', 'Grão-Mestre', 'Mestre']; 
                break;
            }
            break;
        }

        return $supported_elos;
    }

    public function sign_up_verifier($id, $game){
        $user_list = [];
        $user = "";
        switch($game){
            case "CSGO":
                $user = CsgoFind::where('user_id', '=', $id)->first();
                $supported_elos = $this->elo_controller($user->patente, $game);
                $user_list = CsgoFind::where('user_id', '<>', $id)->whereIn('patente', $supported_elos)->get();
            break;
            case "LOL":
                $user = LolFind::where('user_id', '=', $id)->first();
                $supported_elos = $this->elo_controller($user->elo, $game);
                $user_list = LolFind::where('user_id', '<>', $id)->whereIn('elo', $supported_elos)->get();
            break;
        }

        return response()->json([
            'user' => $user,
            'user_list' => $user_list
        ]);
    }

    public function registerlol(Request $request){
        $request->validate([
            'user_id' => 'required|numeric',
            'elo' => 'required|string',
            'posicao' => 'required|string',
            'sumonnername' => 'required|string',
            'disponibilidade' => 'required|string'
        ]);

        $lolfind = new LolFind;
        $lolfind->user_id = $user_id;
        $lolfind->elo = $elo;
        $lolfind->posicao = $posicao;
        $lolfind->disponibilidade = $disponibilidade;
        $lolfind->sumonnername = $sumonnername;
        $lolfind->save();

        return response()->json([
            "message" => "Success"
        ], 200);
    }

    public function registercs(Request $request){
        $request->validate([
            'user_id' => 'required|numeric',
            'patente' => 'required|string',
            'funcao' => 'required|string',
            'steamurl' => 'required|string',
            'disponibilidade' => 'required|string'
        ]);

        $csgoFind = new CsgoFind;
        $csgoFind->user_id = $request->input('user_id');
        $csgoFind->patente = $request->input('patente');
        $csgoFind->funcao = $request->input('funcao');
        $csgoFind->disponibilidade = $request->input('disponibilidade');
        $csgoFind->steamurl = $request->input('steamurl');
        $csgoFind->save();

        return response()->json([
            "message" => "Success"
        ], 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
