<?php 
  require_once '../dao/movieDao.php'; 
  $movies = MovieDao::selectAllAsc();
  //var_dump($movies);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmeOn - Filme</title>
  <link rel="short icon" href="./../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon Booststrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">

  <div class="container-fluid container00 bg-dark">
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
    <div class="container" >
      <div class="px-lg-5">
        <div class="row py-5 justify-content-evenly ">
          <!-- Gallery item -->
          <?php foreach($movies as $movie) { ?>
            <div class="col-xxl-3 col-lg-3 col-md-6 mb-4 mt-3" style="width: 300px">
            <div class="bg-white rounded shadow card " style="height: 100% ">
              <img src="../img/movie/<?=$movie[5]!="" ? $movie[5] : 'padrao.png';?>" alt="" class="img-fluid card-img-top" style="width: 100%; height: 350px;  object-fit: cover;">
              <div class=" text-center justify-content-center d-flex align-items-center h-75 p-1 " >
                <h6 class="card-title"><?=$movie[1]?></h6>
              </div>
              <div class="  text-center  justify-content-center d-flex align-items-center pb-3" >
              <a class="btn btn-outline-secondary" href="filmeDesc.php?idFilme=<?=$movie[0]?>" role="button">Saiba Mais</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
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