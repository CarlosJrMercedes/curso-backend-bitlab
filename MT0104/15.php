<?php
    $valor = 500;
    $numero = 3;
    $potenmcia= 2;
    $resultado = 0;

    while($numero <= $valor){

        

        $resultado = pow($numero , $potenmcia);
        echo $resultado."<br>";
        $resultado = 0;
        $numero++;
    }
    // echo $resultado;

?>