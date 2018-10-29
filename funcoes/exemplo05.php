<?php
//passagem de parametro por referenica 
$a = 10;
  // toda vez que tem o & é uma passagen de pametro por referencia
function trocaValor(&$b){
$b = $b+ 50;

return $b;

}

echo trocaValor($a);// aqui a variavel ja recebeu 50 estaca como 60 
echo "<br>";
echo $a;// e já foi alterarda de 10 para 60 tbm por conta do &
echo "<br>";
echo trocaValor($a); // aqui é enviada com 60 e receve mais 50  que fica 110
echo "<br>";
echo $a;// e já foi alterarda de 10 para 60 tbm por conta do &
;





?>