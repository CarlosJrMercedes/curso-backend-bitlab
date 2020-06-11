<?php

    $limite = 50;

    for($i = 0; $i <= $limite ; $i++ ){
        if($i % 2 != 0){

            echo "El número {$i} es un número primo<br><br>";
        }else{
            echo "El número {$i} no es un número primo<br><br>";
        }
    }


?>