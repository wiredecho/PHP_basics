<!doctype html>
<html>
<head>
	<title>Drawing stars</title>
</head>
<body>
	


<?php

	function draw_stars($x){


		for($i=0; $i<count($x); $i++){
			for($j=$x[$i]; $j>0; $j--){
				echo "*";
			}
			echo "<br/>";
		}
		
	}

	$x = array(4,6,1,3,5,7,25);
	$output = draw_stars($x);


?>


</body>
