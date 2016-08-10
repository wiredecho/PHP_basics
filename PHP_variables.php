<!-- HOW TO SET VARIABLES IN PHP -->


<?php 
	$first_name = 'Phil';
	$last_name = 'Lee';


	$occupation = 'Web Developer';

	// DOUBLE QUOTES WILL RECOGNIZE VARIABLES
	echo "My name is $first_name $last_name and my occupation is $occupation.";

	// SINGLE QUOTES HERE IS THE PROPER METHOD OF PLACING VARIABLES.
	echo 'My name is ' . $first_name . ' ' . $last_name . 'and my occupation is ' . $occupation;


	// INTEGER AND EQUATIONS
	$num1 = 7;
	$num2 = 8;
	$result = $num1 + $num2;
	echo $result;


	// PREDEFINED VARIABLES SAMPLE
	echo $_SERVER['DOCUMENT_ROOT'];
?>