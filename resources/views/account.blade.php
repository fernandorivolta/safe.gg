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
          <form id="login-form" class="text-left" action="/user/create" method="post">
            {{ csrf_field() }}
            <img src="/images/icons/safe_gg-logo-nome-branco-versao-2.png">
          <div class="login-form-main-message"><h4 class="white-font line animated fadeIn">Cadastre-se</h4></div>
            <div class="main-login-form">
              <div class="login-group">
                <div class='form-group'>
                    <input required type='text' class='form-control' id='user' name='username' placeholder='Usuário' value='{{$username}}' aria-describedby='feedback'>
                    <small id='feedback' class='form-text red-font' style='display:none;'>
                        <p class='red-font'><i class='fas fa-exclamation-circle'></i> O usuário já está sendo usado.</p>
                    </small>
                    </div>
                    <div class='form-group'>
                        <input required type='text' class='form-control' id='nome' name='name' placeholder='Nome' value='{{$name}}'>
                    </div>
                    <div class='form-group'>
                        <input required type='text' class='form-control' id='email' name='email' placeholder='Email' value='{{$email}}'>
                    </div>
                <div class="form-group">
                  <input required type="password" class="form-control" id="password" name="password" placeholder="Senha">
                </div>
                <div class="form-group">
                  <input required type="text" class="form-control" id="nicklol" name="summonerName" placeholder="Nome de Invocador">
                </div>
                <div class="form-group">
                  <input required type="text" class="form-control" id="steam" name="steam" placeholder="Steam">
                </div>
                <div class="form-group">
                  <input required type="date" class="form-control" id="datanasc" name="birthday">
                </div>
              </div>
              <button type="submit" class="btn btn-block btn-login">Cadastrar</button>
              <a href="/" class="btn btn-block btn-outline-light" id="back-home"><i class="fas fa-chevron-left"></i> Voltar</a>
            </div>
          </form>
        </div>
    </div>
  </div>
</body>
</html>
