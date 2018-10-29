<?php

// criado para armazena o nome da pessoa
class pessoa {

	public $nome;//atributo

	// metodo com mais 
	public function falar(){// metodo 

		return " o meu nome é ".$this->nome ; //$this é uma variaveis interna do php serve para chamar o atributo dentro do metodo

	}

}

$glaucio = new pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar(); 

?>