<!DOCTYPE html>
<html>
	<head>
		<title>HTML TABLE PHP</title>
		<!-- bootstrap -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


		
	</head>

	<style>
		td,th{
			padding:10px;
		}
	</style>

	<body>

	<div class="container">


	<?php

		$users = array(
			array('first_name' => 'Philip', 'last_name'=> 'Lee'),
			array('first_name' => 'Bella', 'last_name'=>'Lau'),
			array('first_name' => 'Kelvin', 'last_name'=>'Luu'),
			array('first_name' => 'John', 'last_name'=> 'Stevens'),
			array('first_name' => 'Peter', 'last_name'=>'Paulson'),
			array('first_name' => 'Kevin', 'last_name'=>'Kim'),
			array('first_name' => 'Robert', 'last_name'=> 'Lee'),
			array('first_name' => 'Rudy', 'last_name'=>'Lau'),
			array('first_name' => 'Terrance', 'last_name'=>'Luu'),
			array('first_name' => 'Nick', 'last_name'=> 'Stevens'),
			array('first_name' => 'Victor', 'last_name'=>'Paulson'),
			array('first_name' => 'Kenny', 'last_name'=>'Kim')
		);



		echo "<table border='1' align='center'>";

		echo"<tr>";
			echo "<th align='center'></th>";  
	      	echo "<th align='center'>First Name</th>"; 
	        echo "<th align='center'>Last Name</th>";
	        echo "<th align='center'>Full Name in Upper Case</th>";
	        echo "<th align='center'>Length of Last name</th>";


		echo"</tr>";

		for($tr=1;$tr<=count($users);$tr++){ 
		     
		    echo "<tr>"; 
		        
	    		//this will echo the row number.
	        	echo "<td align='center'>".$tr."</td>";  
	      		echo "<td align='center'>".$users[$tr-1]['first_name']."</td>"; 
	        	echo "<td align='center'>".$users[$tr-1]['last_name']."</td>"; 
	        	echo "<td align='center'>".strtoupper($users[$tr-1]['first_name'])." ".strtoupper($users[$tr-1]['last_name'])."</td>"; 
	        	echo "<td align='center'>".strlen($users[$tr-1]['last_name'])."</td>"; 
		       
		    echo "</tr>"; 
		} 

		echo "</table>"; 
	?>
	</div>

	</body>
</html>