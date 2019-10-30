<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel='stylesheet' type='text/css' href='/css/navbar.css'>
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
    <link rel='stylesheet' type='text/css' href='/css/profilechampion.css'>
</head>

<body>
    @include('lib.navbar')
    <div class="container">
        <div class="row m-5">
            <div class="card bg-dark pb-5">
                <div class="col-md-12 p-0">
                    <div class="row champion-splash align-items-end"
                        style="background-image: url('/images/splash/{{$champion->name}}_0.jpg')">
                        <div class="col p-0">
                            <div class="row champion-name-bg">
                                <div class="mx-auto">
                                    <div class="row">
                                        <span class="gray-font champion-name mx-auto font-shadow">{{$champion->name}}</span>
                                    </div>
                                    <div class="row">
                                        <span
                                            class="orange-font champion-sub-name mx-auto">{{$champion->subname}}</span>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row champion-about">
                        <div class="col-md-3">
                            <div class="champion-skills card bg-dark">
                                <div class="row mb-3">
                                    <div class="col-md-12 p-2 my-auto">
                                        <div class="row justify-content-center mb-2">
                                            <img class="img-fluid rounded-circle" src="{{$champion->passive_img}}" alt="">
                                        </div>
                                        <div class="row">
                                            <span class="gray-font skills">{{$champion->passive}}</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12 p-2 my-auto">
                                        <div class="row justify-content-center mb-2">
                                            <img class="img-fluid rounded-circle" src="{{$champion->skill_q_img}}" alt="">
                                        </div>
                                        <div class="row">
                                            <span class="gray-font skills">{{$champion->skill_q}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 p-2 my-auto">
                                        <div class="row justify-content-center mb-2">
                                            <img class="img-fluid rounded-circle" src="{{$champion->skill_w_img}}" alt="">
                                        </div>
                                        <div class="row">
                                            <span class="gray-font skills">{{$champion->skill_w}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="champion-history card bg-dark">
                                <span class="text-light">
                                    {{$champion->lore}}
                                </span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="champion-skills card bg-dark">
                                <div class="row mb-3">
                                    <div class="col-md-12 p-2 my-auto">
                                        <div class="row justify-content-center mb-2">
                                            <img class="img-fluid rounded-circle" src="{{$champion->skill_e_img}}" alt="">
                                        </div>
                                        <div class="row">
                                            <span class="gray-font skills">{{$champion->skill_e}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 p-2 my-auto">
                                        <div class="row justify-content-center mb-2">
                                            <img class="img-fluid rounded-circle" src="{{$champion->skill_r_img}}" alt="">
                                        </div>
                                        <div class="row">
                                            <span class="gray-font skills">{{$champion->skill_r}}</span>
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