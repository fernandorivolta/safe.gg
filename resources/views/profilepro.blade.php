<!DOCTYPE html>
<html>
<head>
    @include('lib.head')
  	<script type="text/javascript" src="/safe.gg/style/js/proData.js"></script>
  	<link rel='stylesheet' type='text/css' href='/safe.gg/style/css/main.css'>
  	<link rel='stylesheet' type='text/css' href='/safe.gg/style/css/profilePro.css'>
  	<link rel='stylesheet' type='text/css' href='/safe.gg/style/css/navbar.css'>
  	<link rel='stylesheet' type='text/css' href='/safe.gg/style/css/searchPro.css'>
</head>
<body>
    @include('lib.navbar')
	<div class="d-flex justify-content-center my-auto" id="loading_wrap" style="z-index: 99999999; position: fixed; overflow: hidden; background-color: black; width: 100%; height: 100%; top: 0; left: 0; opacity: 0.998;">
	  <div class="loader my-auto" role="status">
	    <span class="sr-only">Loading...</span>
	  </div>
	</div>
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
					    			<img src="" id="pro-flag" style="width: 10%;"><span id="pro-nome" class="text-muted" style="font-size: 14px;"></span>
					    		</div>
					    	</div>
						    <div class="row">
						    	<div class="col-md-12">
						    		<div class="gradient-effect" style="z-index: 99999;">
									    <img src="" id="pro-icon" style="width: 100%; height: 100%;">
									</div>
					    		</div>
						    </div>
					    </div>
					</div>
				</div>
				<div class="card">
					<div class="card-body" style="padding-bottom: 0px;"">
					    <div class="card-title">
					    	<h5 class="text-center black-font" style="font-size: 18px;">MAESTRIAS</h5>
					    	<div class="row">
					    		<div class="row mx-auto">
					    			<div class="col-md-4">
						    			<div class="thumbnail">
						    				<img class="rounded-circle" src="" id="img-champion1" style="width: 100%; height: 100%;">
						    				<div class="caption text-center">
						    					<span class="champion-points" id="champion-name-1"></span>
						    					<p class="champion-points" id="champion-point-1"></p>
						    				</div>
						    			</div>
						    		</div>
						    		<div class="col-md-4">
						    			<div class="thumbnail">
						    				<img class="rounded-circle" src="" id="img-champion2" style="width: 100%; height: 100%;">
						    				<div class="caption text-center">
						    					<span class="champion-points " id="champion-name-2"></span>
						    					<p class="champion-points" id="champion-point-2"></p>
						    				</div>
						    			</div>
						    		</div>
						    		<div class="col-md-4">
						    			<div class="thumbnail">
						    				<img class="rounded-circle" src="" id="img-champion3" style="width: 100%; height: 100%;">
						    				<div class="caption text-center">
						    					<span class="champion-points" id="champion-name-3"></span>
						    					<p class="champion-points" id="champion-point-3"></p>
						    				</div>
						    			</div>
						    		</div>
					    		</div>
					    	</div>
					    </div>
					</div>
				</div>
			</div>
			<div class="col-md-9" style="padding-left: 0px;">
				<div class="card feed-body" style="height: 100%;">

				</div>
			</div>
		</div>
	</div>
</body>
</html>
