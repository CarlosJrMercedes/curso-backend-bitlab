<?php
    class Cinematografica{

        public $nombre;
        public $duracion;
        public $idioma;
        public $genero;
        public $numeroCap;
        public $temporada;
        public $edadArtista;


        public function getPelicula(){
            if($this->numeroCap == "" || $this->temporada == ""){
                return 0;
            }else{
                return 1;
            }
        }

        public function autor(){
            if($this->edadArtista == ""){
                return 0;
            }else{
                return 1;
            }
        }

        





    }



?>