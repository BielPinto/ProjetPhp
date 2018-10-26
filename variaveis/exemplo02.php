<?php
// mostrando melhor forma de dar nume a variaveis para ficar mais intuitiva
$anoNascimento = 1994;

// linha de baixo temos uma variavel com numero no nome
$nome1 ="Gabriel";

$sobrenome = "Rocha";
// concatenanod duas variaveis
$nomeCompleto = $nome1." ".$sobrenome;

echo $nomeCompleto;
echo "<br/>";

// unset-->  destroi a variavel da memoria 
//unset($nome1); 
// isset serve para saber se a variavel existe na memoria 
if (isset($nome1))
{

echo $nome1;
}


?>