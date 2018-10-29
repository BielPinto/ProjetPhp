 <?php
function soma(int ...$valores):string {

// o array_sum soma os array ou outra forma de é o forecht
	return array_sum($valores);


}

var_dump(soma(2,2));
echo "<br>";
echo soma (25,33);
echo "<br>";
echo soma (1.5,3.2);
echo "<br>";

?>
