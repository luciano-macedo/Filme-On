<?php

    class Review{
        public $id, $nota, $review, $idClient, $idMovie;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }

        public function getNota(){
            return $this->nota;
        }
        public function setNota($nota){
            $this->nota = $nota;
        }

        public function getReview(){
            return $this->review;
        }
        public function setReview($review){
            $this->review = $review;
        }

        public function getIdClient(){
            return $this->idClient;
        }
        public function setIdClient($idClient){
            $this->idClient = $idClient;
        }

        public function getIdMovie(){
            return $this->idMovie;
        }
        public function setIdMovie($idMovie){
            $this->idMovie = $idMovie;
        }

        

    }
?>