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
        'id',
        'name',
        'email',
        'username',
        'password',
        'summonerName',
        'steam',
        'icon',
        'token',
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

    public function get_account_id($api_key){
		$name = str_replace(" ","%20",$this->summonerName);
		$response = file_get_contents('https://br1.api.riotgames.com/lol/summoner/v4/summoners/by-name/' . $name . '?api_key=' . $api_key);
		$response = json_decode($response, true);
		return $response['accountId'];
    }

    public function get_ranked_stats($id, $api_key){
		$array = array();
        $ranked_stats = file_get_contents('https://br1.api.riotgames.com/lol/league/v4/positions/by-summoner/' . $id . '?api_key=' . $api_key);
        $ranked_stats = json_decode($ranked_stats, true);
		return $ranked_stats;
    }

    public function get_match_list($id, $api_key){
		$array = array();
        $match_list = file_get_contents('https://br1.api.riotgames.com/lol/match/v4/matchlists/by-account/' . $id . '?endIndex=7&api_key=' . $api_key);
        $match_list = json_decode($match_list, true);
		return $match_list;
    }

    public function get_match_stats($match_id, $api_key){
		$array = array();
        $match_stats = file_get_contents('https://br1.api.riotgames.com/lol/match/v4/matches/' . $match_id . '?api_key=' . $api_key);
        $match_stats = json_decode($match_stats, true);
		return $match_stats;
    }
}
