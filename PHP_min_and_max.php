<!doctype html>
<html>
<head>
	
</head>
<body>
	


<?php

	function get_max_and_min($numbers){
		$results['max'] = $numbers[0];
		$results['min'] = $numbers[0];


		for($i=0; $i<count($numbers); $i++){
			if($results['max']<$numbers[$i]){
				$results['max']=$numbers[$i];
			}elseif($results['min']>$numbers[$i]){
				$results['min']=$numbers[$i];
			}
		}
		return ($results);
	}

	$numbers= array(1,4,5,6,33,5,3,33,32,114);
	$output = get_max_and_min($numbers);
	var_dump($output);

?>

<h2>The largest number is <?= $output['max'] ?> </h2>
<h2>The smallest number is <?= $output['min'] ?> </h2>
</body>
