<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'id';

    protected $table = 'Users';

    protected $fillable = [
        'id','name', 'email','username', 'password', 'summonerName', 'steam', 'icon','token',
    ];

    protected $hidden = [
        'password', 'token',
    ];

	public function get_summoner_id($api_key){
		$name = str_replace(" ","%20",$this->summonerName);
		$response = file_get_contents('https://br1.api.riotgames.com/lol/summoner/v4/summoners/by-name/' . $name . '?api_key=' . $api_key);
		$response = json_decode($response, true);
		return $response['id'];
    }

    public function get_summoner_id_by_puuid($puuid, $api_key){
		$response = file_get_contents('https://br1.api.riotgames.com/lol/summoner/v4/summoners/by-puuid/' . $puuid . '?api_key=' . $api_key);
		$response = json_decode($response, true);
		return $response['id'];
    }

    public function get_ranked_stats($id, $api_key){
		$array = array();
        $ranked_stats = file_get_contents('https://br1.api.riotgames.com/lol/league/v4/positions/by-summoner/' . $id . '?api_key=' . $api_key);
        $ranked_stats = json_decode($ranked_stats, true);
		return $ranked_stats;
    }
}
