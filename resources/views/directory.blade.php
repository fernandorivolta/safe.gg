<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel='stylesheet' type='text/css' href='/css/directory.css'>
    <link rel='stylesheet' type='text/css' href='/css/loading.css'>
    <link rel='stylesheet' type='text/css' href='/css/loading-btn.css'>
    <script src="/js/data-api.js"></script>
</head>

<body>
    @include('lib.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark p-2">
                    <div class="row justify-content-md-center mt-2">
                        <span class="gray-font">Games</span>
                    </div>
                    <div class="row justify-content-md-center mb-3">
                        <h2 class="title">PROCURAR</h2>
                    </div>
                    <div class="row justify-content-md-center">
                        @foreach ($games as $i=>$game)
                        @if ($i % 4 == 0)
                    </div>
                    <div class="row justify-content-md-center">
                        @endif
                        <div class="col p-0 mr-3 mb-3">
                            <div class="card card-game pb-3"
                                style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{$game->img}}); background-size: cover;background-repeat: no-repeat;background-position: 75%;">
                                <div class="row h-100 align-items-end">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="bg-dark rounded-pill shadow gray-font">
                                                <span class="m-2">{{$game->category}}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="text-left m-2 white-font font-weight-bold game-name">
                                                <span>{{$game->game}}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div>
                                                @if (in_array($game->id, $followed_games))
                                                <a onclick="unfollow_game({{$game->id}}, $(this))"
                                                    class="btn btn-outline-primary btn-following ld-ext-right">Seguindo
                                                    <div class="ld ld-ring ld-spin-fast"></div></a>
                                                @else
                                                <a onclick="follow_game({{$game->id}}, $(this))"
                                                    class="btn btn-follow ld-ext-right">Seguir<div
                                                        class="ld ld-ring ld-spin-fast"></div></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- <div class="row">
                                    <div class="col-md-12">
                                        <div class="thumbnail">
                                            <img src={{$game->img}} class="card-img-top">
                                            <div class="caption">
                                                <div class="row" style="margin: 5px;">
                                                    <div class="col-md-6 my-auto text-center">
                                                        <span class="card-text white-font text-center">{{$game->tag}}</span>
                                                    </div>
                                                    <div class="col-md-6 my-auto">
                                                        @if (in_array($game->id, $followed_games))
                                                            <a onclick="unfollow_game({{$game->id}}, $(this))" 
                                                            class="btn btn-outline-primary btn-follow ld-ext-right">Seguindo<div class="ld ld-ring ld-spin-fast"></div></a>
                                                        @else
                                                            <a onclick="follow_game({{$game->id}}, $(this))"
                                                            class="btn btn-outline-primary btn-following ld-ext-right">Seguir<div class="ld ld-ring ld-spin-fast"></div></a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>