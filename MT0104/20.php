<?php

    $rangIni = 1500;
    $rangFin = 2020;

    for($i= $rangIni;$i<=$rangFin;$i++){
        if($i % 100 == 0 && $i % 400 ==0){
            echo $i ." Es un año bisiesto :<br>";
        }

    }


?>