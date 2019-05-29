<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProPlayer extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nick',
        'team',
        'region',
        'position',
        'photo',
        'nationality',
        'name',
        'account_id',
    ];

    protected $table = 'ProPlayers';

    public function get_account_id_by_puuid($api_key){
		  $response = file_get_contents('https://br1.api.riotgames.com/lol/summoner/v4/summoners/by-puuid/' . $this->account_id  . '?api_key=' . $api_key);
		  $response = json_decode($response, true);
		  return $response['accountId'];
    }

    public function get_summoner_id_by_puuid($api_key){
		  $response = file_get_contents('https://br1.api.riotgames.com/lol/summoner/v4/summoners/by-puuid/' . $this->account_id  . '?api_key=' . $api_key);
		  $response = json_decode($response, true);
		  return $response['id'];
    }

    public function get_champion_masteries($id, $api_key){
      $champions_masteries = array();
      $response = file_get_contents('https://br1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/' . $id . '?api_key=' . $api_key);
      $response = json_decode($response, true);
      foreach ($response as $line) {
        if(count($champions_masteries)<3){
          $champions_masteries [] = ['champion' => $line['championId'], 'championPoints' =>$line['championPoints']];
        }
      }
      return $champions_masteries;
    }

    public function get_follows(){
      return $this->hasMany(UserFollowPro::class, 'proplayer_id', 'id');
    }
}
