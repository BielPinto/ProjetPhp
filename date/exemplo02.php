<?php

//$ts = strtotime("2011-09-11");//strtotime pega o timestamp 
$ts = strtotime("now");// tambem aceita as expressões 
echo date("l,  d/m/Y", $ts);

?>