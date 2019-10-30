<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel='stylesheet' type='text/css' href='/css/navbar.css'>
    <link rel='stylesheet' type='text/css' href='/css/main.css'>
    <link rel='stylesheet' type='text/css' href='/css/findplayer.css'>
    <script src='/js/findplayer.js'></script>
</head>

<body>
    @include('lib.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark" style="width: 100%;">
                    <div class="row">
                        <div class="col-md-12 p-0 m-0 col-select">

                            <div class="select-text font-shadow text-center">
                                <span class="gray-font f-subtitle">ESCOLHA UM</span> <br>
                                <span class="f-title">GAME</span>
                            </div>

                            <div class="row">
                                <div class="col-md-6 game-side game-lol">
                                    <div class="row p-5 h-100 justify-content-end align-items-center">
                                        <span class="lol-name gray-font title">LEAGUE OF LEGENDS</span>
                                    </div>
                                </div>
                                <div class="col-md-6 game-side game-cs">
                                    <div class="row p-5 h-100 justify-content-start align-items-center">
                                        <span class="cs-name gray-font title">CS:GO</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- <div class="grid" id="menu" >
                            <figure id="csgo-image" class="effect-honey">
                                <img src="/images/background/mibr-coldzera.png" alt="img04"/>
                                <figcaption>
                                    <h2>CS: <span>GO</span></h2>
                                    <a href="#">Encontre agora</a>
                                </figcaption>			
                            </figure>
                            <figure id="lol-image" class="effect-honey">
                                <img src="/images/background/flamengo-cblol-2019.jpg" alt="img05"/>
                                <figcaption>
                                    <h2>League of <span>Legends</span></h2>
                                    <a href="#">View more</a>
                                </figcaption>			
                            </figure>
                        </div> -->
                        <div id="lol-info" class="col-md-12 white-font" style="display:none;">
                            <div class="row">
                                <div class="col align-self-start">
                                    <div class="text-left white-font">
                                        <i id="lol-voltar" class="fas fa-angle-double-left voltar"></i>
                                    </div>
                                </div>
                            </div>
                            <div id="players-lol"></div>
                        </div>
                        <div id="csgo-info" class="col-md-12 white-font" style="display:none;">
                            <div class="row">
                                <div class="col align-self-start">
                                    <div class="text-left white-font">
                                        <i id="csgo-voltar" class="fas fa-angle-double-left voltar"></i>
                                    </div>
                                </div>
                            </div>
                            <div id="players-cs"></div>
                        </div>
                        <div id="csgo-find" class="col-md-12">
                            <div class="row">
                                <div class="col align-self-start">
                                    <div class="text-left white-font">
                                        <i class="fas fa-angle-double-left voltar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center white-font title">
                                    FAÇA SEU CADASTRO
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 white-font">
                                    <form class="form-container">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="funcao">Função</label>
                                                    <select class="form-control" id="funcao">
                                                        <option>Entry Fragger</option>
                                                        <option>Awp</option>
                                                        <option>Support</option>
                                                        <option>Rifler</option>
                                                        <option>Lurker</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="patente">Patente</label>
                                                    <select class="form-control" id="patente">
                                                        <option>Prata</option>
                                                        <option>Ouro</option>
                                                        <option>Ak</option>
                                                        <option>Xerife</option>
                                                        <option>Aguia</option>
                                                        <option>Supremo</option>
                                                        <option>Global</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="col-feedback" class="form-row" style="margin-bottom:14px;">
                                            <div class="col">
                                                <label for="steam-url">Steam URL
                                                    <small id="feedback" class="red-font" style="display:none;">
                                                        <span class="red-font"><i class="fas fa-exclamation-circle"></i>
                                                            Preencha este campo.</span>
                                                    </small>
                                                </label>
                                                <input type="text" class="form-control" id="steam-url"
                                                    placeholder="https://steamcommunity.com/profiles/76561198113326302">

                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="disponibilidade">Disponibilidade</label>
                                                    <select class="form-control" id="disponibilidade">
                                                        <option>Manha</option>
                                                        <option>Tarde</option>
                                                        <option>Noite</option>
                                                        <option>Madrugada</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col text-center">
                                                <a onClick="cadastre_csgo()" class="btn btn-primary">Cadastre</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lol-find" class="col-md-12 white-font">
                            <div class="row">
                                <div class="col align-self-start">
                                    <div class="text-left white-font">
                                        <i class="fas fa-angle-double-left voltar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center white-font title">
                                    FAÇA SEU CADASTRO
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 white-font">
                                    <form class="form-container">
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="funcao">Posição</label>
                                                    <select class="form-control" id="posicao">
                                                        <option>Top</option>
                                                        <option>Jng</option>
                                                        <option>Mid</option>
                                                        <option>Adc</option>
                                                        <option>Sup</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="patente">Elo</label>
                                                    <select class="form-control" id="patente">
                                                        <option>Ferro</option>
                                                        <option>Bronze</option>
                                                        <option>Prata</option>
                                                        <option>Ouro</option>
                                                        <option>Platina</option>
                                                        <option>Diamante</option>
                                                        <option>Mestre</option>
                                                        <option>Grão-Mestre</option>
                                                        <option>Challenger</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="col-feedback" class="form-row" style="margin-bottom:14px;">
                                            <div class="col">
                                                <label for="summonername">Summoner Name</label>
                                                <input type="text" class="form-control" id="summonername" readonly>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="disponibilidade">Disponibilidade</label>
                                                    <select class="form-control" id="disponibilidade">
                                                        <option>Manha</option>
                                                        <option>Tarde</option>
                                                        <option>Noite</option>
                                                        <option>Madrugada</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col text-center">
                                                <a onClick="cadastre_lol()" class="btn btn-primary">Cadastre</a>
                                            </div>
                                        </div>
                                    </form>
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