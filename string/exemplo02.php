<?php
 $nome = "gabriel pinto";

 // chamando uma função e dentro dos parentese significa que vc esta chamando a função e dento dos parenteses de passa os parametros 

 $nome =   strtoupper($nome); //strtoupper transforma a string em caixa alta
echo $nome;


 $nome = strtolower($nome);// strtolower  caixa baixa
echo "<br>";

echo $nome;


echo "<br>";

echo ucwords($nome);// tranforma a primeira letra das  palavras em  caixa alta

echo "<br>";

echo ucfirst($nome);// tranforma a primeira letra da palvra em  caixa alta


?>