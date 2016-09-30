<?php



function compute_average($array){
	$number_of_values = count($array);
	$total = 0;

	//iterate over the array so that $total=the sum of all elements
	foreach ($array as $value){
		$total = $total + $value;
		echo $total.'<br>';
	}
	//actual average algo
	$average = $total / $number_of_values;
	return $average;
}


$numbers = array(34,5,777,33,4,5);
$average = compute_average($numbers);
echo "The average is: ".$average;

?>