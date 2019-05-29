<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProPlayer;
use App\UserFollowPro;
use Auth;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Http\Controllers\ApiController;

class ProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_followed_pro = [];
        $user = Auth::user();
        $list_pro_players = ProPlayer::all();
        $aux_followed = DB::table('userfollowpro')->where('user_id', '=', $user->id)->pluck('proplayer_id');
        foreach ($aux_followed as $follow){
            $list_followed_pro [] = $follow;
        }
        return view('pro',[
            'proplayers' => $list_pro_players,
            'followed_proplayers' => $list_followed_pro
        ]);
    }

    public function __construct(ApiController $api, User $user)
    {
        $this->User = $user;
        $this->ApiController = $api;
    }

    public function profile_pro($id){
        $match_list = $this->User->get_match_list($id, $this->ApiController->get_api_key());
        foreach($match_list['matches'] as $match){
            $match_stats = $this->User->get_match_stats($match['gameId'], $this->ApiController->get_api_key());
            foreach($match_stats['participantIdentities'] as $participant){
                if($participant['player']['currentAccountId']==$id){
                    foreach($match_stats['participants'] as $player){
                        if($player['participantId']==$participant['participantId']){
                            foreach($match_stats['teams'] as $team){
                                if($team['teamId']==$player['teamId']){
                                    $kda = $player['stats']['deaths'] != 0 ? round(($player['stats']['kills']+$player['stats']['assists'])/$player['stats']['deaths'],1) : $player['stats']['kills']+$player['stats']['assists'];
                                    $proplayer_matchs_info [] = [
                                        'championId' => $player['championId'],
                                        'championName' => $this->ApiController->championid_to_championname($player['championId']),
                                        'win' => $player['stats']['win'],
                                        'spell1' => $this->ApiController->spellid_to_spellname($player['spell1Id']),
                                        'spell2' => $this->ApiController->spellid_to_spellname($player['spell2Id']),
                                        'runa1' => $player['stats']['perk0'],
                                        'runa2' => $player['stats']['perkSubStyle'],
                                        'kda' => $kda,
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
                                        'largestMultiKill' => $player['stats']['largestMultiKill'],
                                        'gameDuration' => gmdate('i:s',$match_stats['gameDuration']),
                                        'gameDurationSec' => $match_stats['gameDuration'],
                                        'queue' => $this->ApiController->queueid_to_queuename($match_stats['queueId'])
                                    ];
                                }
                            }
                        }
                    }
                }
            }
        }
        return view('profilepro',[
                'proplayer_matchs_info' => $proplayer_matchs_info
            ]);
        
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
