<?php
    $d = rand(20,35);

    for($i =1; $i <=$d ; $i++){
        if($i == 1){
            echo $i ." OVEJITA<br>";
        }
        else{
            echo $i ." OVEJITAS<br>";
        }
        if($i == $d){
             echo ".zZ .zZ .zZ";
        }
    }


?>