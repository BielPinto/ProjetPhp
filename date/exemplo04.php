<?php
//usando classe para data pois tras mais funções 
$dt = new DateTime();
$periodo = new date_interval_format("PI5D");

echo $dt->format ("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s"); 


?>