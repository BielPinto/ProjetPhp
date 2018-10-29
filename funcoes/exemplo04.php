<?php
//passagens deparametros por valor


function  ola(){

$argumentos = func_get_args();// recupera todos os argumentos da variavel que é um array 
return  $argumentos;
}
echo "<pre>";
// aqui vc pode add varios  indices 
var_dump(ola("bom dia", 10));
?>