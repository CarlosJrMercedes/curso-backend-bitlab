<?php

$word = "2020";
$total=0;
if($word % 2 ==0)
{   
    for($i =0; $i < strlen($word);$i++){
       
         $total +=$word[$i];
          
    }
    echo "El número es : ".$word."<br>";
    echo "La suma del número entero es : ". $total;
}
else{
    echo "El número no es entero";
}


?>