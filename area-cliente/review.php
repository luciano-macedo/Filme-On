<?php
 require_once '../dao/ReviewDao.php';
 require_once '../model/Review.php';
 require_once '../model/Mensagem.php';
 $review = new Review();
 $msg = new Mensagem();
  session_start();
  $authClient = $_SESSION["authClient"];
  $idClient = $authClient['id'];
  $review->setNota($_POST['nota']);
  $review->setReview($_POST['comentario']);
  $review->setIdClient($idClient);
  $review->setIdMovie($_POST['idFilme']);
  
  $movie = ReviewDao::insert($review);
  header("Location: filme.php");
?>