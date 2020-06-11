<?php

    $frase = "MuRciELaGo";

    for($i =0; $i < strlen($frase);){
       if($frase[$i] == "m" || $frase[$i] == "M"){

           $frase = str_replace($frase[$i], "0", $frase);
           $i++;
       }
       elseif($frase[$i] == "u" || $frase[$i] == "U"){
            $frase = str_replace($frase[$i], "1", $frase);
            $i++;
        }
        elseif($frase[$i] == "r" || $frase[$i] == "R"){
            $frase = str_replace($frase[$i], "2", $frase);
            $i++;
        }
        elseif($frase[$i] == "c" || $frase[$i] == "C"){
            $frase = str_replace($frase[$i], "3", $frase);
            $i++;
        }
        elseif($frase[$i] == "i" || $frase[$i] == "I"){
            $frase = str_replace($frase[$i], "4", $frase);
            $i++;
        }
        elseif($frase[$i] == "e" || $frase[$i] == "E"){
            $frase = str_replace($frase[$i], "5", $frase);
            $i++;
        }
        elseif($frase[$i] == "l" || $frase[$i] == "L"){
            $frase = str_replace($frase[$i], "6", $frase);
            $i++;
        }
        elseif($frase[$i] == "a" || $frase[$i] == "A"){
            $frase = str_replace($frase[$i], "7", $frase);
            $i++;
        }
        elseif($frase[$i] == "g" || $frase[$i] == "G"){
            $frase = str_replace($frase[$i], "8", $frase);
            $i++;
        }
        elseif($frase[$i] == "o" || $frase[$i] == "O"){
            $frase = str_replace($frase[$i], "9", $frase);
            $i++;
        }
        else{
            $i++;
        }
       
         
   }
   echo "La traducción de español a murcielago es : ". $frase;

?>