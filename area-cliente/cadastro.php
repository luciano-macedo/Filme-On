<?php     
  session_start();
  require_once("../componentes/modal.php");


  //require_once '../dao/ClientDao.php';
  if(!empty($_POST)){
    $id_Client= $userDao['idUser'];
    $imagem_Client = $userDao['imagemUser'];
    }else{
      $id_Client= '';
      $imagem_Client = '';
    }


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmeOn - Adm</title>
  <link rel="short icon" href="./../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="justify-content: center; align-items: center; " class="bg-dark">
  <div class="container-fluid  container00">
    <div class="container bg-dark">
      <?php 
        include('./../componentes/header-cliente.php');
      ?>
    <div class="bg-dark p-4 border rounded ">
      <div class="text-center">
        <h2 class="text-white">Criar Conta</h2>
      </div>      
      <form method="post" action="cadastroProcess.php" enctype="multipart/form-data" class="needs-validation" novalidate>
              <input type="hidden" name="idClient" id="idClient" placeholder="id" value="<?=$id_Client?>">
              <input type="hidden" name="nomeFoto" id="nomeFoto" placeholder="nome foto" value="<?=$imagem_Client?>">
              <input type="hidden" value="<?=$id_Client?'ATUALIZAR':'SALVAR'?>" name="acao" >
          <div class="row">
            <div class="col-md-3  ">
              <div class="bg-white rounded text-center " >
                  <img id="preview" src="../img/client/padrao.png" alt="..."
                    class="rounded  w-100 mb-3 "  style="height:250px; object-fit: cover; " >
                    <label for="foto" class="btn btn-light mb-2"> Carregar Imagem</label>
                    <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input" style="display: none">
              </div>
            </div>
            <div class="col-md-9 ">
              <div class="row">
                <div class="col-md-9 ">
                    <label for="nome" class="col-form-label text-white">Nome Completo:</label>
                    <input type="text" class="form-control bg-dark text-white " name="nome" maxlength="50" id="nome" required>
                </div>
                <div class="col-md-3 ">
                <label for="cpf" class="col-form-label text-white">CPF:</label>
                    <input type="text" data-mask="000.000.000-00" data-mask-selectonfocus="true" class="form-control bg-dark text-white" name="cpf" maxlength="50" id="cpf" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 ">
                <label for="rg" class="col-form-label text-white">Rg:</label>
                    <input type="text" data-mask="00.000.000-A" data-mask-selectonfocus="true"  class="form-control bg-dark text-white" name="rg" maxlength="50" id="rg" required>
                </div>
                <div class="col-md-4 ">
                    <label for="nasc" class="col-form-label text-white">Data de Nascimento:</label>
                    <input type="date"  class="form-control bg-dark text-white" name="nasc" maxlength="50" id="nasc" required>
                </div>
                <div class="col-md-4 ">
                <label for="cel" class="col-form-label text-white">Celular:</label>
                    <input type="text" data-mask="(00)00000-0000" data-mask-selectonfocus="true" class="form-control bg-dark text-white" name="cel" maxlength="50" id="cel" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 ">
                    <label for="email" class="col-form-label text-white">Email :</label>
                    <input type="text" class="form-control bg-dark text-white" name="email" maxlength="50" id="email" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 ">
                    <label for="password" class="col-form-label text-white">Senha :</label>
                    <input type="text" class="form-control bg-dark text-white" name="password" maxlength="50" id="password" required>
                </div>
                <div class="col-md-6 ">
                <label for="passwordconf" class="col-form-label text-white">Confirmar Senha:</label>
                    <input type="text" class="form-control bg-dark text-white" name="passwordconf" maxlength="50" id="passwordconf" required>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-md-12 ">
              <div class="row">
                <div class="col-md-3 ">
                <label for="cep" class="col-form-label text-white">CEP:</label>
                    <input type="text" data-mask="00000-000" data-mask-selectonfocus="true"  class="form-control bg-dark text-white" name="cep" maxlength="50" id="cep" required>
                </div>
                <div class="col-md-9 ">
                    <label for="endereco" class="col-form-label text-white">Endereço:</label>
                    <input type="text" class="form-control bg-dark text-white" name="endereco" maxlength="50" id="endereco" required>
                </div>
              </div>

              <div class="row mt-4">
                <div class="col-md-2">
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


    <div>
  </div>

  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../js/personalizar.js"></script>
  <script type="text/javascript" src="./../js/modal.js"></script>
</body>

</html>