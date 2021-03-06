<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  @include('lib.head')
  <link rel='stylesheet' type='text/css' href='/css/main.css'>
  <link rel='stylesheet' type='text/css' href='/css/login-index.css'>
</head>
<body>
  @if (isset($message))
    <script> 
      $(document).ready(function(){
        var messagecode = {!! json_encode($message_code) !!};
        var messagejs = {!! json_encode($message) !!};
        alertify.set('notifier','position', 'top-right');
        if(messagecode == "NOK"){
          alertify.error(messagejs);
        }else{
          alertify.success(messagejs);
        }
      });
    </script>
  @endif
  <div class="container">
    <div class="justify-content-center align-items-center col-md-12 row h-full">
      <div class="login-form animated fadeIn p-5">
          <form id="login-form" class="text-left" action="/user/login" method="post" onsubmit="return validateFormSignUp();">
            {{ csrf_field() }}
            <img class="img-fluid" src="/images/icons/safe_gg-logo-nome-branco-versao-2.png">
            <div class="login-form-main-message white-font text-center animated fadeIn"><h4 class="line white-font">LOGIN</h4></div>
            <div class="main-login-form">
              <div class="login-group">
                <div class="form-group">
                  <label for="username" class="sr-only">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="User" required>
                </div>
                <div class="form-group">
                  <label for="password" class="sr-only">Senha</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
                </div>
              </div>
              <button type="submit" class="btn btn-block btn-login">Entrar</button>
              <a href="/user/account" class="btn btn-block btn-outline-light" id="btn-create-account"><i class="fas fa-user-plus"></i> Crie uma conta</a>
              <a href="/" class="btn btn-block btn-outline-light" id="back-home"><i class="fas fa-chevron-left"></i> Voltar</a>
            </div>
          </form>
        </div>
    </div>
  </div>
</body>
<script>
if(localStorage.getItem("user")){
  localStorage.removeItem("user");
  localStorage.removeItem("match-history");
}
</script>
</html>
