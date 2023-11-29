<?php
    require_once(__DIR__ . '../../model/Conexao.php');

    class MovieDao{
        public static function insert($movie){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbMovie (tituloMovie, descricaoMovie, duracaoMovie, categoriaMovie, imagemMovie, trailerMovie) VALUES (?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $movie->getTitulo());
            $stmt->bindValue(2, $movie->getDescricao());
            $stmt->bindValue(3, $movie->getDuracao());
            $stmt->bindValue(4, $movie->getCategoria());
            $stmt->bindValue(5, $movie->getImagem());
            $stmt->bindValue(6, $movie->geTtrailer());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbMovie";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectAllAsc(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbMovie ORDER BY tituloMovie ASC";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbMovie WHERE idMovie = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbMovie WHERE idMovie = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $movie ){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbMovie SET 
            tituloMovie = ?, 
            descricaoMovie = ?, 
            duracaoMovie = ?, 
            categoriaMovie = ?, 
            imagemMovie = ?, 
            trailerMovie = ?
            WHERE idMovie = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $movie->getTitulo());
            $stmt->bindValue(2, $movie->getDescricao());
            $stmt->bindValue(3, $movie->getDuracao());
            $stmt->bindValue(4, $movie->getCategoria());
            $stmt->bindValue(5, $movie->getImagem());
            $stmt->bindValue(6, $movie->geTtrailer());
            $stmt->bindValue(7, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }

    }
?>