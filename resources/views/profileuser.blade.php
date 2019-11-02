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
<script> 
  $(document).ready(function(){
	var posts = {!! json_encode($posts) !!};
	console.log(posts);
  });
</script>
<body>
    @include('lib.navbar')
	<div class="container">
		<div class="row">
			<div class="col-md-3" style="padding-right: 8px;">
				<div class="card bg-dark">
					<div class="card-body">
					    <div class="card-title">
							<div class="row">
								<div class="col-md-12 text-center">
									<span class="white-font" style="font-size: 20px;">{{$user->username}}</span>
								</div>
							</div>
						    <div class="row">
						    	<div class="col-md-12 text-center">
						    		<div>
									    <img class="img-fluid rounded-circle" src="{{ asset('storage/'.$user->icon) }}" style="width: 70%; height: 70%;">
									</div>
					    		</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-center white-font">
									<i class="fab fa-steam"></i><span style="font-size: 20px;"> {{$user->steam}}</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-center white-font">
									<i class="fas fa-mouse-pointer"></i><span style="font-size: 20px;"> {{$user->summonerName}}</span>
								</div>
							</div>
							<div class="row">
						    	<div class="col-md-12 text-center">
									<span class="text-muted white-font" style="font-size: 14px;">
									{{count($user->get_follows)}} 
									@if (count($user->get_follows) > 1) 
										Seguidores 
									@elseif (count($user->get_follows) == 0)
										Seguidores
									@else
										Seguidor 
									@endif
									</span>
					    		</div>
						    </div>
					    </div>
					</div>
				</div>
			</div>
			<div class="col-md-9" style="padding-left: 0px;">
				<div class="card feed-body bg-dark" style="height: 100%;">
					@if (count($posts) > 0)
						@foreach ($posts as $post)
							<div class="row">
								<div class="col-md-12 white-font">
									  <div class="card-header news-card-text">
										{{$user->name}}
									  </div>
									  <div class="card-body news-card-text text-center">
										<div class="row">
											<div class="col-md-3 text-center">
												<img style="width:30%" class="img-fluid rounded" src="/storage/{{$user->icon}}" alt="user image">
											</div>
											<div class="col-md-9 text-left my-auto">
												<p class="text-left card-text">{{$post->post}}</p>
											</div>
									  </div>
								</div>
							</div>
						@endforeach
					@else	
						<h2 class='text-center white-font mx-auto'>O usuário não tem nenhum post</h2>
					@endif
				</div>
			</div>
		</div>
	</div>
</body>
</html>
