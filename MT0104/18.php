<?php

    $n1=3;
    $n2=8;
    $mcm=0;

    for($i=1;$i<=12;$i++){
        for($o=1;$o<=12;$o++){

            $r1=$n1*$i;
            $r2=$n2*$o;
            if($r1 == $r2){
                $mcm =$r1;
                $o=100;
                $i=100;

            }
        }
    }

    echo "El minio  comun multiplo entre {$n1} y {$n2} es : ". $mcm;
?>