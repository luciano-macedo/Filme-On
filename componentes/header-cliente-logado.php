
<header class="p-3 text-bg-dark bg-transparent">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="home.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="./../img/site/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      </a>
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="home.php" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="filme.php" class="nav-link px-2 text-white">Filmes</a></li>
        <li><a href="contato.php" class="nav-link px-2 text-white">Contatos</a></li>
        <li><a href="sobre.php" class="nav-link px-2 text-white">Sobre</a></li>
      </ul>
      <div class="dropdown text-end">
        <a href="#" class="text-white d-block link-body-emphasis text-decoration-none dropdown-toggle"
          data-bs-toggle="dropdown" aria-expanded="false">
          <img src="./../img/client/<?=$authClient['img']? $authClient['img'] : 'padrao.png'?>" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
          <a class="dropdown-item" href="#"><?=$authClient['nome']?></a>
          <li><a class="dropdown-item" href="#">Perfil</a></li>
          <li><a class="dropdown-item" href="favorito.php">Favoritos</a></li>

          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>