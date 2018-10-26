<?php
 $total = 150;
 $desconto = 0.9;
// o do while executa pelo menos uma vez e se for usar numero tem que colocar um contador para nao entrar em loop infinito
do{
	$total *= $desconto;


}while ($total > 100);

echo $total;

?>