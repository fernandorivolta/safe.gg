<!DOCTYPE html>
<html>
<head>
  <?php
    include '../lib/head.php';
  ?>
  <link rel='stylesheet' type='text/css' href='/safe.gg/style/css/main.css'>
  <link rel='stylesheet' type='text/css' href='/safe.gg/style/css/loginIndex.css'>
</head>
<body style="background-color:  #1d0149;">
  <div class="container">
    <div class="justify-content-center align-self-center col-md-12 row">
      <div class="login-form-1 animated fadeIn">
          <form id="register-form" class="text-left" action="/safe.gg/controller/validateSignUp.php" method="post" onsubmit="return validateFormSignUp();">
            <img src="/safe.gg/images/icons/safe_gg-logo-nome-branco-versao-2.png">
              <div class="login-form-main-message"><h4 class="white-font line animated fadeIn">Cadastre-se</h4></div>
                <div class="main-login-form">
                  <div class="login-group">
                    <?php  echo "<div class='form-group'>
                                    <input type='text' class='form-control' id='user' name='user' placeholder='Usuário' value='$user' aria-describedby='feedback'>
                                    <small id='feedback' class='form-text red-font' style='display:none;'>
                                      <p class='red-font'><i class='fas fa-exclamation-circle'></i> O usuário já está sendo usado.</p>
                                    </small>
                                  </div>
                                  <div class='form-group'>
                                    <input type='text' class='form-control' id='nome' name='nome' placeholder='Nome' value='$nome'>
                                  </div>
                                  <div class='form-group'>
                                    <input type='text' class='form-control' id='email' name='email' placeholder='Email' value='$email'>
                                  </div>";
                    ?>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                    </div autofocus>

                    <div class="form-group">
                      <input type="text" class="form-control" id="nicklol" name="nicklol" placeholder="Nome de Invocador">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="steam" name="steam" placeholder="Steam">
                    </div>
                    <div class="form-group">
                      <input type="date" class="form-control" id="datanasc" name="datanasc">
                    </div>
                  </div>
                <button type="submit" class="btn btn-block btn-light">Cadastrar</button>
              <button type="button" class="btn btn-block btn-outline-light" id="btn-back-home"><i class="fas fa-chevron-left"></i> Voltar</button>
            </div>
          </form>
        </div>
    </div>
  </div>
</body>
</html>

<!--COLOCAR ISSO EM UM ARQUIVO SEPARADO -->
<script type="text/javascript" src="/safe.gg/style/js/registerIndex.js"></script>
