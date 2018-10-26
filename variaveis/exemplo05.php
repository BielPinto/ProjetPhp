<?php
// escopo de Variaveis
$nome = " gabriel ";

// comando funcion cria uma função em php 
function teste(){
	//  o Global é usado para a avariavel crianda fora da função seja enchergada dentro da função 
global $nome;
echo $nome;

}

function teste2(){


}
teste();

?>