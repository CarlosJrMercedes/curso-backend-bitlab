<?php

    $frase = "0123456789";

    for($i =0; $i < strlen($frase);){
       if($frase[$i] == "0"){

           $frase = str_replace($frase[$i], "m", $frase);
           $i++;
       }
       elseif($frase[$i] == "1"){
            $frase = str_replace($frase[$i], "u", $frase);
            $i++;
        }
        elseif($frase[$i] == "2"){
            $frase = str_replace($frase[$i], "r", $frase);
            $i++;
        }
        elseif($frase[$i] == "3"){
            $frase = str_replace($frase[$i], "c", $frase);
            $i++;
        }
        elseif($frase[$i] == "4"){
            $frase = str_replace($frase[$i], "i", $frase);
            $i++;
        }
        elseif($frase[$i] == "5"){
            $frase = str_replace($frase[$i], "e", $frase);
            $i++;
        }
        elseif($frase[$i] == "6"){
            $frase = str_replace($frase[$i], "l", $frase);
            $i++;
        }
        elseif($frase[$i] == "7"){
            $frase = str_replace($frase[$i], "a", $frase);
            $i++;
        }
        elseif($frase[$i] == "8"){
            $frase = str_replace($frase[$i], "g", $frase);
            $i++;
        }
        elseif($frase[$i] == "9"){
            $frase = str_replace($frase[$i], "o", $frase);
            $i++;
        }
        else{
            $i++;
        }
       
         
   }
   echo "La traducción de murciela a español es : ". $frase;

?>