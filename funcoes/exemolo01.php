<?php

function ola(){
	 
	//echo "Olá mundo!<br>";// aqui a função ja imprim o resultado 
	 return  "Olá mundo"; // aqui já retorna um string  / o returne me dar mais liberdade de usar a  string
}
 //ola(); // aqui não precisa do echo pois na propria função ja tem o echo 
//echo ola(); // como a função retorna uma string então é usado o echo 
	 echo ola();
		$frase = ola();
		echo "<br>";

		echo strlen($frase); // um exemplo para manupular o retorno da string da função usando o strlen para contar quando caracteres tem na variavel $frase
?>