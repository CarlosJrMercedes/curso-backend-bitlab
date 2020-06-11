<?php


$encuesta =["si","no","si","no","si","no","si","no","si","no","si","no","si","no","si","no"];

$longitud = count($encuesta);
$porcentajeSi = 0;
$porcentajeNo = 0;

for($i = 0;$i < count($encuesta);$i++){

    if($encuesta[$i] == "si" || $encuesta == "SI" || 
    $encuesta == "Si" || $encuesta == "sI"){
        $porcentajeSi++;
    }elseif($encuesta[$i] == "no" || $encuesta == "NO" || 
    $encuesta == "No" || $encuesta == "nO"){
        $porcentajeNo++;
    }
}

$totalPorcentajeSi= ($porcentajeSi*100)/$longitud;
$totalPorcentajeNo= ($porcentajeNo*100)/$longitud;

echo "el total de respuestas cerradas fueron : ".$longitud."<br>";
echo "el porcentaje de respuestas SI es : ".$totalPorcentajeSi."%<br>";
echo "el porcentaje de respuestas NO es : ".$totalPorcentajeNo."%<br>";


?>