<?php

    function aleatorio($variedad){
        $long = count($variedad);
        $rango = rand(1,$long);
        echo "Selección aleatoria de elemento del arreglo segun su longitud :<br>";
        echo "Los elementos del arreglo son :<br>";
        echo "\"";
        foreach($variedad as $v){
            echo $v." -  ";
        }
        echo"\"";
        echo "<br>";
        echo "Selección :<br><br>";
        for($i=0;$i<$rango;$i++){
            echo $variedad[$i]."<br>";
        }

    }

    //Arreglo con elementos 
    $variedad = ["Hola","Carro", "Hamburguesa", "Pizza", "Pescado", 0, 0.25];

    
    echo"***********************************************<br>";
    echo"***********************************************<br>";
    echo"***********************************************<br>";
    aleatorio($variedad);
    echo "<br>";
    echo"***********************************************<br>";
    echo"***********************************************<br>";
    echo"***********************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";

    //Arreglo con elementos 
    $variedad1 = ["Tacos al pastor","Sopa de res", "Sopa de tortilla", "Pizza", "Pescado", "Camarones"];

    
    echo"***********************************************<br>";
    echo"***********************************************<br>";
    echo"***********************************************<br>";
    aleatorio($variedad1);
    echo "<br>";
    echo"***********************************************<br>";
    echo"***********************************************<br>";
    echo"***********************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";


     //Arreglo con elementos 
     $variedad1 = ["Automóvil","Motocicleta", "Avión", "Barco", "Bicicleta", "Patineta"];

    
     echo"***********************************************<br>";
     echo"***********************************************<br>";
     echo"***********************************************<br>";
     aleatorio($variedad1);
     echo "<br>";
     echo"***********************************************<br>";
     echo"***********************************************<br>";
     echo"***********************************************";
     
     echo "<br>";echo "<br>";
     echo "<hr>";
     echo "<br>";echo "<br>";

?>