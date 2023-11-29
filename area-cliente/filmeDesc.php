<?php
  require_once '../dao/movieDao.php'; 
  require_once '../dao/reviewDao.php'; 
  $idFilme= $_GET['idFilme'];
  $movie = MovieDao::selectById($idFilme);
  $reviews = ReviewDao::selectReviewId($idFilme);


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmeOn - Contato</title>
  <link rel="short icon" href="./../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon Booststrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="justify-content: center; align-items: center; " class="bg-dark">
  <div class="container-fluid  container00">
    <div class="container bg-dark">
    <?php
      session_start();
        if(isset($_SESSION["authClient"])){
          $authClient = $_SESSION["authClient"];
          include('./../componentes/header-cliente-logado.php');
        }else{
          include('./../componentes/header-cliente.php');
        }
    ?>
      <div>
        <div class="row  " >
            <h1 class="text-white"><?=$movie['tituloMovie']?></h1>
            <h6 class="text-white">Duração: <?=$movie['duracaoMovie']?> min. / <?=$movie['categoriaMovie']?></h6>
        </div>
        <div class="row  " >
          <div class="col-md-5 text-center text-md-start ">
          <img id="preview" src="../img/movie/<?=$movie['imagemMovie']?>" alt="..."
          class="img-fluid" style="width: 70%; height: 350px;  object-fit: cover;"  >
          </div>
          <div class=" embed-responsive-16by9 col-md-7 text-end">
          <iframe width="100%" height="100%"  src="<?=$movie['trailerMovie']?>" allowfullscreen></iframe>        
          </div>
        </div>
        <div class="row  " >
            <h6 class="text-white">Descrição:</h6>
            <p class="text-white-50"><?=$movie['descricaoMovie']?></p>
        </div>
      </div>
      <?php if(isset($_SESSION["authClient"])) { ?>
      <div class="bg-secondary p-4">
        <h1 class="text-white">Envie sua Avaliação</h1>
        <p class="text-white-50">Peenchaa o formulário com a nota e comentário sobre o filme</p>
        <form method="post" action="review.php">
        <input type="hidden" name="idFilme" id="idFilme" placeholder="id" value="<?=$idFilme?>">

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="nota" class="col-form-label text-white">Nota do filme:</label>
              <select class="form-select" id="nota" name="nota">
                <option value="1" >1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>

              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="descricao" class="col-form-label text-white">Seu comentário:</label>
              <textarea class="form-control" id="comentario" rows="3" required name="comentario"></textarea>
            </div>
          </div>
          <div class=" text-start  col-md-6">
            <input type="submit" class=" btn btn-warning" value="Enviar Comentário">
          </div>
        </form>
      </div>
      <?php } ?>
      <?php if($reviews) { ?>
        <h1 class="text-white mt-3">Avaliações</h1>
      <?php }else{?>
        <span class="mt-5">.</span>
      <?php } ?>
      <?php foreach($reviews as $review) { ?>
      <div class=" mt-3  row border-bottom pb-3 mb-1">
        <div class="col-md-1   text-center ">
          <div style="height:70px; width: 70px; overflow:hidden " class="border rounded-circle">
            <img id="preview" src="../img/client/<?=$review[3]?>" alt="..."  style=" width: 100%;  height: 100%;" >
          </div>
        </div>
        <div class="col-md-11 ">
          <div class="mb-2">
            <span class="text-warning h3  "><?=$review[2]?> </span> <span class="text-warning">  / <?=$review[0]?></span> 
          </div>
          <p class="text-white "><?=$review[1]?></p>
        </div>
      </div>
      <?php } ?>
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