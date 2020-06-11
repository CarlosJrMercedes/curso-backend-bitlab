<?php

    $a = rand(0,8);
    $b = rand(0,8);
    $libros = ["Dracula","El bosque de Harlan Coben", 
    "El misterio de la laguna negra de Thomas H. Cook", "La chica del tren de Paula Hawkins",
     "Misery de Stephen King","Los padecientes de Gabriel Rolón",
     "El resplandor, Stephen King","Cuentos completos de Allan Poe"] ;


     echo "<b>Usted devera leer los sioguientes libros :</b> <br><br>";
     if($a<$b)
    {
        for($i=$a;$i<$b;$i++){
            
            echo "-".$libros[$i]."<br>";
        }
    }
    elseif($a==$b){
        for($i=0;$i<$b;$i++){
            
            echo "-".$libros[$i]."<br>";
        }
    }
    else{
        for($i=$b;$i<$a;$i++){
            echo "-".$libros[$i]."<br>";
        }
    }

?>