<?php

for ($i = 0; $i < 1000; $i+=5){

	if($i > 200 && $i< 800) continue;//o comnaod continue serve para  enquanto a condição for vdd ele vai inguinorar a instrução do if que é o echo e 
	if ($i === 900 ) break; 

echo $i."<br>";

}


?>