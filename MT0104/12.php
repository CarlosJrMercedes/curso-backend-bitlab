<?php

    $numeros = [1,2,3,4,5.3,7.9,8.9,9.3,1.2,5.4,6.3];

    $longitud = count($numeros);
    // echo $longitud;
    $suma = 0;
    for($i = 0 ; $i < $longitud ; $i++){
        $suma = + $numeros[$i];
    }

    $promedio= $suma/$longitud;
    echo "El promedio del grupo de números es : 
    ".number_format($promedio, 2, '.' ,' ')."";

?>