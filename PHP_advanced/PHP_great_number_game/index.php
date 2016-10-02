<?php 
  session_start();
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Great Number Game</title>

	<!-- USED MATERIALIZE FOR STYLING FRAMEWORK -->
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

	<style type="text/css">
		#container {
			width: 650px;
			height: 700px;
			margin: 0 auto;
		}

		.box {
			width: 600px;
			height: 40px;
			text-align: center;
			font-weight: bolder;
		}
		.box.green {
			background-color: green
		}

		.box.red {
			background-color: red;
		}
	</style>
</head>
<body>
	<div id="container">
		<div id="top">
			<h1>Welcome to the great number game</h1>
			<h5>I am thinking of a number between 1 and 100</h5>
			<h4>Please take a guess</h3>
		</div>

	<?php 
	    if(isset($_SESSION['low'])){
			echo $_SESSION['low'];
			unset($_SESSION['low']);
	    }

	    if(isset($_SESSION['high'])){
			echo $_SESSION['high'];
			unset($_SESSION['high']);
	    }

	    if(!isset($_SESSION['correct'])){
	?>      
		<div>
			<form action="process.php" method="post">
				<input type="text" name="guess">
				<center><input class="btn-floating btn-large waves-effect waves-light red"type="submit" value="Submit"></center>
			</form>
		</div>
		<?php
	    }else{
			echo $_SESSION['correct'];
			unset($_SESSION['correct']);
	    }
	?>  
	</div>

</body>
</html>