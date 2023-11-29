<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmeOn - Home</title>
  <link rel="short icon" href="./../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon Booststrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">

  <div class="container-fluid container00 container01">
    <div class="container">
    <?php
      session_start();
        if(isset($_SESSION["authClient"])){
          $authClient = $_SESSION["authClient"];
          include('./../componentes/header-cliente-logado.php');
        }else{
          include('./../componentes/header-cliente.php');
        }
    ?>

    </div>
    <div class="container titlePadding" data-aos="fade-up" data-aos-duration="1500">
      <p class="h5" id="lauchComing">Filmes mais assistidos</p>
      <p class="h1">Melhores Filmes de 2023.</p>
      <button type="button" class="btn btn-outline-light mt-5" id="button">SAIBA MAIS</button>

      <div class="container text-center">
        <img src="../img/site/arrowDown.gif" alt="arrowDown" class="arrowDown">
      </div>
    </div>
  </div>
  <div class="container-fluid container00 container02">
    <div class="container titlePadding" data-aos="fade-down" data-aos-duration="1500">
      <p class="h1 ">Filmes de Ficção</p>
      <p class="h5" id="lauchComing">Resistência é aposta na mescla de ficção científica e filmes de guerra</p>
      <a type="button" class="btn btn-outline-light mt-5" id="button">SAIBA MAIS</a>
    </div>
  </div>
  <?php 
      include('./../componentes/footer-cliente.php');
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
</body>

</html>