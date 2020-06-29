<?php



function multiplicacion($numeros){
    $result=0; 
        for($i=0;$i<count($numeros);$i++){
            if($result ==0){
                $result =$numeros[$i];
            }
            else{
                $result *= $numeros[$i];
            }
        }
        echo"El total de la multiplicación es : {$result}";
    }
    
    function multiplicacion2($numeros){
        $result=array_product($numeros);
        echo"El total de la multiplicación es : {$result}";
    }

    $numeros =[25,25,50];

    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    multiplicacion($numeros);
    echo "<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************";

    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";

    $numeros2 =[25,25,50,256,25.5];

    echo"**************************************<br>";
    echo"**************************************<br>";
    echo"**************************************<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    multiplicacion($numeros2);
    echo "<br>";
    echo"**************************************<br>";
    echo"**************************************<br>";
    echo"**************************************";

    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";
    
    $numeros3 =[25,25,50,256,25.5,653,458,858.5];

    echo"************************************************<br>";
    echo"************************************************<br>";
    echo"************************************************<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    multiplicacion($numeros3);
    echo "<br>";
    echo"************************************************<br>";
    echo"************************************************<br>";
    echo"************************************************";

?>