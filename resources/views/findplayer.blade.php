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
                        <div class="grid" id="menu" >
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
                                <div class="col-md-12 text-center white-font">
                                    FAÇA SEU CADASTRO
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 white-font">
                                    <form>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group">
                                                  <label for="exampleFormControlSelect1">Função</label>
                                                  <select class="form-control" id="exampleFormControlSelect1">
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
                                                  <label for="exampleFormControlSelect1">Patente</label>
                                                  <select class="form-control" id="exampleFormControlSelect1">
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
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="steam-url">Steam URL</label>
                                                <input type="text" class="form-control" id="steam-url" placeholder="https://steamcommunity.com/profiles/76561198113326302" required>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                  <label for="exampleFormControlSelect1">Disponibilidade</label>
                                                  <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>Manhã</option>
                                                    <option>Tarde</option>
                                                    <option>Noite</option>
                                                    <option>Madrugada</option>
                                                  </select>
                                                </div>
                                            </div>
                                        </div>    
                                        <div class="form-row">
                                            <div class="col text-center">
                                                <button type="submit" class="btn btn-primary">Cadastre</button>
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
                                <div class="col align-self-center">
                                    LOL
                                </div>
                                <div class="col align-self-end">
                                    aa
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