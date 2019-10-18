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
                            <div class="row">
                                <div class="mx-auto my-auto">
                                    <h2 class="title">CAMPEÕES</h2>
                                    <hr class="text-light">
                                </div>
                            </div>
                            <div class="row justify-content-md-center">

                                @foreach ($champions as $i=>$champion)
                                    @if ($i % 3 == 0 and $i != 0)
                                        </div>
                                        <div class="row justify-content-md-center"> 
                                    @endif
                                    <div class="col-md-3 m-2">
                                            <div class="card bg-dark text-white champions" onclick="champion_page('{{$champion}}')">
                                                <img class="card-img" src="/images/splash/{{$champion}}_0.jpg" alt="Card image">
                                                <div class="card-img-overlay">
                                                    <h5 class="card-title">{{$champion}}</h5>
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