<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel='stylesheet' type='text/css' href='/css/editprofile.css'>
    <script src="js/editprofile.js"></script>
</head>

<body>
    @include('lib.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark p-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <img class="user-photo" id="user-photo"
                                    src="https://nexus.leagueoflegends.com/wp-content/uploads/2018/11/6LOL-GAME.INFO_.850x1000-px_c3x0jb1reydcpqtw6xtu.jpg"
                                    alt="">
                            </div>

                        </div>
                        <div class="col-md-8">
                            <div class="row name-header">
                                <h5 class="white-font" id="username"></h5>
                            </div>
                            <div class="row p-1">
                                <form>
                                    <div class="form-group row">
                                        <label for="nome-completo" class="col-md-4 col-form-label">Nome</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control-plaintext w-full" id="nome-completo"
                                                value="email@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nome-completo" class="col-md-4 col-form-label">Nome de
                                            Invocador</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control-plaintext w-full" id="summonerName"
                                                value="email@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nome-completo" class="col-md-4 col-form-label">Steam</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control-plaintext w-full" id="steam"
                                                value="email@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nome-completo" class="col-md-4 col-form-label">Icone</label>
                                        <div class="col-md-8">
                                            <button type="button" class="btn photo-change" data-toggle="modal"
                                                data-target="#modal-icone">
                                                <i class="fas fa-camera gray-font" style="height: 200%;"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="editar-dados">Concluir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Icone Crop  -->
    <div class="modal fade" id="modal-icone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Escolha seu Icone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="/user/icon">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <!--Crop-->
                        <div class="image-editor">
                            <input type="file" class="cropit-image-input">
                            <div class="cropit-preview"></div>
                            <div class="row">
                                <input type="range" class="cropit-image-zoom-input slider mx-auto">
                            </div>
                            <input type="hidden" name="fileToUpload" id="fileToUpload" class="hidden-image-data"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" id="icon-button" class="btn btn-primary export">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!---->
</body>

</html>
