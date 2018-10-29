<?php
// função atonimas

function test($callback){

// Processo lento

	$callback();

}


test(function(){

echo "teminou";

});


?>