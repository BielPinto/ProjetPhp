<?php

// todo arrya inicia em zero 
// se um array tiver apenas um dimenção ele é chamado de vetos 
// se um arrary tiver duas dimenções ele é chamado de bidimencional 
//$frutas  =  array("laranja", "abacaxi","melancia");
//print_r($frutas);
/*
// arrays bdimencional
 $carro[0][0] = "GM";
 $carro[0][1] = "Cobalt";
 $carro[0][2] = "Onix";
 $carro[0][3] = "Camaro";

 $carro[1][0] = "Ford";
 $carro[1][1] = "Fusion";
 $carro[1][2] = "Fieta";
 $carro[1][3] = "Eco Sport";

 echo $carro[0][3]."<br>";

 // a função end significa traga a ultima dentro da posicição  
echo  end($carro[1]);*/

//outro exemplo de array bidimecional

$pessoas = array();
// adiciona um novo item no array apos o mesta ja esteja criado 
array_push($pessoas, array(
   'nome'=>'Glaucio',
   'idade'=>25
));
array_push($pessoas, array(
   'nome'=>'Gabriel',
   'idade'=>24
));
print_r($pessoas);

//print_r($pessoas[0]['nome']);





?>
