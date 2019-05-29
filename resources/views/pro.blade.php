<!DOCTYPE html>
<html>
<head>
    @include('lib.head')
  	<script type="text/javascript" src="/js/proPlayerSearch.js"></script>
  	<link rel='stylesheet' type='text/css' href='/css/feed.css'>
  	<link rel='stylesheet' type='text/css' href='/css/navbar.css'>
  	<link rel='stylesheet' type='text/css' href='/css/searchPro.css'>
</head>
<body>
	@include('lib.navbar');
	<div class="container">
		<div class="row">
			<div class="col-md-3" style="padding-right: 8px;">
				<div class="card bg-dark">
					<div class="card-body">
					    <div class="card-title">
						    <div class="row">
						    	<form class="form-inline my-2 my-lg-0">
						    		<div class="row row-without-margin">
						    			<div class="col-md-12">
						    			</div>
						    		</div>
									<div class="row row-without-margin mx-auto">
									    <input class="form-control mr-sm-2" type="search" placeholder="Procurar jogador" aria-label="Search" id="search-param" style="width: 70%; margin-left: 12px;">
									    <button class="btn btn-outline-light my-2 my-sm-0" id="btn-search" type="button"><i class="fa fa-search"></i></button></i></button>
								  	</div>
								</form>
						    </div>
					    </div>
					</div>
				</div>
			</div>
			<div class="col-md-9" style="padding-left: 0px;">
				<div class="card bg-dark feed-body" style="height: 100%;">
                    @foreach ($proplayers as $proplayer)
                        <div class="card card-feed shadow-sm">
                            <div class="card-body" style="padding: 0.5rem !important">
                                <div class="row">
                                    <div class="col-md-3" >
                                        <img class="player-img" src={{$proplayer->photo}}>
                                </div>
                                <div class="col-md-7 my-auto" style="font-size: 13px">
                                    <div class="row"> <div class="col-md-12">
                                    <h5 class="text-uppercase"><strong>{{$proplayer->nick}}</strong></h5>
                                    </div></div><hr><div class="row">
                                        <div class="col-md-6">
                                            <p class="text-left">Região: </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-right">{{$proplayer->region}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-left">Time: </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-right">{{$proplayer->team}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-left">Posição: </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-right">{{$proplayer->position}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 my-auto">
                                    @if (in_array($proplayer->id, $followed_proplayers))
                                        <a href="/pro/unfollow/{{$proplayer->id}}" class="btn btn-outline-primary btn-follow">Unfollow</a>
                                    @else
                                        <a href="/pro/follow/{{$proplayer->id}}" class="btn btn-outline-primary btn-follow">Follow</a>
                                    @endif
                                    <a href="/pro/{{$proplayer->account_id}}" class="btn btn-outline-primary btn-profile">Perfil</a>
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
<?php
  if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
  }
?>
