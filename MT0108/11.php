<?php

    function paresInpares($ar, $soli){
        if($soli == "1"){
            echo "Los elementos en indices pares son :<br>";
            for($i=0;$i<count($ar);$i++){
                if($i % 2 ==0){
                    echo $ar[$i] ."<br>"; 
                }
            }
        }else{
            if($soli == "2"){
                echo "Los elementos en indices inpares son :<br>";
                for($i=0;$i<count($ar);$i++){
                    if($i % 2 !=0){
                        echo $ar[$i] ."<br>"; 
                    }
                }
            }else{
                echo "Solicitud no valida procure colocar una opción valida";
            }
        }
    }



    //Arreglo con los elementos
    $elementos = ["Pizza","Hamburguesas","Pupusas","Pastelitos","Pastelitos","Pizza","Pizza","Pizza"];
    //Si desea ver los valores en indices pares coloque "1"
    //Si desea ver los valores en indices inpares coloque "2"
    $solicitud = "2";

    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    paresInpares($elementos,$solicitud);
    echo "<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";


    //Arreglo con los elementos
    $elementos = ["Pizza","Hamburguesas","Pupusas","Pastelitos","Pastelitos","Pizza","Pizza","Pizza"];
    //Si desea ver los valores en indices pares coloque "1"
    //Si desea ver los valores en indices inpares coloque "2"
    $solicitud = "1";

    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    paresInpares($elementos,$solicitud);
    echo "<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";


    //Arreglo con los elementos
    $elementos = ["Pizza","Hamburguesas","Pupusas","Pastelitos","Pastelitos","Pizza","Pizza","Pizza"];
    //Si desea ver los valores en indices pares coloque "1"
    //Si desea ver los valores en indices inpares coloque "2"
    $solicitud = "5";

    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    paresInpares($elementos,$solicitud);
    echo "<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************<br>";
    echo"***************************************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";

?>