<!doctype html>
<html>
	<head>
		<title>Pokemons owned by Jack</title>
		<style>
			fieldset{
				margin: 0 auto;
				width:400px;
				font-family:arial;
				padding:25px;
			}
			img{
				
				width:50%;
				margin-left:auto;
				margin-right:auto;

			}

		</style>
	</head>
	<body>
		<div>
			<fieldset>
				<h1>This is a <?= $_POST['type'] ?> card</h1>
				<?php
					if($_POST['type']=="monster"){
						?><img src='img/monster.jpg'><?;
					}elseif($_POST['type']=="spell"){
						?><img src='img/spell.jpg'><?;
					}else{
						?><img src='img/trap.png'><?;
					}
				?>
				<br/>
				<a href="index.php"><button>return</button></a>
			</fieldset>
		</div>
	</body>
</html>