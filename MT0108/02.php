<?php

    function suma($numeros){
        $result=0; 
        for($i=0;$i<count($numeros);$i++){
            $result +=$numeros[$i];
        }
        echo"El total de la suma es : {$result}";
    }


    $numeros =[25,25,50];

    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    suma($numeros);
    echo "<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************";

    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";

    $numeros2 =[25,25,50,256,25.5];

    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    suma($numeros2);
    echo "<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************";

    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";
    
    $numeros3 =[25,25,50,256,25.5,653,458,858.5];

    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    suma($numeros3);
    echo "<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************";

?>