<?php

    function buscarLetra($caracteres,$letra){
        $frase = "";
        if(in_array($letra, $caracteres)){
            $frase = "La letra \"{$letra}\" si se encuentra en el arreglo";

        }else{
            $frase = "La letra \"{$letra}\" no se encuentra en el arreglo";
        }
        echo "Los caracteres del arreglo son :<br>";
        echo "\"";
        foreach($caracteres as $c){
            echo $c."  , ";
        }
        echo"\"";
        echo "<br>";
        echo $frase;
    }



    //vector de caracteres
    $caracteres = ["A","e","i","O","U"];
    // letra a buscar
    $letra = "o"; 

    echo"****************************************<br>";
    echo"****************************************<br>";
    echo"****************************************<br>";
    buscarLetra($caracteres,$letra);
    echo "<br>";
    echo"****************************************<br>";
    echo"****************************************<br>";
    echo"****************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";

    //vector de caracteres
    $caracteres1 = ["A","e","i","O","U","o","a"];
    // letra a buscar
    $letra1 = "o"; 

    echo"****************************************<br>";
    echo"****************************************<br>";
    echo"****************************************<br>";
    buscarLetra($caracteres1,$letra1);
    echo "<br>";
    echo"****************************************<br>";
    echo"****************************************<br>";
    echo"****************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";
    

    //vector de caracteres
    $caracteres2 = ["A","e","i","O","U","o","a"];
    // letra a buscar
    $letra2 = "A"; 

    echo"****************************************<br>";
    echo"****************************************<br>";
    echo"****************************************<br>";
    buscarLetra($caracteres2,$letra2);
    echo "<br>";
    echo"****************************************<br>";
    echo"****************************************<br>";
    echo"****************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";
   
?>