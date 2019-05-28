<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel='stylesheet' type="text/css" href="/css/championTable.css">
    <link rel='stylesheet' type='text/css' href='/css/navbar.css'>
    <script type="text/javascript" src="/js/championTable.js"></script>
    <link rel='stylesheet' type='text/css' href='/css/profilePro.css'>
</head>

<body>
    @include('lib.navbar')
    <div class="container">
        <div class="row">
            <div class="card card-champion-table" style="width: 100%;">
                <div class="col-md-12 text-center">
                    <div class="row text-center">
                        <div class="col-md-12 center-block">
                            <h2 class="white-font" style="margin-top:16px">CHAMPIONS</h2>
                            <input class="form-control mr-sm-2" id="championInput" onkeyup="searchChampion()"
                                type="text" name="" placeholder="Procure o campeão"
                                style="width: 40%; margin-bottom: 5px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
  if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
  }
?>
