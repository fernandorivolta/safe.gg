<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbarfeed">
  <a class="navbar-brand"><img style="width: 90px;" src="/images/icons/safe_gg-logo-nome-branco-versao-2.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/feed">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pro">PROPLAYERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/champions">CHAMPIONS</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/user/search" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Procurar usuario" aria-label="Search" name="user">
      <button class="btn btn-outline-light my-2 my-sm-0" id="btn-search-user" type="submit"><i class="fa fa-search"></i></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 10px;">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/user/logout">SAIR <i class="fas fa-sign-out-alt"></i></a>
          </li>
        </ul>
      </div>
    </form>
  </div>
</nav>
