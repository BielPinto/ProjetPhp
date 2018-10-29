<?php


class Carro{

	private $modelo;//atributo
	private $motor;//atributo
	private $ano;//atributo


		//metodo get pegar  e retornar o valor do atributo modelo 
	public function getModelo(){

		return $this->modelo;
	}
		//metodo set mudar o estado do atributo modelo não precisa de return 
			public function setModelo($modelo){

				$this->modelo = $modelo;
		} 
				
					// atributo motor recebendo get e set

					//metodo get pegar  e retornar o valor do atributo motor
		public function getMotor():float{

			return $this->motor;
	}
					//metodo set mudar o estado do atributo motor e não precisa de return 
					
				public function setMotor($motor){

			$this->motor = $motor;


}
					//atributo Ano recebendo get e set
						//metodo get pegar  e retornar o valor do atributo ano
			public function getAno():int{

						return $this->ano;
					}
						//metodo set mudar o estado do atributo ano não precisa de return 
				public function setAno($ano){

						$this->ano = $ano;
 			}

 			public function exibir(){

 				return array(
 					"modelo"=>$this->getModelo(),
 					"motor"=>$this->getMotor(),
 					"ano"=>$this->getAno(),


 				);
 			}

	}


$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor ("1.6");
$gol->setAno ("2007");
var_dump($gol->exibir());

?>