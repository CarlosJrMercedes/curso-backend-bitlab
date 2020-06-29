<?php


    function verificar($ar, $ele){
        $contador = 0;
        if(in_array($ele,$ar)){
            for($i=0;$i<count($ar);$i++){
                if ($ar[$i] == $ele) {
                    $contador++;
                }
            }
            if ($contador == 1) {
                echo "Los elementos del arreglo son :<br>";
                echo "\"";
                foreach($ar as $a){
                    echo $a."  , ";
                }
                echo"\"";
                echo "<br>";
                echo "El elemento a buscar es : {$ele} <br> ";
                echo "Si existe y se repite {$contador} vez ";
            }else{
                echo "Los elementos del arreglo son :<br>";
                echo "\"";
                foreach($ar as $a){
                    echo $a."  , ";
                }
                echo"\"";
                echo "<br>";
                echo "El elemento a buscar es : {$ele} <br> ";
                echo "Si existe y se repite {$contador} veces ";
            }

        }else{
            echo "Los elementos del arreglo son :<br>";
            echo "\"";
            foreach($ar as $a){
                echo $a."  , ";
            }
            echo"\"";
            echo "<br>";
            echo "El elemento a buscar es : {$ele} <br> ";
            echo "No existe el elemento ";
        }

    }


    //Arreglo con los elementos
    $comida = ["Pizza","Hamburguesas","Pupusas","Pastelitos","Pastelitos","Pizza","Pizza","Pizza"];
    //Elemento a buscar
    $elemento = "Pizza";

    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    verificar($comida,$elemento);
    echo "<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";



    //Arreglo con los elementos
    $comida = ["Carro","Motos","Barcos","Aviones","Bicicletas","Carro","Carro","Motos"];
    //Elemento a buscar
    $elemento = "Carro";

    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    verificar($comida,$elemento);
    echo "<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";


    //Arreglo con los elementos
    $comida = ["Computadoras","Laptops","Camaras","Microfonos","Auriculares","Computadoras","Computadoras","Laptops"];
    //Elemento a buscar
    $elemento = "Auriculares";

    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    verificar($comida,$elemento);
    echo "<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";

?>