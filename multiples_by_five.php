<?php

function multiple_five($numbers, $factor){
	$fivers = array();
	foreach($numbers as $value){
		
		$fivers[] = $value * $factor;
		
	}
	return $fivers;
}

$numbers = array(5,10,11,12);
$factor = 5;

$multiplied = multiple_five($numbers, $factor);
var_dump($multiplied);

?>