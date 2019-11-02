<!DOCTYPE html>
<html>

<head>
  @include('lib.head')
  <link rel='stylesheet' type='text/css' href='/css/account.css'>
</head>

<body>
  @if (isset($message))
  <script>
    $(document).ready(function () {
      var messagejs = {!! json_encode($message)!!
    };
    alertify.set('notifier', 'position', 'top-right');
    alertify.error(messagejs);
      });
  </script>
  @endif
  <div class="container">
    <div class="row justify-content-center align-self-center">
      <div class="col-md-8 login-form-1 animated fadeIn">
        <form id="register-form" class="text-left p-5 m-5" action="/user/create" method="post">
          {{ csrf_field() }}
          <div class="row justify-content-center">
            <img class="img-logo" src="/images/icons/safe_gg-logo-nome-branco-versao-2.png">
          </div>

          <div class="login-form-main-message">
            <h4 class="white-font line animated fadeIn">Cadastre-se</h4>
          </div>
          <div class="main-login-form">
            <div class="login-group">
              <div class='form-group'>
                <label class="gray-font form-label">USUÁRIO</label>
                <input type='text' class='form-control' id='user' name='username' placeholder='Usuário'
                  value='{{$username}}' aria-describedby='feedback'>
                <small id='feedback' class='form-text red-font' style='display:none;'>
                  <p class='red-font'><i class='fas fa-exclamation-circle'></i> O usuário já está sendo usado.</p>
                </small>
              </div>
              <div class='form-group'>
                <label class="gray-font form-label">NOME</label>
                <input type='text' class='form-control' id='nome' name='name' placeholder='Nome' value='{{$name}}'>
              </div>
              <div class='form-group'>
                <label class="gray-font form-label">EMAIL</label>
                <input type='text' class='form-control' id='email' name='email' placeholder='Email' value='{{$email}}'>
              </div>
              <div class="form-group">
                <label class="gray-font form-label">SENHA</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
              </div>
              <div class="form-group">
                <label class="gray-font form-label">NOME DE INVOCADOR</label>
                <input type="text" class="form-control" id="nicklol" name="summonerName"
                  placeholder="Nome de Invocador">
              </div>
              <div class="form-group">
                <label class="gray-font form-label">PERFIL STEAM</label>
                <input type="text" class="form-control" id="steam" name="steam" placeholder="Steam">
              </div>
              <div class="form-group">
                <label class="gray-font form-label">DATA DE NASCIMENTO</label>
                <input type="date" class="form-control" id="datanasc" name="birthday">
              </div>
            </div>
            <div class="row justify-content-center mb-2">
              <button type="submit" class="btn btn-block btn-outline-light"><i class="fas fa-user-plus"></i> Cadastrar</button>
            </div>
            <div class="row justify-content-center">
              <a href="/" class="btn btn-block btn-outline-light"><i class="fas fa-chevron-left"></i>
                Voltar</a>
            </div>


          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>