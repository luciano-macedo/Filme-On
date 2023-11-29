<?php 
  require_once("../../componentes/modal.php");
  require_once '../../dao/MovieDao.php';

  if(!empty($_POST)){
    $id_Movie = $movieDao['idMovie'];
    $titulo_Movie =  $movieDao['tituloMovie'];
    $descricao_Movie =  $movieDao['descricaoMovie'];
    $duracao_Movie =  $movieDao['duracaoMovie'];
    $categoria_Movie =  $movieDao['categoriaMovie'];
    $trailer_Movie =  $movieDao['trailerMovie'];
    $imagem_Movie =  $movieDao['imagemMovie'];

    }else{
      $id_Movie = '';
      $titulo_Movie = '';
      $descricao_Movie = '';
      $duracao_Movie = '';
      $categoria_Movie = '';
      $trailer_Movie =  '';
      $imagem_Movie =  '';


    }


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmeOn - Adm</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php 
      include('./../../componentes/header-adm.php');
  ?>
  <div class="container-fluid" style="height: 90vh">
    <div class="row h-100">
      <?php 
      include('./../../componentes/menu-adm.php');
      ?>
      <div class="col-md-10  p-4 borber">
        <div class="card">
          <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header">
              <strong>INFORMAÇÕES DO FILME</strong>
              <input type="text" name="idMovie" id="idMovie" placeholder="id" value="<?=$id_Movie?>">
              <input type="text" name="nomeFoto" id="nomeFoto" placeholder="nome foto" value="<?=$imagem_Movie?>">
              <input type="text" value="<?=$id_Movie?'ATUALIZAR':'SALVAR'?>" name="acao" >

            </div>
            <div class="card-body row" style="align-items: center; justify-content: center;">
              <div class="col-md-2   text-center" >
                <div class="bg-white rounded border" >
                  <img id="preview" src="../../img/movie/<?=$imagem_Movie!="" ? $imagem_Movie : 'padrao.png';?>" alt="..."
                    class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <label for="titulo" class="col-form-label">Titulo:</label>
                    <input type="text" class="form-control" name="titulo" maxlength="50" id="titulo" value="<?=$titulo_Movie?>"
                      required>
                    <div class="invalid-feedback">
                      Titulo Inválido
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <label for="descricao" class="col-form-label">Descrição:</label>
                    <textarea class="form-control" id="descricao" rows="2" required name="descricao"><?=$descricao_Movie?></textarea>
                    <div class="invalid-feedback">
                      Descrição Inválido
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <label for="categoria" class="col-form-label">Categoria:</label>
                    <select class="form-select" id="categoria" name="categoria">
                      <option value="Ação" >Ação</option>
                      <option value="Aventura">Aventura</option>
                      <option value="Comédia">Comédia</option>
                      <option value="Drama">Drama</option>
                      <option value="Romance">Romance</option>
                      <option value="Guerra">Guerra</option>
                      <option value="Suspense">Suspense</option>
                    </select>
                      <div class="invalid-feedback">
                      Categoria Inválido
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="duracao" class="col-form-label">Duração:</label>
                    <input type="text" class="form-control" name="duracao" id="duracao" value="<?=$duracao_Movie?>" required>
                    <div class="invalid-feedback">
                      E-mail Inválido
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="trailer" class="col-form-label">Trailer:</label>
                    <input type="text" class="form-control" name="trailer" id="trailer" value="<?=$trailer_Movie?>" required>
                    <div class="invalid-feedback">
                      Trailer Inválido
                    </div>
                  </div>
                </div>
                <div class="row mt-5 ">
                  <div class="col-md-2">
                    <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
                  </div>
                  <div class=" text-end  col-md-10">
                  <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                  <input type="submit" class=" btn btn-success" value="Salvar">
                  </div>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../../js/personalizar.js"></script>
  <script type="text/javascript" src="./../../js/modal.js"></script>

</body>

</html>