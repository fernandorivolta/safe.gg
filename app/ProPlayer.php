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

    public function get_summoner_id_by_puuid($api_key){
		$response = file_get_contents('https://br1.api.riotgames.com/lol/summoner/v4/summoners/by-puuid/' . $this->account_id  . '?api_key=' . $api_key);
		$response = json_decode($response, true);
		return $response['id'];
    }
}
