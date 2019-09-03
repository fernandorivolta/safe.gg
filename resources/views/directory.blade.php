<!DOCTYPE html>
<html>
<head>
    @include('lib.head')
  	<link rel='stylesheet' type='text/css' href='/css/navbar.css'>
  	<link rel='stylesheet' type='text/css' href='/css/loading.css'>
  	<link rel='stylesheet' type='text/css' href='/css/loading-btn.css'>
  	<link rel='stylesheet' type='text/css' href='/css/directory.css'>
    <script src="/js/data-api.js"></script>
</head>
<body>
	@include('lib.navbar');
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="margin-left: 30px; margin-right:30px;">
                <div class="card bg-dark feed-body" style="height: 100%;">
                    <div class="row">
                        @foreach ($games as $i=>$game)
                            @if ($i % 3 == 0)
                                </div>
                                <div class="row"> 
                            @endif
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="thumbnail">
                                            <img src={{$game->img}} class="card-img-top">
                                            <div class="caption">
                                                <div class="row" style="margin: 5px;">
                                                    <div class="col-md-6 my-auto text-center">
                                                        <span class="card-text white-font text-center">{{$game->tag}}</span>
                                                    </div>
                                                    <div class="col-md-6 my-auto">
                                                        @if (in_array($game->id, $followed_games))
                                                            <a onclick="unfollow_game({{$game->id}}, $(this))" 
                                                            class="btn btn-outline-primary btn-follow ld-ext-right">Seguindo<div class="ld ld-ring ld-spin-fast"></div></a>
                                                        @else
                                                            <a onclick="follow_game({{$game->id}}, $(this))"
                                                            class="btn btn-outline-primary btn-following ld-ext-right">Seguir<div class="ld ld-ring ld-spin-fast"></div></a>
                                                        @endif
                                                    </div>
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
	</div>
</body>
</html>
