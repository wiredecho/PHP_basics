<!-- PSEUDO CODE FOR FOR LOOP -->
<!-- for (initialize a counter; conditional statement; increment a counter) {
    run this code;
} -->

<?php  

	// Prints "hello world 10 times"
	for($i = 0; $i <= 10; $i++) {
	    echo "Hello World! <br>";
	}



// Foreach Loop
// The foreach loop works only on arrays, and is used to loop through each key/value pair in an array. In plain English, a foreach loop works like this:

// For each value in the specified array, execute this code.
// While the for loop will continue until some condition fails, the foreach loop will continue until it has gone through every item in the array. This is the second most common loop you'll use.


	// SETTING AN ARRAY
	$students = array();
	$students[] = "Phil";
	$students[] = "Bella";
	$students[] = "Khoa";
	$students[] = "Stephanie";

	foreach($students as $student) {
    	echo "$student <br>";//execute code;
	}


	// While loop

	$i = 0;
	while( $i < 10 ){
    	echo $i;
    	$i++;
	}




	// Do...While Loop


	$i = 0;
	do{
    	echo $i;
    	$i++;
	}while($i < 10);

?>