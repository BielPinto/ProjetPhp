<?php

$frase = "A repetição é a mãe da retenção ";

$palavra = "mãe";

$q = strpos($frase,$palavra); // strpos conta quantos caracteres tem até a palavra mãe

$texto = substr($frase, 0, $q); // retira e armazena os caractere de 0 da frase até 19  (q)

//var_dump($q); // aqui é impresso 19 pois é a quantidade de caracter até a palavra mãe 
var_dump($texto);
//str de string e len de contar ou seja contar string
$texto2 = substr($frase, $q + strlen($palavra),strlen($frase));
echo "<br>";
var_dump($texto2);


?>