<?php


    class Comentario{

        public $autor;
        public $comentario;
        public $fecha;
        public $favoritos;
        public $calificacion;


        public function comentarioNulo(){
            if($this->comentario == ""){
                return 0;
            }else{
                return 1;
            }
        }
        public function getFavoritos(){
            if($this->favoritos == ""){
                return ":(";
            }else{
                return "♥";
            }
        }

        public function calificar(){
            if($this->calificacion >= 1 && $this->calificacion <= 5){
                return $this->calificacion;
            }else{
                return "La calificación dada no esta permitida";
            }
        }

        
    }




?>