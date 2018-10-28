<?php

$json = '[{"nome":"Glaucio","idade":25},{"nome":"Gabriel","idade":24}]';


$data = json_decode($json,true);

var_dump($data);
?>