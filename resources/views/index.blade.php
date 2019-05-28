<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	@include('lib.head')
	<link rel='stylesheet' type='text/css' href='/css/navIndex.css'>
	<link rel='stylesheet' type='text/css' href='/css/main.css'>
	<link rel='stylesheet' type='text/css' href='/css/index.css'>
	<script type="text/javascript" src='/js/navIndex.js'></script>
	<script type="text/javascript" src='/js/signUpIndex.js'></script>
    <script type="text/javascript" src='/js/index.js'></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
	<div class="navbar-remake container">
		<a class="navbar-brand animated fadeInLeft" href="#"><img style="width: 90px;" src="../images/icons/safe_gg-logo-nome-branco.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		   	<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
		   	<ul class="navbar-nav">
		   		<li class="nav-item">
		       		<a class="nav-link" href="/login">LOGIN <i class="fas fa-sign-in-alt"></i></a>
		   		</li>
	    	</ul>
	  	</div>
  	</div>
</nav>
<section id="cadastre" style="height: 700px;background-color: #37003f; background-image: url('../images/background/kaisaBG2.png');background-size: cover; background-repeat: no-repeat; background-position: center; opacity: 1; ">
	<div class="container d-flex h-100">
		<div class="row justify-content-center align-self-center col-md-12">
			<div class="col-md-6">
				<h1 class="title white-font">Junte-se a milhares de jogadores</h1>
				<h6 class="white-font">Faça novas amizades, compartilhe experiências<br> e encontre o seu duo ideal!</h6>
			</div>
			<div class="col-md-6">
				<div class="align-middle bg-dark rounded form-div" style="opacity: 0.8">
					<form id="signup-form" class="form" action="/user/account" method="post" onsubmit="return validateFormSignUp();">
                        {{ csrf_field() }}
                        <h4 class="white-font text-center">Cadastre-se</h4>
						<hr>
						<div class="form-group">
						    <input type="text" class="white-font form-control bg-dark" id="user" name="username" placeholder="User" aria-describedby="feedback">
						  	<small id="feedback" class="form-text red-font" style="display:none;">
							  <p class="red-font"><i class="fas fa-exclamation-circle"></i> O usuário já está sendo usado.</p>
							</small>
						  </div>
						  <div class="form-group">
						    <input type="email" class="white-font form-control bg-dark" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <input type="text" class="white-font form-control bg-dark" id="nome" name="name" placeholder="Nome">
						  </div>
						  <button id="btn-create" type="submit" class="btn btn-block btn-outline-light white-font"><i class="fas fa-user-plus"></i> Criar Conta</button>
						<br>
					</form>
				</div>
			</div>
	</div>

</section>
<section style="height: 700px;background-color:	#37003f; overflow: hidden;">
	<div class="container d-flex h-100">
		<div class="row justify-content-center align-self-center col-md-12"  data-aos="fade-right" data-aos-delay="300">
			<div class="col-md-6">
				<h2 class="align-middle white-font">Siga seus jogadores favoritos e amigos</h2>
				<br>
				<p class="text-justify white-font"> De um follow em seu jogador favorito para saber com qual campeão anda jogando
				ultimamente, sua Stream e suas contas. Siga também seus amigos para descobrir como ele
				anda nas Ranqueadas e se ele se encontra disponível para partidas.</p>
			</div>
			<div class="col-md-6">
				<div class="card-hover">
					<div class="card">
						<div class="card-content">
							<div class="image" style="background-image: url('../images/funcs/proplayers.png');"></div>
						</div>
					</div>
				</div>
			</div>
	</div>
</section>
<section style="height: 700px;background-image: url('/images/background/kindredBG.jpg');background-size:100%;background-repeat:no-repeat;">
	<div class="container d-flex h-100">
		<div class="row justify-content-center align-self-center col-md-12"  data-aos="fade-right" data-aos-delay="300">
		<div class="col-md-6">
				<div class="card-hover">
					<div class="card">
						<div class="card-content">
							<div class="image" style="background-image: url('../images/funcs/proplayers.png');"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h2 class="align-middle white-font">Encontre seu(s) TeamMate(s)/DUO</h2>
				<br>
				<p class="text-justify white-font">Nada como achar um parceiro ideal para suas Ranqueadas, uma de nossas
					funcionalidades é proporcionar isso aos jogadores, podendo você encontrar o jogador ideal
					para subir de elo.</p>
			</div>
	</div>
</section>
<section style="height: 700px;background-color:	#37003f; overflow: hidden;">
	<div class="container d-flex h-100">
		<div class="row justify-content-center align-self-center col-md-12"  data-aos="fade-right" data-aos-delay="300">
		<div class="col-md-6">
				<h2 class="align-middle white-font">Runas e Builds</h2>
				<br>
				<p class="text-justify white-font">Não conhece a runa de um campeão, está com dificuldade para buildar em sua
					partida? Aqui você encontra as runas e builds mais jogadas e com maior porcentagem de
					vitória nas filas Ranqueadas.</p>
			</div>
		<div class="col-md-6">
				<div class="card-hover">
					<div class="card">
						<div class="card-content">
							<div class="image" style="background-image: url('../images/funcs/proplayers.png');"></div>
						</div>
					</div>
				</div>
			</div>
	</div>
</section>
<section style="height: 700px;background-image: url('/images/background/kindredBG.jpg');background-size:100%;background-repeat:no-repeat;">
	<div class="container d-flex h-100">
		<div class="row justify-content-center align-self-center col-md-12"  data-aos="fade-right" data-aos-delay="300">
		<div class="col-md-6">
				<div class="card-hover">
					<div class="card">
						<div class="card-content">
							<div class="image" style="background-image: url('../images/funcs/proplayers.png');"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h2 class="align-middle white-font">Dê o próximo passo rumo ao topo</h2>
				<br>
				<p class="text-justify white-font">Com uma infinidade de guias de granadas para você se tornar um melhor jogador, o Safe GG tem todo o material necessário para você se tornar um melhor jogador.
					para subir de elo.</p>
			</div>
	</div>
</section>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>
