<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel='stylesheet' type='text/css' href='/css/profilepro_cs.css'>
</head>

<body>
    @include('lib.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark mt-2">
                    <div class="row align-items-center">
                        <div class="col-md-1">
                            <a href="/cs/proplayers"><i class="fas fa-arrow-circle-left f-back"></i></a>
                        </div>
                        <div class="col-md-11">
                            <div class="row justify-content-md-center mt-2">
                                <span class="gray-font subtitle">CS:GO / PROPLAYERS</span>
                            </div>
                            <div class="row justify-content-md-center mb-3">
                                <h2 class="title text-uppercase">{{$proplayer->nick}}</h2>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="card bg-dark mt-3"
                    style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/csgo_teams/{{$proplayer->team}}.svg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                    <div class="row align-items-center pr-5">
                        <div class="col-md-5">
                            <img class="img-fluid" src="/images/proplayercs/{{strtolower($proplayer->nick)}}.png"
                                alt="">
                        </div>
                        <div class="col-md-7 pro-info">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="white-font item-font">{{$proplayer->proplayername}}</span>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="item-title mr-2">
                                            <span class="gray-font">TIME</span>
                                            <span class="white-font text-uppercase">{{$proplayer->team}}</span>
                                        </div>

                                        <div class="item-title mr-2">
                                            <span class="gray-font">IDADE</span>
                                            <span class="white-font">{{$proplayer->age}} ANOS</span>
                                        </div>
                                        <div class="white-font item-title">
                                            <span class="gray-font">NACIONALIDADE</span>
                                            <span class="white-font text-uppercase">{{$proplayer->nationality}}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="row">
                                        <span class="gray-font item-title">CONTRIBUIÇÃO POR ROUND</span>
                                    </div>
                                    <div class="row">
                                        <span class="white-font item-font">{{$proplayer->roundcontribution}}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <span class="gray-font item-title">MORTES POR ROUND</span>
                                    </div>
                                    <div class="row">
                                        <span class="white-font item-font">{{$proplayer->deathperround}}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <span class="gray-font item-title">MAPAS JOGADOS</span>
                                    </div>
                                    <div class="row">
                                        <span class="white-font item-font">{{$proplayer->mapsplayed}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="row">
                                        <span class="gray-font item-title">K/D DIFFERENCE</span>
                                    </div>
                                    <div class="row">
                                        <span class="white-font item-font">{{$proplayer->kddiff}}</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <span class="gray-font item-title">STEAM</span>
                                    </div>
                                    <div class="row">
                                        <a href="{{$proplayer->steamlink}}" class="white-font item-font">PERFIL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <body>