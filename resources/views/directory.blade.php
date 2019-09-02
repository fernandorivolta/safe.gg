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
			<div class="col-md-12">
                <div class="card bg-dark feed-body" style="height: 100%;">
                    <div class="row">
                        @foreach ($games as $i=>$game)
                            @if ($i % 4 == 0)
                                </div>
                                <div class="row"> 
                            @endif
                            <div class="col-md-3">
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
                                                        <a href="#" class="btn btn-primary">Seguir</a>
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
