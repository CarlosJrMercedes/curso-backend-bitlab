<?php


$encuesta =[10,5,9,85,74,3,6,9,8,8,5,5,4,4,1,1];
$longitud = count($encuesta);
$resul = array_count_values($encuesta);
   
    var_dump($resul);

    

?>