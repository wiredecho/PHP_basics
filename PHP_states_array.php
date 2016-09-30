<!DOCTYPE HTML>
<html>
<head>
	<title>States Array</title>
</head>
<body>



	<h1>for loop</h1>

	<!-- FOR LOOP -->
	<form>
		<select name="States">
		<?php  
			$states = array("CA", "WA", "VA", "UT", "AZ");

			for($i=0;$i<count($states); $i++){
				echo "<option value='".$states[$i] . "' >" .$states[$i]."</option>";
			}
		?>
		</select>
	</form>

	<h1>foreach</h1>

	<!-- FOREACH -->
	<form action="">
		<select name="" id="">
			<?php  
			$states = array("CA", "WA", "VA", "UT", "AZ");

			foreach($states as $state){
				echo "<option value='".$state . "' >" .$state."</option>";
			}
			?>




		</select>
	</form>


	




</body>
</html>