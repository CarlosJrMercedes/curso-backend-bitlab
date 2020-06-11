<?php

$Abecedario = abs(ord('A')-ord('a'));
for ($c=65;$c<=90;$c++) {
  echo chr($c)." ".chr (abs($c+$Abecedario))."<br>";                 
}

?>