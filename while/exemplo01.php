<?php 

$condicao = true; 

while ( $condicao ){

$numero = rand(1,10);//  rand cria  numeros aletarios 
		if($numero ==3){

			echo"TRÊS!!";
			$condicao = false;
		} 
		echo $numero." ";
}
?>