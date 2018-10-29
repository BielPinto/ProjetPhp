<?php
$pessoa = array(
'nome '=> 'gabriel',
'idade'=> 24

);
//pessorenco o array 

foreach ($pessoa as &$value) {// efetuando a troca por referencia
	   //gettype verifica o tipo da variavel 
	if (gettype($value) === 'integer') $value += 10;
	echo $value.'<br>';
}

print_r($pessoa);

?>