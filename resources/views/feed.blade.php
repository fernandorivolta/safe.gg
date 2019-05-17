<!DOCTYPE html>
<html>
<head>
    @include('lib.head');
	<script src='/safe.gg/style/js/userFeed.js'></script>
  	<link rel='stylesheet' type='text/css' href='/safe.gg/style/css/main.css'>
  	<link rel='stylesheet' type='text/css' href='/safe.gg/style/css/feed.css'>
  	<link rel='stylesheet' type='text/css' href='/safe.gg/style/css/navbar.css'>
  	<script src='/safe.gg/style/js/userData.js'></script>
</head>
<body>
	@include('lib.navbar');
	<div class="d-flex justify-content-center my-auto" id="loading_wrap" style="z-index: 99999999; position: fixed; overflow: hidden; background-color: black; width: 100%; height: 100%; top: 0; left: 0; opacity: 0.998;">
	  <div class="loader my-auto" role="status">
	    <span class="sr-only">Loading...</span>
	  </div>
	</div>

	<!-- Icone Crop  -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Escolha seu Icone</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form method="POST" action="/safe.gg/controller/userSetIcon.php">
		      <div class="modal-body">
		        <!--Crop-->
				<div class="image-editor">
				   	<input type="file" class="cropit-image-input">
				   	<div class="cropit-preview"></div>
				   	<div class="row">
				   		<input type="range" class="cropit-image-zoom-input slider mx-auto">
					</div>
				   	<input type="hidden" name="fileToUpload" id="fileToUpload" class="hidden-image-data" required>
				 </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		        <button type="submit" id="icon-button" class="btn btn-primary export">Salvar</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>
	<!---->
	<div class="container">
		<div class="row">
				<div class="col-md-3" style="padding-right: 8px;">
					<div class="card bg-dark">
						  <img class="card-img-top img-fluid" id="user-capa" src="http://www.lol-wallpapers.com/wp-content/uploads/2018/03/Classic-KaiSa-Splash-Art-HD-4k-Wallpaper-Background-Official-Art-Artwork-League-of-Legends-lol.jpg" alt="user image">
						  <div class="card-body">
						    <div class="card-title">
						    	<div class="user-card-pos">
							    	<div class="row">
							    		<img class="user-icon img-fluid" id="user-icon" alt="user image">
								    	<button type="button" class="btn photo-change" data-toggle="modal" data-target="#exampleModal">
											  <i class="fas fa-camera gray-font" style="height: 200%;"></i>
										</button>
								    	<span class="user-name my-auto white-font" id="user-name"></span>
							    	</div>
						    	</div>
						    </div><hr class="line-margin">
						    <p class="card-text white-font" id="user-bio">Alo alo alo</p>
						  </div>
					</div>
					<div class="card bg-dark card-lol-info">
						  <div class="card-body">
						    <div class="card-title">
						    	<span class="ranked-title white-font">Ranqueada Solo</span>
						    	<hr class="line-margin">
						    	<div class="row">
						    		<div class="col-md-6 text-center my-auto">
						    			<img id="solo-duo-ranked-img" class="rank-img">
						    		</div>
						    		<div class="col-md-6 my-auto">
						    			<div class="row">
						    				<span class="rank-text white-font" id="solo-duo-ranked"></span>
						    			</div>
						    			<div class="row">
						    				<span class="rank-pdl white-font" id="solo-duo-pdl"></span>
						    			</div>
						    			<div class="row">
						    				<span class="second-stats gray-font" id="solo-duo-win-defeat"></span>
						    			</div>
						    			<div class="row">
						    				<span class="second-stats gray-font" id="solo-duo-winrate"></span>
						    			</div>
						    			<div class="row">
						    				<span class="second-stats gray-font" id="solo-duo-league-name"></span>
						    			</div>
						    		</div>
						    	</div>
						    </div>
						    <p class="card-text user-bio"></p>
						  </div>
					</div>
					<div class="card bg-dark card-lol-info">
						  <div class="card-body">
						    <div class="card-title">
						    	<span class="ranked-title white-font">Ranqueada Flex 5:5</span>
						    	<hr class="line-margin">
						    	<div class="row">
						    		<div class="col-md-6 text-center my-auto">
						    			<img id="flex-ranked-img" class="rank-img">
						    		</div>
						    		<div class="col-md-6 my-auto">
						    			<div class="row">
						    				<span class="rank-text white-font" id="flex-ranked"></span>
						    			</div>
						    			<div class="row">
						    				<span class="rank-pdl white-font" id="flex-pdl"></span>
						    			</div>
						    			<div class="row">
						    				<span class="second-stats gray-font" id="flex-win-defeat"></span>
						    			</div>
						    			<div class="row">
						    				<span class="second-stats gray-font" id="flex-winrate"></span>
						    			</div>
						    			<div class="row">
						    				<span class="second-stats gray-font" id="flex-league-name"></span>
						    			</div>
						    		</div>
						    	</div>
						    </div>
						    <p class="card-text user-bio"></p>
						  </div>
					</div>
				</div>
				<div class="col-md-9" style="padding-left: 0px;">
					<div class="card  bg-dark feed-body" style="height: 100%;">

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
