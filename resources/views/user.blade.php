<!DOCTYPE html>
<html>
<head>
    @include('lib.head')
  	<link rel='stylesheet' type='text/css' href='/css/navbar.css'>
  	<link rel='stylesheet' type='text/css' href='/css/searchPro.css'>
</head>
<body>
	@include('lib.navbar');
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card bg-dark feed-body" style="height: 100%;">
                    @foreach ($users as $user)
                        <div class="card card-feed shadow-sm bg-dark white-font">
                            <div class="card-body" style="padding: 0.5rem !important">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img class="player-img" src={{ asset('storage/'.$user->icon) }} style="width: 50%;">
                                    </div>
                                    <div class="col-md-7 my-auto" style="font-size: 13px">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 class="text-uppercase"><strong>{{$user->username}}</strong></h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="text-left">LOL: </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-right">{{$user->summonerName}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="text-left">Steam: </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-right">{{$user->steam}}</p>
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
</body>
</html>
