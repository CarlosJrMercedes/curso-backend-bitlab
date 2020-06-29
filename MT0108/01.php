<?php

    function numeros($op,$n1,$n2,$n3){
        if($op == "y"){

            if($n1 > $n2){
                if($n1 > $n3){
                    echo"El número mayor es: {$n1}";
                }else{
                    echo"El número mayor es: {$n3}";
                }
            }else{
                if($n2 > $n3){
                    echo"El número mayor es: {$n2}";
                }else{
                    echo"El número mayor es: {$n3}";
                }
            }


        }else{
            if($op == "n"){
                if($n1 < $n2){
                    if($n1 < $n3){
                        echo"El número menor es: {$n1}";
                    }else{
                        echo"El número menor es: {$n3}";
                    }
                }else{
                    if($n2 < $n3){
                        echo"El número menor es: {$n2}";
                    }else{
                        echo"El número menor es: {$n3}";
                    }
                }
            }
            else{
                echo"LA OPCIÓN ELEGIDA NO ES CORRECTA";
            }
        }

    }
    //Seleccion de acción ver mayor o menor....
    //Si desea ver el numero mayor coloque la letra " y " en minuscula
    //Si desea ver el numero menor coloque la letra " n " en minuscula
    $op ="";

    //Accicnación de numeros a evaluar...
    $n1 =250;//ingrese el primer número a evaluar 
    $n2 =249;//ingrese el segundo número a evaluar
    $n3 =251;//ingrese el tercer número a evaluar

    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    numeros($op,$n1,$n2,$n3);
    echo "<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************";
    echo "<hr>";
    echo "<br>";echo "<br>";
    echo "<br>";echo "<br>";
    //Seleccion de acción ver mayor o menor....
    //Si desea ver el numero mayor coloque la letra " y " en minuscula
    //Si desea ver el numero menor coloque la letra " n " en minuscula
    $op1 ="y";

    //Accicnación de numeros a evaluar...
    $nu1 =250;//ingrese el primer número a evaluar 
    $nu2 =249;//ingrese el segundo número a evaluar
    $nu3 =251;//ingrese el tercer número a evaluar

    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    numeros($op1,$nu1,$nu2,$nu3);
    echo "<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************";

    echo "<hr>";

    echo "<br>";echo "<br>";
    echo "<br>";echo "<br>";
    //Seleccion de acción ver mayor o menor....
    //Si desea ver el numero mayor coloque la letra " y " en minuscula
    //Si desea ver el numero menor coloque la letra " n " en minuscula
    $op2 ="n";

    //Accicnación de numeros a evaluar...
    $num1 =250;//ingrese el primer número a evaluar 
    $num2 =249;//ingrese el segundo número a evaluar
    $num3 =251;//ingrese el tercer número a evaluar

    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    numeros($op2,$num1,$num2,$num3);
    echo "<br>";
    echo"*********************************<br>";
    echo"*********************************<br>";
    echo"*********************************";


?>