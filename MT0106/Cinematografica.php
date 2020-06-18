<?php
    class Cinematografica{

        public $nombre;
        public $duracion;
        public $idioma;
        public $genero;
        public $numeroCap;
        public $temporada;


        public function getPelicula(){


            if($this->numeroCap == "" || $this->temporada == ""){
                return 0;
            }else{
                return 1;
            }

        }

        





    }



?>