<?php


    function rango($inicio, $fin, $num){
        $texto = "Rango no valido el valor inicial es mayor al valor final";
        for($i=$inicio;$i<=$fin;$i++){
            if($i == $num){
                $texto ="El número {$num} se encuentra en el rango aignado ";
            break;
            }else{
                $texto ="El número {$num} no se encuentra en el rango aignado ";
            }

        }
        echo "Rngo : del " . $inicio . " a " . $fin . "<br>";
        echo "Número a verificar: {$num}<br>";
        echo $texto;

    }
    // al utilizar esta función cuando el inicio es mayor al final siempre 
    // pondra que el número se encuentra en el rango asignado
    function rango2($inicio, $fin, $num){
        $texto = "Rango no valido el inicio es mayor al final";

        if ( in_array($num, range($inicio,$fin)) ) {
            $texto ="El número {$num} se encuentra en el rango aignado ";
        }else{
            $texto ="El número {$num} no se encuentra en el rango aignado ";
        }
        echo "Rngo : del " . $inicio . " a " . $fin . "<br>";
        echo "Número a verificar: {$num}<br>";
        echo $texto;

    }

    if ( in_array(2, range(1,7)) ) {
        echo 'Number 2 is in range 1-7';
    }
    

    //ingrese el rango de los numeros 
    //el valor inicial deve ser menor al valor final
    $inicio = 10;
    $fin = 15;
    //ingrese el número a verificar en el rango asignado
    $num = 15;
    
    
    echo"****************************************<br>";
    echo"****************************************<br>";
    echo"****************************************<br>";
    rango($inicio, $fin, $num);
    echo "<br>";
    echo"****************************************<br>";
    echo"****************************************<br>";
    echo"****************************************";
    
    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";
    
    ////////////////////////////////////////////////////////////////////////////
    
    //ingrese el rango de los numeros 
    //el valor inicial deve ser menor al valor final
    $inicio1 = 0;
    $fin1 = 25;
    //ingrese el número a verificar en el rango asignado
    $num1 = 36;


    echo"****************************************<br>";
    echo"****************************************<br>";
    echo"****************************************<br>";
    rango($inicio1, $fin1, $num1);
    echo "<br>";
    echo"****************************************<br>";
    echo"****************************************<br>";
    echo"****************************************";

    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";


    ////////////////////////////////////////////////////////////////////////////
    
    //ingrese el rango de los numeros 
    //el valor inicial deve ser menor al valor final
    $inicio2 = 1000;
    $fin2 = 25;
    //ingrese el número a verificar en el rango asignado
    $num2 = 36;


    echo"******************************************<br>";
    echo"******************************************<br>";
    echo"******************************************<br>";
    rango($inicio2, $fin2, $num2);
    echo "<br>";
    echo"******************************************<br>";
    echo"******************************************<br>";
    echo"******************************************";

    echo "<br>";echo "<br>";
    echo "<hr>";
    echo "<br>";echo "<br>";


    ?>