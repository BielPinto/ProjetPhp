<?php
/*
define("SERVIDOR", "172.0.0.1");
echo SERVIDOR;*/

////////////
// UM ARRAY DE UM VARIAVEL CONSTANTE 
define("BANCO_DE_DADOS",[

 '172.0.0.1',
 'root',
 'password',
 'test'
],true);

print_r(BANCO_DE_DADOS);

?>