<?php

    class Client{
        public $id, $nome, $cpf, $rg, $nasc, $celular, $email, $password, $cep, $endereco, $imagem, $token;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getNome(){
          return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getCpf(){
          return $this->cpf;
        }
        public function setCpf($cpf){
            $this->cpf= $cpf;
        }

        public function getRg(){
          return $this->rg;
        }
        public function setRg($rg){
            $this->rg= $rg;
        }

        public function getNasc(){
          return $this->nasc;
        }
        public function setNasc($nasc){
            $this->nasc= $nasc;
        }

        public function getCelular(){
          return $this->celular;
        }
        public function setCelular($celular){
            $this->celular= $celular;
        }

        public function getEmail(){
          return $this->email;
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function getPassword(){
          return $this->password;
        }
        public function setPassword($password){
            $this->password = $password;
        }

        public function getCep(){
          return $this->cep;
        }
        public function setCep($cep){
            $this->cep = $cep;
        }

        public function getEndereco(){
          return $this->endereco;
        }
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        
        public function getImagem(){
          return $this->imagem;
        }
        public function setImagem($imagem){
            $this->imagem = $imagem;
        }

        public function getToken(){
          
          return $this->token;
        }
        public function setToken($token){
            $this->token = $token;
        }
        
        public function generateToken() {
          return bin2hex(random_bytes(16));
        }

        public function salvarImagem($novo_nome) {
          //a foto vem com a extenção $_FILES
          if(empty($_FILES['foto']['size']) != 1){
              //pegar as extensão do arquivo
              if ($novo_nome ==""){
                  //Ciando um nome novo
                  $novo_nome = md5(time()). ".jpg";
              }
              //definindo o diretorio
              $diretorio = "../img/client/";
              //juntando o nome com o diretorio
              $nomeCompleto = $diretorio.$novo_nome;
              //efetuando o upload
              move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto );
              return $novo_nome;
           }else{
            return $novo_nome;
           }
        }


    }
?>