<?php


    function pares($ar1,$ar2){

        echo "Los elementos del arreglo 1 son :<br>";
        echo "\"";
        foreach($ar1 as $a1){
            echo $a1." -  ";
        }
        echo"\"";
        echo "<br>";
        echo "Los elementos del arreglo 2 son :<br>";
        echo "\"";
        foreach($ar2 as $a2){
            echo $a2." -  ";
        }
        echo"\"";
        echo "<br>";

        for($i=0;$i<count($ar1);$i++){
            if (in_array($ar1[$i],$ar2)) {
                for($j=0;$j<count($ar2);$j++){
                    if($ar2[$j]==$ar1[$i]){
                        echo "La posición {$i} del primer arreglo coincide con la posición {$j}
                         del segundo<br>";
                    }
                }
            }else{
                echo "La posición {$i} del primer arreglo no coincide con
                 ninguna posición del segundo<br>";
            }
        }
    }



    $array1 = ["a","e","i","o","u"];
    $array2 = ["u", "a", "i", "o"];


    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    pares($array1,$array2);
    echo "<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";




    $array3 = ["a","e","i","o","u"];
    $array4 = ["u","a","i","o","e"];


    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    pares($array3,$array4);
    echo "<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";


    $array5 = ["a","e","i","o","u"];
    $array6 = ["A","E","I","O","U"];


    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    pares($array5,$array6);
    echo "<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";

?>