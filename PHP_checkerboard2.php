<!doctype <!DOCTYPE html>
<html>
	<head>
		<title>Checkerboard</title>
		<!-- bootstrap -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


		<style type="text/css">
			

			.black{
				background-color: black;
				width:25px;
				height:25px;
		
			}

			.red{
				background-color:red;
				width:25px;
				height:25px;

			}

		</style>
	</head>

	<body>


	<div class="container">

		<table>
			<tbody>

		<?php 

				for($tr=0;$tr<=8;$tr++){ 
				     echo"<tr>";

				     for($col=0;$col<=8;$col++){

				    	if($col%2 == $tr%2){ 

				        	echo "<td class='red'></td>";
				        	
				         
				        }else{
				        	echo "<td class='black'></td>";
				        	
				        }
				   	}
			        echo "</tr>";
				} 
			?>
			</tbody>
		</table>
	</div>


	</body>
</html>