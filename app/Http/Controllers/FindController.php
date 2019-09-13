<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LolFind;
use App\CsgoFind;

class FindController extends Controller
{
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
