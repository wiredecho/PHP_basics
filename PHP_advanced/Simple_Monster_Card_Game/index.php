<!DOCTYPE html>
<head>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script   src="http://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

	<link rel="stylesheet" href="style.css">

	<script>
		function flip() {
    		$('.card').toggleClass('flipped');
    		$i=rand(0,10);
			$j=rand(0,10);
		}

		
	</script>
</head>

<body>
	<div class="container">
		<div class="row">

		<?php
			
			$card = array("blue_eyes.jpg","celtic_guard.jpg","Hedgehog.png","kuriboh.png","monster_tamer.png","shark.png","time_wizard.jpg","gagagigo.jpg","dark_magician.jpg","maneater_bug.jpg","clock_resonator.png","monster_egg.jpg");

			
		?>
		
				<button onclick="flip()">flip the card</button>
				<a href="index.php"><button>Next Battle</button></a>

		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="card" onclick="flip()">
					<div class="front">
						<img src="img/back.png" width="100%"/>
					</div>
					<div class="back">
						<img src=img/<?= $card[$i] ?> width="100%"/>
					</div>
				</div>
			</div>
			<div class="col-md-3">
			<center><h1>VERSUS</h1></center>
			</div>
			<div class="col-md-3">
				<div class="card" onclick="flip()">
					<div class="front">
						<img src="img/back.png" width="100%"/>
					</div>
					<div class="back">
						<img src=img/<?= $card[$j] ?> width="100%"/>
					</div>
				</div>
			</div>
		</div>
		

			
				
		
			
	
		
	</div>
</body>