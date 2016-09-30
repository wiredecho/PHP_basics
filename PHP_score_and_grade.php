<!DOCTYPE HTML>
<html>
<head>
	<title>Score & Grade PHP</title>
</head>
<body>


<?php  


	function display_score(){

		$score = rand(50,100);

		if($score <70){
			$grade = "D";
		}elseif($score>=70 and $score <80){
			$grade = "C";
		}elseif($score >=80 and $score < 90){
			$grade = "B";
		}elseif($score >=90){
			$grade = "A";
		}

		echo "<h1>Your score: " . $score . "</h1>";
		echo "<h3>Your grade is " . $grade . "</h3>";
	}

	for($i = 1 ; $i<101 ; $i++){
		echo "Student " . $i . ":";
		display_score();
	}




?>
</body>
</html>