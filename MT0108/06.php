<?php
    function contarLetras($texto){
        $mayus = 0;
        $minus = 0;
        for($i=0;$i < strlen($texto);$i++){
            if(ctype_upper($texto[$i])){
                $mayus++;
            }
            if(ctype_lower($texto[$i])){
                $minus++;
            }
        }
        echo "El texto a evaluar los caracteres es : <br> \" {$texto} \"<br>";
        echo "La cantidad de caracteres mayúsculas son : ".$mayus;
        echo "<br>";
        echo "La cantidad de caracteres minúscula son : ".$minus;
    }

    //Texto a evaluar
    $texto = "lolo lA";

    echo"****************************************<br>";
    echo"****************************************<br>";
    echo"****************************************<br>";
    contarLetras($texto);
    echo "<br>";
    echo"****************************************<br>";
    echo"****************************************<br>";
    echo"****************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";

     //Texto a evaluar
     $texto1 = "Las PUPUSAS SOn MUY deliciosas";

     echo"****************************************<br>";
     echo"****************************************<br>";
     echo"****************************************<br>";
     contarLetras($texto1);
     echo "<br>";
     echo"****************************************<br>";
     echo"****************************************<br>";
     echo"****************************************";
     
     echo "<br>";echo "<br>";
     echo "<hr>";
     echo "<br>";echo "<br>";


     //Texto a evaluar
     $texto2 = "Ó";

     echo"****************************************<br>";
     echo"****************************************<br>";
     echo"****************************************<br>";
     contarLetras($texto2);
     echo "<br>";
     echo"****************************************<br>";
     echo"****************************************<br>";
     echo"****************************************";
     
     echo "<br>";echo "<br>";
     echo "<hr>";
     echo "<br>";echo "<br>";

?>