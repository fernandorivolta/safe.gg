<!DOCTYPE html>
<html>
<head>
    @include('lib.head')
  	<link rel='stylesheet' type='text/css' href='/css/navbar.css'>
  	<link rel='stylesheet' type='text/css' href='/css/loading.css'>
  	<link rel='stylesheet' type='text/css' href='/css/loading-btn.css'>
  	<link rel='stylesheet' type='text/css' href='/css/feed.css'>
    <script src="/js/data-api.js"></script>
</head>
<body>
	@include('lib.navbar');
	<div class="container">
		<div class="row">
			<div class="col-md-12">
                <div class="card bg-dark feed-body" style="height: 100%;">
                    <div class="row">
                        @foreach ($games as $i=>$game)
                            @if ($i % 4 == 0)
                                </div>
                                <div class="row"> 
                            @endif
                            <div class="col-md-3">
                                <div class="thumbnail">
                                <a href="/w3images/lights.jpg">
                                    <img src={{$game->img}} class="card-img-top">
                                    <div class="caption">
                                    <p class="card-text">{{$game->game}}</p>
                                    </div>
                                </a>
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
