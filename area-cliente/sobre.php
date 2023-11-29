<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmeOn - Sobre</title>
  <link rel="short icon" href="./../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon Booststrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- CSS Projeto -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body style="justify-content: center; align-items: center; ">

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
    <div class="container " >
      <div class="card ww-100 shadow  " style=" opacity:0.9; margin: 0 auto">
        <div class="card-header text-center ">
          <h1 class="display-5">Sobre</h1>
        </div>
        <div class="card-body">
          <p class="lead text-end">Este Website é um veículo de informações, sugestões, recomendações, dicas e resenhas
            de filmes e conteúdo. Nenhuma parte do conteúdo disponibilizado por meio deste Website deve ser interpretada
            como aconselhamento profissional. O Website poderá ser atualizado diariamente por profissionais da Indústria
            do Entretenimento e Conteúdo Digital, e, dentre outras funcionalidades, inscrição em newsletter, em
            notificação de lançamentos, de criar listas e estabelecer preferências de caráter opcional exclusivo aos
            Usuários</p>
          <hr>
          <p class="lead text-end"> O Website é expressamente desassociado do conteúdo de links, publicidade e outros
            serviços vinculados e não endossa seus conteúdos como próprios. Na medida em que o Website obtenha
            conhecimento de algum conteúdo ilegal de um link, publicidade ou outro serviço vinculado, garantirá a
            remoção do tal link, publicidade ou outro serviço correspondente.</p>
          <hr>
          <p class="lead text-end">Para utilizar este Website, o Usuário deve ler atentamente todos os Termos de Uso e
            Política de Dados e Privacidade e concordar plenamente com suas disposições, utilizando o formulário
            apropriado disponível no Website. Caso o Usuário não concorde com os Termos de Uso e Política de Dados e
            Privacidade ou qualquer outra regra aplicável ao Website, deverá atestar expressamente por meio do
            formulário apropriado disponível no Website e se abster de utilizá-lo.</p>
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