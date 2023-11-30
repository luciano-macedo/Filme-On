<?php

    class Movie{
        public $id, $titulo, $descricao, $duracao, $categoria, $imagem, $trailer;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getTitulo(){
          return $this->titulo;
        }
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function getDescricao(){
          return $this->descricao;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function getDuracao(){
          return $this->duracao;
        }
        public function setDuracao($duracao){
            $this->duracao = $duracao;
        }

        public function getCategoria(){
          return $this->categoria;
        }
        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }

        public function getImagem(){
            return $this->imagem;
        }
        public function setImagem($imagem){
            $this->imagem = $imagem;
        }
        public function getTrailer(){
          return $this->trailer;
        }
        public function setTrailer($trailer){
            $this->trailer = $trailer;
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
              $diretorio = "../../img/movie/";
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