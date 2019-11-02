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
                <div class="card bg-dark card-choose">
                    <div class="row">
                        <div class="col-md-12 p-0 m-0 col-select">
                            <div class="select-text font-shadow text-center">
                                <span class="gray-font f-subtitle">ESCOLHA UM</span> <br>
                                <span class="f-title">GAME</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6 game-side game-lol">
                                    <div class="row p-5 h-100 justify-content-end align-items-center">
                                        <span class="lol-name font-shadow gray-font text-right"><span
                                                class="f-subtitle-two">LEAGUE</span> <span class="f-subtitle">OF</span>
                                            <br>LEGENDS</span>
                                    </div>
                                </div>
                                <div class="col-md-6 game-side game-cs">
                                    <div class="row p-5 h-100 justify-content-start align-items-center">
                                        <span class="cs-name font-shadow gray-font">CS:GO</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card-form-csgo" style="display:none;">
                    <div class="row row-form justify-content-center align-items-center">
                        <form class="card bg-dark p-2">
                            <div class="row justify-content-center m-5">
                                <img class="form-header" src="/images/icons/csgo-logo.png" alt="">
                            </div>
                            <div class="row m-2">
                                <label class="form-label gray-font" for="funcao">Função</label>
                                <select class="form-control form-input" id="funcao">
                                    <option>Entry Fragger</option>
                                    <option>Awp</option>
                                    <option>Support</option>
                                    <option>Rifler</option>
                                    <option>Lurker</option>
                                </select>
                            </div>
                            <div class="row m-2">
                                <label class="form-label gray-font" for="patente">Patente</label>
                                <select class="form-control form-input" id="patente">
                                    <option>Prata</option>
                                    <option>Ouro</option>
                                    <option>Ak</option>
                                    <option>Xerife</option>
                                    <option>Aguia</option>
                                    <option>Supremo</option>
                                    <option>Global</option>
                                </select>
                            </div>
                            <div class="row m-2">
                                <label class="form-label gray-font" for="steam-url">Steam URL
                                </label>
                                <input required type="text" class="form-control form-input" id="steam-url"
                                    placeholder="https://steamcommunity.com/profiles/76561198113326302">
                            </div>
                            <div class="row m-2">
                                <label class="form-label gray-font" for="disponibilidade">Disponibilidade</label>
                                <select class="form-control form-input" id="disponibilidade">
                                    <option>Manha</option>
                                    <option>Tarde</option>
                                    <option>Noite</option>
                                    <option>Madrugada</option>
                                </select>
                            </div>
                            <div class="row justify-content-center m-2">
                                <button onclick="cadastre_csgo()" class="btn btn-primary">Cadastre</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-form-lol" style="display:none;">
                    <div class="row row-form justify-content-center align-items-center">
                        <form class="card bg-dark p-2">
                            <div class="row justify-content-center m-5">
                                <img class="form-header" src="/images/icons/lol-logo.png" alt="">
                            </div>
                            <div class="row m-2">
                                <label class="form-label gray-font" for="funcao">Posição</label>
                                <select class="form-control form-input" id="posicao">
                                    <option>Top</option>
                                    <option>Jng</option>
                                    <option>Mid</option>
                                    <option>Adc</option>
                                    <option>Sup</option>
                                </select>
                            </div>
                            <div class="row m-2">
                                <label class="form-label gray-font" for="patente">Elo</label>
                                <select class="form-control form-input" id="patente">
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
                            <div class="row m-2">
                                <label class="form-label gray-font" for="summonername">Summoner Name</label>
                                <input type="text" class="form-control form-input" id="summonername" readonly>
                            </div>
                            <div class="row m-2">
                                <label class="form-label gray-font" for="disponibilidade">Disponibilidade</label>
                                <select class="form-control form-input" id="disponibilidade">
                                    <option>Manha</option>
                                    <option>Tarde</option>
                                    <option>Noite</option>
                                    <option>Madrugada</option>
                                </select>
                            </div>
                            <div class="row justify-content-center m-2">
                                <button onclick="cadastre_lol()" class="btn btn-primary">Cadastre</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card bg-dark pt-3 pb-3 users-list" style="display: none">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row justify-content-md-center mt-2">
                                <span class="gray-font subtitle">ENCONTRE</span>
                            </div>
                            <div class="row justify-content-md-center mb-3">
                                <h2 class="title text-uppercase">USUÁRIOS DISPONÍVEIS</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 list">
                            

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