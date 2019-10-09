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
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="http://placehold.it/350x200" alt="">
                                        <div class="overlay">
                                           <h2>Hover effect 3</h2>
                                           <a class="info" href="#">link here</a>
                                        </div>
                                    </div>
                                </div>
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