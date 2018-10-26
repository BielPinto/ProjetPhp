<?php

$meses = array(
"janeiro", "fevereiro", "março",
"Abril","Maio","junho",
 "Julho","Agosto", "Setembro",
"Outubro", "Novembro","Dezembro"
);
// o foreach para cada item dentro da variaveis repita uma determinada instrução  (para cada item faça )

foreach ($meses as$index =>$mes) {

	echo"indece".$index."<br>";
    echo "O mês é :" .$mes."<br><br>";
}


?>