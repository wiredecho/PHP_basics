<!doctype html>
<html>
<head>
	<title>css.php</title>
	<link rel="stylesheet" href="style.css.php">
	<script type="text/javascript" src="main.js.php"></script>
	<script src="htpps://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
	
	<h1>Heading</h1>
	<h2>I had no idea you could use PHP to create a CSS file or any other files than html!!!</h2>

	<?php
		for($i=0; $i<5;$i++){
			echo"<img src='image.php' alt=''></br>";
		}
	?>




</body>
</html>