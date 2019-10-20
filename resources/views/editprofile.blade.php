<!DOCTYPE html>
<html>

<head>
    @include('lib.head')
    <link rel='stylesheet' type='text/css' href='/css/editprofile.css'>
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
                                <img class="user-photo"
                                    src="https://nexus.leagueoflegends.com/wp-content/uploads/2018/11/6LOL-GAME.INFO_.850x1000-px_c3x0jb1reydcpqtw6xtu.jpg"
                                    alt="">
                            </div>

                        </div>
                        <div class="col-md-8">
                            <div class="row name-header">
                                <h5 class="white-font">SAMUEL ALVES</h5>
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
                                        <label for="nome-completo" class="col-md-4 col-form-label">Nome de Invocador</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control-plaintext w-full" id="nome-completo"
                                                value="email@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nome-completo" class="col-md-4 col-form-label">Steam</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control-plaintext w-full" id="nome-completo"
                                                value="email@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nome-completo" class="col-md-4 col-form-label">Icone</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control-plaintext w-full" id="nome-completo"
                                                value="email@example.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nome-completo" class="col-md-4 col-form-label">Capa</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control-plaintext w-full" id="nome-completo"
                                                value="email@example.com">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Concluir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>