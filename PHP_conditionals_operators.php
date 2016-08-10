<?php 

	// if - else
	$subject = "English";
	if($subject == "Math"){
		echo "The subject is Math";
	}else{
		echo "The subject is English";
	}
	

	// switch case

	$first_name = "Phil";
	$roles = array('programmer', 'Lawyer', 'Doctor');
	$role = 0;
	switch($first_name)
	{
		case 'Tom':
			$role = 1;
		break;

		case 'Phil':
			$role = 0;
		break;
	}
	echo "Hello $first_name ! Your job is to be $roles[$role]";


// == IS EQUAL TO
// != IS NOT EQUAL TO
// < LESS THAN
// > GREATER THAN
// <= LESS THAN OR EQUAL TO
// >=  GREATER THAN OR EQUAL TO
// !  NOT
// && AND
// || OR

 ?>
