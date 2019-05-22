<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    @include('lib.head');
  <link rel='stylesheet' type='text/css' href='/css/main.css'>
  <link rel='stylesheet' type='text/css' href='/css/loginIndex.css'>
  <script type="text/javascript" src="/js/loginIndex.js"></script>
</head>
<body style="background-color:  #1d0149;">
  <div class="container">
    <div class="justify-content-center align-self-center col-md-12 row">
      <div class="login-form-1 animated fadeIn">
          <form id="login-form" class="text-left" action="/user/login" method="post" onsubmit="return validateForm();">
            {{ csrf_field() }}
            <img class="img-fluid" src="/images/icons/safe_gg-logo-nome-branco-versao-2.png">
            <div class="login-form-main-message white-font text-center animated fadeIn"><h4 class="line white-font">LOGIN</h4></div>
            <div class="main-login-form">
              <div class="login-group">
                <div class="form-group">
                  <label for="username" class="sr-only">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="User">
                </div>
                <div class="form-group">
                  <label for="password" class="sr-only">Senha</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                </div>
              </div>
              <button type="submit" class="btn btn-block btn-light">Entrar</button>
              <button type="button" class="btn btn-block btn-outline-light" id="btn-create-account"><i class="fas fa-user-plus"></i> Crie uma conta</button>
              <button type="button" class="btn btn-block btn-outline-light" id="back-home"><i class="fas fa-chevron-left"></i> Voltar</button>
            </div>
          </form>
        </div>
    </div>
  </div>
</body>
</html>
