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
</body>

</html>