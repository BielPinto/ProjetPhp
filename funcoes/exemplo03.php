<?php
// usando parametros 


function ola($texto, $periodo ="bom dia"){

	return "olá $texto! $periodo! <br>";
}

echo ola("mundo");
echo ola("","boa tarde");
echo ola("Glaucio","boa tarde!");
echo ola("João","");

?>
