<?php
$diaDaSemana = date("5");

echo $diaDaSemana;

//switch server quando eu já sei as opçoes desejadas 
switch ($diaDaSemana) {
	case 0:
	echo "Domingo";
	break;
	case 1:
	echo "segunda-feria";
	break;

	case 2:
	echo "Terça feira";
   	break;
	case 3:
	echo "Quarta-feira";
    break;
	case 4:
	echo "Quinta-feira";
	break;
	case 5:
	echo "Sexta-feira";
	break;

	case 6:
	echo "sabado";
	break;
	default :
	echo "data invalida";
	break;
}


?>