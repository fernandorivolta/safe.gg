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
                        <div class="col-md-7">
                            <div class="row">
                                <div class="mx-auto">
                                    <h2 class="title">Campeões</h2>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($champions as $i=>$champion)
                                    @if ($i % 3 == 0)
                                        </div>
                                        <div class="row"> 
                                    @endif
                                        <div class="col-md-4 champions" style="background-image: url('/images/splash/{{$champion}}_0.jpg');"></div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="row">
                                <div class="mx-auto">
                                    <h2 class="title">Tier List</h2>
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