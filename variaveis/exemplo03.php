<?php

$nome = "Hcode";
$site = "wwww.Hcode.com.br";
// tipos de variavies
$ano = 1994;
$salario = 5550.99;
$bloqueado = false;
//////////////////////////
// criando um array 
$fruta  = array("abacaxi", "laranja", "manga" );

//echo $fruta[2];
// a palavra (new) sempre esta relacionado a orientação a Objeto 
/// o dataTIme com o esta vazio pega a data de agora 
$nascimento = new DateTime();

//var_dump($nascimento);
// chamando uma arquivo  fazendo a leitura  e retornando um tipo de dado resource
$arquivo = fopen("exemplo03.php", "r");
var_dump($arquivo);


// nulo é  auxencia de  valor, não existe e o (vazio) ele foi iniciado esta reservado na memoria mas nao tem conteudo

//echo $null;


?>