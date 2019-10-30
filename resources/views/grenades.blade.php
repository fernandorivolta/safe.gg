<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel='stylesheet' type='text/css' href='/css/grenades.css'>
    <script src="/js/grenades.js"></script>
</head>

<body>
    @include('lib.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark z-card mb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row justify-content-md-center mt-2">
                                <span class="gray-font subtitle">CS:GO</span>
                            </div>
                            <div class="row justify-content-md-center mb-3">
                                <h2 class="title text-uppercase">GRANADAS</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container" id="contentContainer">
                            <div id="mapChoose">
                                <div class="col-md-12">
                                    <div class="row p-0 mb-3">
                                        <div class="voltar" id="back">
                                            <i class="fas fa-chevron-circle-left" ></i>
                                            <span>VOLTAR</span>
                                        </div>
                                    </div>
                                    <div id="mapSelect">
                                        <div class="row mb-5">
                                            <div class="col p-0 pr-1">
                                                <div onclick="selectMap('Cache')" class="card map-card"
                                                    style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/csgomaps/cacheCapa.jpg'); background-size: cover;background-repeat: no-repeat;background-position: 75%;">
                                                    <div class="row h-100 align-items-end">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <span class="font-weight-bold gray-font ">CS:GO</span>
                                                            </div>
                                                            <div class="row mb-5">
                                                                <span
                                                                    class="font-weight-bold white-font map-name">CACHE</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col p-0 pr-1">
                                                <div onclick="selectMap('Train')" class="card map-card"
                                                    style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/csgomaps/trainCapa.jpg'); background-size: cover;background-repeat: no-repeat;background-position: 75%;">
                                                    <div class="row h-100 align-items-end">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <span class="font-weight-bold gray-font ">CS:GO</span>
                                                            </div>
                                                            <div class="row mb-5">
                                                                <span
                                                                    class="font-weight-bold white-font map-name">TRAIN</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col p-0 pr-1">
                                                <div onclick="selectMap('Mirage')" class="card map-card"
                                                    style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/csgomaps/mirageCapa.jpg'); background-size: cover;background-repeat: no-repeat;background-position: 75%;">
                                                    <div class="row h-100 align-items-end">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <span class="font-weight-bold gray-font ">CS:GO</span>
                                                            </div>
                                                            <div class="row mb-5">
                                                                <span
                                                                    class="font-weight-bold white-font map-name">MIRAGE</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col p-0 pr-1">
                                                <div onclick="selectMap('Overpass')" class="card map-card"
                                                    style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/csgomaps/overpassCapa.jpg'); background-size: cover;background-repeat: no-repeat;background-position: 75%;">
                                                    <div class="row h-100 align-items-end">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <span class="font-weight-bold gray-font ">CS:GO</span>
                                                            </div>
                                                            <div class="row mb-5">
                                                                <span
                                                                    class="font-weight-bold white-font map-name">OVERPASS</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col p-0 pr-1">
                                                <div onclick="selectMap('Dust2')" class="card map-card"
                                                    style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/csgomaps/dustCapa.jpg'); background-size: cover;background-repeat: no-repeat;background-position: 75%;">
                                                    <div class="row h-100 align-items-end">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <span class="font-weight-bold gray-font">CS:GO</span>
                                                            </div>
                                                            <div class="row mb-5">
                                                                <span
                                                                    class="font-weight-bold white-font map-name">DUST2</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col p-0">
                                                <div onclick="selectMap('Inferno')" class="card map-card"
                                                    style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/csgomaps/infernoCapa.jpg'); background-size: cover;background-repeat: no-repeat;background-position: 75%;">
                                                    <div class="row h-100 align-items-end">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <span class="font-weight-bold gray-font ">CS:GO</span>
                                                            </div>
                                                            <div class="row mb-5">
                                                                <span
                                                                    class="font-weight-bold white-font map-name">INFERNO</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="mapRow" class="row">
                                    <div id="mapCol" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-5 p-0"
                                        style="display:none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
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
</body>

</html>