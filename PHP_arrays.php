<?php

	// SETTING AN ARRAY
	$students = array();
	$students[] = "Phil";
	$students[] = "Bella";
	$students[] = "Khoa";
	$students[] = "Stephanie";

	$instructors= 	array(
						array("Lance", "MEAN Stack"),
						array("Eduardo", "RUBY"),
						array("Chris", "LAMP"),
						array("Kelvin", "MEAN Stack")
					);

	// ASSOCIATIVE ARRAY
	$class = array("course" => "HTML Fun", "course_number" => 101);
	echo $class["course"] . ' ' . $class["course_number"] . "<br>";
	echo $class["course_number"] . "<br>";


	// REFERENCING THROUGH THE ARRAY
	echo "This is student 0: " . $students[0] . ' ' . $instructors[0][1] . '<br>';
	echo "This is student 1: " . $students[1] . ' taught by ' . $instructors[2][0] . '<br>';
	echo "This is student 2: " . $students[2] . ' is enjoying ' . $instructors[1][1] . '<br>';
	echo "This is student 3: " . $students[3] . ' is now teaching ' . $class["course"] .'<br>' . '<br>';


	var_dump($students);
	var_dump($instructors);
	var_dump($class);

 ?>
