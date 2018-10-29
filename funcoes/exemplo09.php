 <?php
// função recurcivas 
 $hierarquia = array (
 		array(

			 		'nome_cargo'=>'CEO',
			 		'subordinados'=>  array(
			 					//inicio: Diretor Comercial
			 					array(
				 						'nome_cargo'=> 'Diretor Comercial',
				 						'subordinados'=> array(
				 						//Inicio do Gerente de Vendas
				 						array (
				 								'nome_cargo'=> 'Gerente de Vendas'
				 						)
				 						// termino do Gerente de Vendas
			 				)
			 			),
			 			//Termio do Diretor Comercial
			 			// Inicio do Diretor Financeiro
			 			array(
				 				'nome_cargo'=>'Diretor Financeiro',
				 				'subordinados'=> array(
						 				//Inicio: Gerente de Contas a Pagar
						 				array(
						 						'nome_cargo'=>'Gerente de Contas a Pagar',
						 						'subordinados'=> array(
			 							//Inicio: Supervisor de Pagamentos
						 							array(
						 									'nome_cargo'=>'Supervisor de Pagamentos'
						 							)
			 							// Termio: Supervisor de Pagamentos
			 						)
			 					),
			 					//termio : Gerente de contas a Pagar
			 					//Inicio: Gerente de Compras
			 					array(
				 						'nome_cargo'=> 'Gerente de Compras',
				 						'subordinados' => array(
			 										//Inicio: Supervidor de Suprimentos
						 							array(
						 									'nome_cargo'=>'Supervisor de Suprimentos','subordinados'=>array(

						 											array('nome_cargo'=>'Funcionario','subordinados'=>array(

						 														array(
						 															'nome_cargo'=>'filhos'
						 														)
						 													)
							 										)
							 									)
 												)
				 							// Termio: Supervidor de Suprimentos
				 							)
				 					)
				 					//Termio: de Gerente de Compras

				 				)
				 			)
				 			//Termio: Diretor Financeiro 
				 		)
				 	)

 );

 function exibe($cargos){

		$html = '<ul>';
		foreach ($cargos as  $cargo) {

				$html.= "<li>";

				$html .= $cargo['nome_cargo'];

				if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

     $html .= exibe($cargo['subordinados']);
       
 	}  

				$html .= "</li>";

}

	$html.= "</ul>";

	return $html;


 }
 echo exibe($hierarquia);



?>
