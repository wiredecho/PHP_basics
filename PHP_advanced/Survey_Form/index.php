<!doctype html>
<html>
	<head>
		<title>Pokemons owned by Jack</title>
		<style>
			form{
				margin: 0 auto;
				width:250px;
				font-family:arial
				padding:25px;
			}
			fieldset{
				width:400px;
				margin: 0 auto;

			}

		</style>
	</head>
	<body>
		<div>
			<fieldset>
				<form action="process.php" method="POST">
					<div>
						Name:<input type="text" name="Name">
					</div>
					<div>
						Type:<input type="text" name="Type">
					</div>
					<div>
						Comments:<br/><textarea name="cp" rows="10" cols="30"></textarea>
					</div>
					<div>
						<input type="submit" value="Submit">
					</div>
				</form>
			</fieldset>
		</div>
	</body>
</html>