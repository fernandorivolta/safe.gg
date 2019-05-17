<!DOCTYPE html>
<html>
<head>
    @include('lib.head');
  	<script type="text/javascript" src="/style/js/proPlayerSearch.js"></script>
  	<link rel='stylesheet' type='text/css' href='/style/css/feed.css'>
  	<link rel='stylesheet' type='text/css' href='/style/css/navbar.css'>
  	<link rel='stylesheet' type='text/css' href='/style/css/searchPro.css'>
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
