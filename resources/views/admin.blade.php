<!DOCTYPE html>
<html>
<head>
    @include('lib.head')
      <link rel='stylesheet' type='text/css' href='/css/navbar.css'>
      <script src="js/admin.js"></script>
</head>
<body>
	@include('lib.navbar');
	<div class="container">
		<div class="row">
			<div class="col-md-12" style="padding-left: 0px;">
                <div class="card bg-dark" style="height: 100%;">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <input type="text" class='input' id='user-set-admin'>
                        </div>
                        <div class="col-md-6">                     
                            <a id="set-admin" class="btn btn-primary">set admin</a>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class='input' id='user-unset-admin'>
                        </div>
                        <div class="col-md-6">                     
                            <a id="unset-admin" class="btn btn-primary">unset admin</a>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Link Noticia">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Link imagem">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Game Tag">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Corpo da noticia">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Autor">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Data">
                            </div>
                            <a id="unset-admin" class="btn btn-primary">Criar noticia</a>
                        </div>
                    </div>
                <div>
            </div>
        </div>
	</div>
</body>
</html>