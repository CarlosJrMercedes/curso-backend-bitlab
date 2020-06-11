<?php

$frase = "bocina";
$pares = "";
$inPares = "";

for($i =0; $i < strlen($frase);$i++){
    if($i % 2 == 0){
        $pares .=$frase[$i];
    }
    else{
        $inPares .=$frase[$i];
    }
}
echo "la frase  es : ".$frase."<br>";
echo "Las letras en indices pares son : ".$pares;
echo "<br>";
echo "Las letras en indices inpares son : ".$inPares;




?>