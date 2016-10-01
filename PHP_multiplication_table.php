<!doctype <!DOCTYPE html>
<html>
	<head>
		<title>Multiplication Table</title>
		<!-- bootstrap -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


		<style type="text/css">
			td{
				padding: 10px;
				margin:10px;
				color:orange;
			}

			.shade{
				background-color: silver;
			}
		</style>
	</head>

	<body>




	<?php 
	$rows = 100; // amount of table rows
	$cols = 100;// amount of table columns

	echo "<table border='1'>"; 

	for($tr=1;$tr<=$rows;$tr++){ 
	     
	    echo "<tr>"; 
	        for($td=1;$td<=$cols;$td++){ 

	        	echo "<td align='center'>".$tr*$td."</td>";  
	               	//where multiplication happens
	        
	        } 
	    echo "</tr>"; 
	} 

	echo "</table>"; 
	?>


	</body>
</html>