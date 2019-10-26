<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbarfeed">
  <a class="navbar-brand nav-link" href="/feed"><img style="width: 90px;" src="/images/icons/safe_gg-logo-nome-branco-versao-2.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/procurar">GAMES</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOL</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/myhistory">MATCH HISTORY</a>
          <a class="dropdown-item" href="/lol/proplayers">PROPLAYERS</a>
          <a class="dropdown-item" href="/champions">CHAMPIONS</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CS:GO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/grenades">GRANADAS</a>
          <a class="dropdown-item" href="/cs/proplayers">PROPLAYERS</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/players">ENCONTRE</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/user/search" method="get">
      <a class="nav-link" id="admin" href="/admin" style="display: none"><i class="fas fa-user-cog"></i></a>
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
