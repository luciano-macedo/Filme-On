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

<body style="justify-content: center; align-items: center; height: 100vh ">

  <div class="container-fluid  container00 container01 ">
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
      <div class="container " style="height: 70vh; ">
        <div class="card w-75 shadow  " style=" opacity:0.9; margin: 0 auto">
          <div class="card-header text-center ">
            <h1 class="display-5">Contato</h1>
          </div>
          <div class="card-body">
            <form method="post" action="./contato.php">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nome Completo:</label>
                <input type="text" class="form-control" id="nome" name="nome">
              </div>
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="recipient-name" class="col-form-label">E-mail:</label>
                  <input type="text" class="form-control" id="email" name="email">
                </div>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Comentários</label>
                <textarea type="text" class="form-control" id="comentario" name="comentario"></textarea>
              </div>
              <div class=" col mt-5 text-end">
                <button type="submit" class="btn btn-info ms-3">Enviar</button>
              </div>
            </form>
          </div>
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