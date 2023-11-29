<?php
    require_once (__DIR__ . '../../model/Conexao.php');
    
    class ClientDao{
        public static function insert($client){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbclient (nomeClient, cpfClient, rgClient, nascClient, celularclient, emailClient, passwordClient, cepClient, enderecoclient, imagemClient, tokenClient) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $client->getNome());
            $stmt->bindValue(2, $client->getCpf());
            $stmt->bindValue(3, $client->getRg());
            $stmt->bindValue(4, $client->getNasc());
            $stmt->bindValue(5, $client->getNasc());
            $stmt->bindValue(6, $client->getEmail());
            $stmt->bindValue(7, $client->getPassword());
            $stmt->bindValue(8, $client->getCep());
            $stmt->bindValue(9, $client->getEndereco());
            $stmt->bindValue(10, $client->getImagem());
            $stmt->bindValue(11, $client->getToken());
            $stmt->execute();
        }

        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbclient WHERE emailclient = ? and passwordClient = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
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


    }
?>