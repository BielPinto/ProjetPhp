<?php
// array super globais 


// capturando dados vindo da url ?a = 123
$nome = (int)$_GET["a"];

//var_dump($nome);


// usando o $_SERVER para pergar informações do ambiente não só do servidor
$ip = $_SERVER["SCRIPT_NAME"];// ou SCRIPT_NAME"  ou REMOTE_ADDR entre outros no parametro para gerar logns

echo $ip;
?> 