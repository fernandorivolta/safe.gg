<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel='stylesheet' type='text/css' href='/css/navbar.css'>
</head>

<body>
    @include('lib.navbar')
    <div class="container">
        <div class="row">
            <div class="card card-champion-table" style="width: 100%;">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h2 class="white-font" style="margin-top:16px">CHAMPIONS</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mx-auto">
                                    <input class="form-control mr-sm-2" id="championInput" onkeyup="searchChampion()"
                                    type="text" name="" placeholder="Procure o campeão"
                                    style="width: 40%;">
                                </div>
                            </div>
                            <table class="table text-center" id="championTable">
                                @foreach ($list_champions as $champion)
                                <tr class='championsList' style='display: inline-block; list-style-type: none;'>
                                    <td>
                                        <div class="hovereffect">
                                            <img class="img-fluid rounded" src="{{$champion['_path']}}" alt="">
                                            <div class="overlay">
																							<h2>{{$champion['_name']}}</h2>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>