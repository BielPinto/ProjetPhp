<?php
$qualASuaIdade = 125;

$idadeCrianca = 12; 
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca){ 

echo "criança";

}else if($qualASuaIdade < $idadeMaior){

	echo "Adolecente";
}else if($qualASuaIdade < $idadeMelhor){

echo "adulto";


}else {// exite um regra para o else ele só pode existir uma vez dentro do if 

echo "idoso ";

}


echo "<br>";
// usando o opetador ternario       se for vdd mostra menor senao  maior
echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de Idade";


?>