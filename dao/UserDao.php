<?php
    require_once '../../model/Conexao.php';
    
    class UserDao{
        public static function insert($user){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbuser (nomeUser, sobrenomeUser, cpfUser, nascUser, emailUser, passwordUser, imagemUser, tokenUser) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $user->getNome());
            $stmt->bindValue(2, $user->getSobrenome());
            $stmt->bindValue(3, $user->getCPF());
            $stmt->bindValue(4, $user->getNasc());
            $stmt->bindValue(5, $user->getEmail());
            $stmt->bindValue(6, $user->getPassword());
            $stmt->bindValue(7, $user->getImagem());
            $stmt->bindValue(8, $user->getToken());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbUser";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbuser WHERE idUser = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbuser WHERE idUser = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $user ){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbuser SET 
            nomeUser = ?, 
            sobrenomeUser = ?, 
            cpfUser  = ?,
            nascUser = ?, 
            emailUser = ?, 
            passwordUser = ?, 
            imagemUser = ?, 
            tokenUser = ? 
            WHERE idUser = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $user->getNome());
            $stmt->bindValue(2, $user->getSobrenome());
            $stmt->bindValue(3, $user->getCPF());
            $stmt->bindValue(4, $user->getNasc());
            $stmt->bindValue(5, $user->getEmail());
            $stmt->bindValue(6, $user->getPassword());
            $stmt->bindValue(7, $user->getImagem());
            $stmt->bindValue(8, $user->getToken());
            $stmt->bindValue(9, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbuser WHERE emailUser = ? and passwordUser = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    }
?>