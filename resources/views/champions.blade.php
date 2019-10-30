<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel='stylesheet' type="text/css" href="/css/champions.css">
    <link rel='stylesheet' type='text/css' href='/css/navbar.css'>
    <script type="text/javascript" src="/js/champions.js"></script>
</head>

<body>
    @include('lib.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row justify-content-md-center mt-2">
                                <span class="gray-font">League of Legends</span>
                            </div>
                            <div class="row justify-content-md-center mb-3">
                                <h2 class="title">CAMPEÕES</h2>
                            </div>
                            <div class="row justify-content-md-center">

                                @foreach ($champions as $i=>$champion)
                                @if ($i % 4 == 0 and $i != 0)
                            </div>
                            <div class="row justify-content-md-center">
                                @endif
                                <div class="col p-0 mr-3 mb-3">
                                    <div class="card bg-dark text-white card-champion"
                                        style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/splash/{{$champion->name}}_0.jpg'); background-size: cover;background-repeat: no-repeat;background-position: 75%;"
                                        onclick="champion_page('{{$champion->name}}')">
                                        <div class="row h-100 align-items-end justify-content-md-center">
                                            <div class="col-md-12">
                                                <div class="card bg-dark m-4 shadow">
                                                    <div class="row justify-content-md-center">
                                                        <span
                                                            class="mt-2 subname-font gray-font">{{$champion->subname}}</span>
                                                    </div>
                                                    <div class="row justify-content-md-center">
                                                        <span
                                                            class="mb-2 name-font orange-font text-uppercase font-weight-bold">{{$champion->name}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>