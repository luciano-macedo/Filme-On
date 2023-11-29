<?php
 require_once '../../dao/MovieDao.php';
 require_once '../../model/Movie.php';
 require_once '../../model/Mensagem.php';

 $movie = new Movie();
 $msg = new Mensagem();

 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
        $movieDao = MovieDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
   //pode validar as informações
   $movie->setTitulo($_POST['titulo']);
   $movie->setDescricao($_POST['descricao']);
   $movie->setDuracao($_POST['duracao']);
   $movie->setCategoria($_POST['categoria']);
   $movie->setImagem($movie->salvarImagem($_POST['nomeFoto'])); 
   $movie->setTrailer($_POST['trailer']);
   try {
      $movieDao = MovieDao::insert($movie);
      $msg->setMensagem("Filmes Salvo com sucesso.", "bg-success");
      header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
/*       $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
      header("Location: register.php"); */
    } 
    break;
  case 'ATUALIZAR':
        //pode validar as informações
        $movie->setTitulo($_POST['titulo']);
        $movie->setDescricao($_POST['descricao']);
        $movie->setDuracao($_POST['duracao']);
        $movie->setCategoria($_POST['categoria']);
        $movie->setImagem($movie->salvarImagem($_POST['nomeFoto'])); 
        $movie->setTrailer($_POST['trailer']);
        try {
          $movieDao = MovieDao::update($_POST["idMovie"], $movie);
          $msg->setMensagem("Filme Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
        $movieDao = MovieDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');

       // var_dump($movieDao);
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>