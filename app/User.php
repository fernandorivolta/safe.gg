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
        'summonerName',
        'steam',
        'icon',
        'token',
    ];

    protected $hidden = [
        'password', 'token',
    ];

	  public function get_summoner_id($api_key){
      try {
        $name = str_replace(" ","%20",$this->summonerName);
        $response = file_get_contents('https://br1.api.riotgames.com/lol/summoner/v4/summoners/by-name/' . $name . '?api_key=' . $api_key);
        $response = json_decode($response, true);
        return $response['id'];
      } catch (\Throwable $th) {
        return 0;
      }
    }

    public function get_account_id($api_key){
      try {
        $name = str_replace(" ","%20",$this->summonerName);
        $response = file_get_contents('https://br1.api.riotgames.com/lol/summoner/v4/summoners/by-name/' . $name . '?api_key=' . $api_key);
        $response = json_decode($response, true);
        return $response['accountId'];
      } catch (\Throwable $th) {
        return 0;
      }
    }

    public function get_ranked_stats($id, $api_key){
      try {
        $ranked_stats = file_get_contents('https://br1.api.riotgames.com/lol/league/v4/entries/by-summoner/' . $id . '?api_key=' . $api_key);
        $ranked_stats = json_decode($ranked_stats, true);
        return $ranked_stats;
      } catch (\Throwable $th) {
        return 0;
      }
    }

    public function get_match_list($id, $api_key){
      try {
        $match_list = file_get_contents('https://br1.api.riotgames.com/lol/match/v4/matchlists/by-account/' . $id . '?endIndex=8&api_key=' . $api_key);
        $match_list = json_decode($match_list, true);
        return $match_list;
      } catch (\Throwable $th) {
        return 0;
      }
    }

    public function get_match_stats($match_id, $api_key){
      try {
        $match_stats = file_get_contents('https://br1.api.riotgames.com/lol/match/v4/matches/' . $match_id . '?api_key=' . $api_key);
        $match_stats = json_decode($match_stats, true);
		    return $match_stats;
      } catch (\Throwable $th) {
        return 0;
      }
    }

    public function get_follows(){
      return $this->hasMany(UserFollowUser::class, 'user_id_followed', 'id');
    }
    
}
