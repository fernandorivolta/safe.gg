<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel="stylesheet" href="/css/admin.css">
    <script src="js/admin.js"></script>
</head>

<body>
    @include('lib.navbar')
    <div class="row">
        <div class="col-md-2 side-bar shadow-lg">
            <div class="row bt p-2 justify-content-center side-bar-item">
                <a class="side-bar-item-link" id="noticia" href="#"><i class="fas fa-newspaper"></i> NOTÍCIAS</a>
            </div>
            <div class="row bt p-2 justify-content-center side-bar-item">
                <div class="dropdown">
                    <a class="side-bar-item-link" href="#" class="dropdown-toggle" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-headset"></i> PROPLAYERS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" id="csgo-proplayer" href="#">CS:GO</a>
                        <a class="dropdown-item" id="lol-proplayer" href="#">LEAGUE OF LEGENDS</a>
                    </div>
                </div>
            </div>
            <div class="row p-2 justify-content-center side-bar-item">
                <a class="side-bar-item-link" id="usuarios" href="#"><i class="fas fa-users"></i> USÚARIOS</a>
            </div>
        </div>
        <div class="col-md-10 content-col">
            <div class="card bg-dark p-3 m-5">
                <div class="col-md-12 content"></div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
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
                                <input type="text" id="news-link" class="form-control" placeholder="Link Noticia">
                            </div>
                            <div class="col">
                                <input type="text" id="news-img" class="form-control" placeholder="Link imagem">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" id="news-tag" class="form-control" placeholder="Game Tag">
                            </div>
                            <div class="col">
                                <input type="text" id="news-title" class="form-control" placeholder="Titulo">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" id="news-body" class="form-control" placeholder="Corpo da noticia">
                            </div>
                            <div class="col">
                                <input type="text" id="news-author" class="form-control" placeholder="Autor">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" id="news-date" class="form-control" placeholder="Data">
                            </div>
                            <a id="create-news" class="btn btn-primary">Criar noticia</a>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" id="procs-roundcontribution" class="form-control" placeholder="Contribuição por round">
                            </div>
                            <div class="col">
                                <input type="text" id="procs-deathperround" class="form-control" placeholder="Mortes por round">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" id="procs-mapsplayed" class="form-control" placeholder="Mapas jogados">
                            </div>
                            <div class="col">
                                <input type="text" id="procs-kddiff" class="form-control" placeholder="Diferença de KD">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" id="procs-team" class="form-control" placeholder="Time">
                            </div>
                            <div class="col">
                                <input type="text" id="procs-age" class="form-control" placeholder="Idade">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" id="procs-nacionality" class="form-control" placeholder="Nacionalidade">
                            </div>
                            <div class="col">
                                <input type="text" id="procs-nick" class="form-control" placeholder="Nick">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" id="procs-steamlink" class="form-control" placeholder="Steam Link">
                            </div>     
                            <div class="col">
                                <input type="text" id="procs-proplayername" class="form-control" placeholder="Steam Link">
                            </div>                              
                            <a id="create-procs" class="btn btn-primary">Criar Proplayer de cs:go</a>
                        </div>
                    </div>
                <div>
            </div>
        </div>
	</div> -->
</body>

</html>