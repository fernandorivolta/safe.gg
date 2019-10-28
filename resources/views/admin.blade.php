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
                <div class="col-md-12 content">
                    <div class="row">
                        <span class="header-name m-2">RESUMO</span>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-user p-3">
                                <div class="row">
                                    <div class="col">
                                        <span class="gray-font">USUÁRIOS</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span id="total-users" class="statistics-body font-weight-bolder">100</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-like p-3">
                                <div class="row">
                                    <div class="col">
                                        <span class="gray-font">LIKES</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span id="total-likes" class="statistics-body font-weight-bolder">100</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-comment p-3">
                                <div class="row">
                                    <div class="col">
                                        <span class="gray-font">COMENTÁRIOS</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span id="total-comments" class="statistics-body font-weight-bolder">100</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt">
                        <div class="col-md-6">
                            <div class="card p-3 card-h">
                                <div class="row justify-content-center">
                                    <span class="gray-font font-weight-bolder m-1">GAMES <i
                                            class="fas fa-gamepad"></i></span>

                                </div>
                                <div class="game-data"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-3 card-h card-pro">
                                <div class="row justify-content-center">
                                    <span class="gray-font font-weight-bolder m-1">PROPLAYER</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row justify-content-end">
                                            <span class="gray-font f-small font-weight-bold mr">NOME</span>
                                            <span id="pro-name"
                                                class="green-font f-small font-weight-bolder">BRTT</span>
                                        </div>
                                        <div class="row justify-content-end">
                                            <span class="gray-font f-small font-weight-bold mr">TIME</span>
                                            <span id="pro-team"
                                                class="green-font f-small font-weight-bolder">FLAMENGO</span>
                                        </div>
                                        <div class="row justify-content-end">
                                            <span class="gray-font f-small font-weight-bold mr">SEGUIDORES</span>
                                            <span id="pro-followers"
                                                class="green-font f-small font-weight-bolder">100</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>