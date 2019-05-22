<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ApiController extends Controller
{
    public function user_info(){
        $api_array = ['RGAPI-625f5e83-3dee-4b28-85f0-03d742d8d559'];
        $user = Auth::user();
        $user_id = $user->get_summoner_id($api_array[rand(0,count($api_array)-1)]);
        $account_id = $user->get_account_id($api_array[rand(0,count($api_array)-1)]);
        $match_list = $user->get_match_list($account_id, $api_array[rand(0,count($api_array)-1)]);
        foreach($match_list['matches'] as $match){
            $match_stats = $user->get_match_stats($match['gameId'], $api_array[rand(0,count($api_array)-1)]);
            foreach($match_stats['participantIdentities'] as $participant){
                if($participant['player']['accountId']==$account_id){
                    foreach($match_stats['participants'] as $player){
                        if($player['participantId']==$participant['participantId']){
                            foreach($match_stats['teams'] as $team){
                                if($team['teamId']==$player['teamId']){
                                    $player_matchs_info [] = [
                                        'championId' => $player['championId'],
                                        'win' => $player['stats']['win'],
                                        'item0' => $player['stats']['item0'],
                                        'item1' => $player['stats']['item1'],
                                        'item2' => $player['stats']['item2'],
                                        'item3' => $player['stats']['item3'],
                                        'item4' => $player['stats']['item4'],
                                        'item5' => $player['stats']['item5'],
                                        'item6' => $player['stats']['item6'],
                                        'kills' => $player['stats']['kills'],
                                        'deaths' => $player['stats']['deaths'],
                                        'assists' => $player['stats']['assists'],
                                        'totalMinionsKilled' => $player['stats']['totalMinionsKilled'] + $player['stats']['neutralMinionsKilled'],
                                        'champLevel' => $player['stats']['champLevel'],
                                        'largestKillingSpree' => $player['stats']['largestKillingSpree'],
                                        'gameDuration' => gmdate('H:i:s',$match_stats['gameDuration']),
                                        'queueId' => $match_stats['queueId']
                                    ];
                                }
                            }
                        }
                    }
                }
            }
        }

        return view('feed',[
            'user' => $user,
            'ranked_stats' => $user->get_ranked_stats($user_id, $api_array[rand(0,count($api_array)-1)]),
            'player_matchs_info' => $player_matchs_info
        ]);
    }
}
