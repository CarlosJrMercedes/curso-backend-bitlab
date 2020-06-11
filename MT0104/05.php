<?php
    $dos = 2;
    for($i=25;$i>=0;$i--){

        echo $i."entre 2 es igual a ".round($i/$dos, 0, PHP_ROUND_HALF_DOWN). " y me sobra ". $i%$dos."<br>" ;

    }

?>