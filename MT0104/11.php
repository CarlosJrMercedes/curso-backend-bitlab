<?php

    $nombres = ["JUAN","MARIA", "ANA", "CAMILA", "ESTRELLITA","CARLOS"] ;
    // var_dump($nombres);
    $nomb = "Carlos";

    for($i = 0 ; $i < count($nombres); $i++){

        echo "La inicial del nombre :".$nombres[$i]." es : ".substr($nombres[$i], 0, 1)."<br><br>";
        echo "Las letras que no estan en el nombre son : <br>";
        for ($c=65;$c<=90;$c++) {
            if(chr($c) != substr($nombres[$i], 0, 1)){

                echo chr($c).", ";                 
            }
        }
        echo "<br>";
        echo "<br>";
        echo "<hr>";

        
    }
    





?>