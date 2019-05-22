<!DOCTYPE html>
<html>
<head>
    @include('lib.head');
	<link rel='stylesheet' type="text/css" href="/css/championTable.css">
  	<link rel='stylesheet' type='text/css' href='/css/navbar.css'>
	<script type="text/javascript" src="/js/championTable.js"></script>
  	<link rel='stylesheet' type='text/css' href='/css/profilePro.css'>
</head>
<body>
	@include('lib.navbar');
	<div class="container">
		<div class="row">
			<div class="card bg-dark" style="width: 100%;">
				<div class="col-md-12 text-center">
					<div class="row text-center">
						<div class="col-md-12 center-block">
							<h2 class="white-font" style="margin-top:16px">CHAMPIONS</h2>
							<input class="form-control mr-sm-2" id="championInput" onkeyup="searchChampion()" type="text" name="" placeholder="Procure o campeão" style="width: 40%; margin-bottom: 5px;">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<table class="table text-center" id="championTable">
								<tr>
								<!--include '../controller/championsTable.php';-->
							</table>
						</div>
					</div>
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
