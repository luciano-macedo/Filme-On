<?php
    require_once (__DIR__ . '../../model/Conexao.php');
    
    class ReviewDao{
        public static function insert($review){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbreview (notaReview, reviewReview, idClient, idMovie) VALUES (?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $review->getNota());
            $stmt->bindValue(2, $review->getReview());
            $stmt->bindValue(3, $review->getIdClient());
            $stmt->bindValue(4, $review->getIdMovie());
            $stmt->execute();
        }
        public static function selectReviewId($id){
            $conexao = Conexao::conectar();
            $query = "SELECT  tbreview.notaReview, tbreview.reviewReview ,tbclient.nomeClient, tbclient.imagemClient from tbreview 
            INNER JOIN tbclient
            ON tbreview.idClient = tbclient.idClient
            where tbreview.idMovie = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetchAll();
        }




    }
?>