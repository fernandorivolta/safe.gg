<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel='stylesheet' type='text/css' href='/css/navbar.css'>
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
    <link rel='stylesheet' type='text/css' href='/css/grenades.css'>
    <script src="/js/grenades.js"></script>
</head>

<body>
    @include('lib.navbar')
    <div class="container">
        <div class="row">
            <div class="modal fade" id="modal-granada" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 id="modal-title" class="modal-title">Video guia de granada</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                    allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contentContainer" class="container">
                <div id="mapChoose">
                    <div class="col-md-12">
                        <div id="back"><i class="fas fa-angle-double-left voltar"></i></div>
                        <div id="mapSelect">
                        <div class="row">
                            <div class="col-md-4">
                                <div onclick="selectMap('Cache')" class="imgContainer">
                                    <a class="thumbnail" href="">
                                        <img class="img-fluid" src="/images/csgomaps/cacheCapa.jpg">
                                    </a>
                                    <div class="centered">
                                        <a class="noLinkLook" href="">
                                            <p class="h1">Cache</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div onclick="selectMap('Train')" class="imgContainer">
                                    <a class="thumbnail" href="">
                                        <img class="img-fluid" src="/images/csgomaps/trainCapa.jpg">
                                    </a>
                                    <div class="centered">
                                        <a class="noLinkLook" href="">
                                            <p class="h1">Train</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div onclick="selectMap('Mirage')" class="imgContainer">
                                    <a class="thumbnail" href="">
                                        <img class="img-fluid" src="/images/csgomaps/mirageCapa.jpg">
                                    </a>
                                    <div class="centered">
                                        <a class="noLinkLook" href="">
                                            <p class="h1">Mirage</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div onclick="selectMap('Overpass')" class="imgContainer">
                                    <a class="thumbnail" href="">
                                        <img class="img-fluid" src="/images/csgomaps/overpassCapa.jpg">
                                    </a>
                                    <div class="centered">
                                        <a class="noLinkLook" href="">
                                            <p class="h1">Overpass</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div onclick="selectMap('Dust2')" class="imgContainer">
                                    <a class="thumbnail" href="">
                                        <img class="img-fluid" src="/images/csgomaps/dustCapa.jpg">
                                    </a>
                                    <div class="centered">
                                        <a class="noLinkLook" href="">
                                            <p class="h1">Dust 2</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div onclick="selectMap('Inferno')" class="imgContainer">
                                    <a class="thumbnail" href="">
                                        <img class="img-fluid" src="/images/csgomaps/infernoCapa.jpg">
                                    </a>
                                    <div class="centered">
                                        <a class="noLinkLook" href="">
                                            <p class="h1">Inferno</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div id="mapRow" class="row">
                        <div style="display:none" id="mapCol" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>