<!DOCTYPE html>
<html>
<head>
    @include('lib.head')
  	<link rel='stylesheet' type='text/css' href='/css/main.css'>
  	<link rel='stylesheet' type='text/css' href='/css/profilePro.css'>
  	<link rel='stylesheet' type='text/css' href='/css/navbar.css'>
  	<link rel='stylesheet' type='text/css' href='/css/feed.css'>
  	<link rel='stylesheet' type='text/css' href='/css/searchPro.css'>
</head>
<body>
    @include('lib.navbar')
	<div class="container">
		<div class="row">
			<div class="col-md-3" style="padding-right: 8px;">
				<div class="card">
					<div class="card-body">
					    <div class="card-title">
					    	<div class="row">
					    		<div class="col-md-12">
					    			<h5 id="pro-nick" class="text-center text-uppercase"></h5>
					    		</div>
					    	</div>
					    	<div class="row">
					    		<div class="col-md-12 text-center">
					    			<img src="/images/flag/{{$proplayer->nationality}}.svg" id="pro-flag" style="width: 10%;">
									<span class="text-muted" style="font-size: 14px;">{{$proplayer->name}}</span>
					    		</div>
					    	</div>
						    <div class="row">
						    	<div class="col-md-12">
						    		<div class="gradient-effect" style="z-index: 99999;">
									    <img src="{{$proplayer->photo}}" id="pro-icon" style="width: 100%; height: 100%;">
									</div>
					    		</div>
							</div>
							<div class="row">
						    	<div class="col-md-12 text-center">
									<span class="text-muted" style="font-size: 14px;">{{count($proplayer->get_follows)}} Seguidores</span>
					    		</div>
						    </div>
					    </div>
					</div>
				</div>
				<div class="card" style="border: unset !important;">
					<div class="card-body white-font bg-dark">
					    <div class="card-title">
					    	<h5 class="text-center" style="font-size: 18px;">MAESTRIAS</h5>
					    	<div class="row">
					    		<div class="row mx-auto">
									@foreach ($champion_mastery as $champion)
					    				<div class="col-md-4">
						    				<div class="thumbnail">
						    					<img class="rounded-circle" src="/images/squares/{{$champion['champion']}}.png" style="width: 100%; height: 100%;">
						    					<div class="caption text-center">
						    						<span class="champion-points">{{$champion['champion']}}</span>
						    						<p class="champion-points">{{$champion['championPoints']}}</p>
						    					</div>
						    				</div>
						    			</div>
									@endforeach
					    		</div>
					    	</div>
					    </div>
					</div>
				</div>
			</div>
			<div class="col-md-9" style="padding-left: 0px;">
				<div class="card feed-body bg-dark" style="height: 100%;">
					@foreach ($proplayer_matchs_info as $match)
            	@if($match['win'])
            	    <div class="card card-feed shadow-sm card-win white-font">
            	@else
            	    <div class="card card-feed shadow-sm card-lose white-font">
            	@endif
            	    <div class="card-body" style="padding: 0.5rem !important">
            	        <div class="col-md-12">
            	            <div class="row">
            	                <span>{{$match['queue']}} </span>
            	                <div class="my-auto circle-card">
            	                    <i class="fas fa-circle fa-xs"></i>
            	                </div>
            	                <small class="span-card my-auto">
            	                    {{$match['gameDuration']}}
            	                </small>
            	            </div>
            	            <hr style="width:100%; margin-bottom: 10px;">
            	            <div class="row">
            	                <div class="col-md-3 my-auto">
            	                    <div class="row">
            	                        <img class="img-champion img-fluid rounded-circle mx-auto" src="/images/squares/{{$match['championName']}}.png">
            	                    </div>
            	                    <div class="row">
            	                        <p class="text-center mx-auto">Level {{$match['champLevel']}}</p>
            	                    </div>
            	                </div>
            	                <div class="col-md-2 my-auto">
            	                    <div class="row">
            	                        <img class="img-spell img-fluid" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/spell/Summoner{{$match['spell1']}}.png">
            	                        <img class="img-perk img-fluid" src="https://opgg-static.akamaized.net/images/lol/perk/{{$match['runa1']}}.png">
            	                    </div>
            	                    <div class="row">
            	                        <img class="img-spell img-fluid" src="http://ddragon.leagueoflegends.com/cdn/6.24.1/img/spell/Summoner{{$match['spell2']}}.png">
            	                        <img class="img-perk img-fluid" src="https://opgg-static.akamaized.net/images/lol/perkStyle/{{$match['runa2']}}.png">
            	                    
            	                    </div>
            	                </div>
            	                <div class="col-md-2 my-auto">
            	                    <div class="row">
            	                        <span>{{$match['kills']}}<small class="card-bars">/</small><span style="color: #a7a7a7;">{{$match['deaths']}}</span><small class="card-bars">/</small>{{$match['assists']}}</span>
            	                    </div>
            	                    <div class="row">
            	                        <span>{{$match['kda']}} <small class="span-card">KDA</small></span>
            	                    </div>
            	                    <div class="row">
            	                        <span>{{$match['totalMinionsKilled']}}<small class="span-card" data-tooltip="Minions por minuto" data-tooltip-position="bottom">({{round(($match['totalMinionsKilled']/($match['gameDurationSec']/60)),1)}}) CS</small></span>
            	                    </div>
            	                </div>
            	                <div class="col-md-2 my-auto">
            	                    <div class="row">
            	                        @if($match['item0'])
            	                            <img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/{{$match['item0']}}.png">
            	                        @endif
            	                        @if($match['item1'])
            	                            <img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/{{$match['item1']}}.png">
            	                        @endif
            	                        @if($match['item2'])
            	                            <img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/{{$match['item2']}}.png">
            	                        @endif
            	                    </div>
            	                    <div class="row">
            	                        @if($match['item3'])
            	                            <img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/{{$match['item3']}}.png">
            	                        @endif
            	                        @if($match['item4'])
            	                            <img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/{{$match['item4']}}.png">
            	                        @endif
            	                        @if($match['item5'])
            	                            <img class="img-fluid item-card" src="https://opgg-static.akamaized.net/images/lol/item/{{$match['item5']}}.png">
            	                        @endif
            	                    </div>
            	                </div>
            	            </div>
            	        </div>
            	    </div>
            	</div>
            @endforeach
				</div>
			</div>
		</div>
	</div>
</body>
</html>
