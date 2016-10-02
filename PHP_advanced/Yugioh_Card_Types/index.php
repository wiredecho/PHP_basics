<!doctype html>
<html>
	<head>
		<title>Types of Yu Gi Oh Cards</title>
		<style>
			fieldset{
				margin: 0 auto;
				width:250px;
				font-family:arial;
				padding:25px;
			}
			

		</style>
	</head>
	<body>
		<div>
			
			<fieldset>
				<h4>Select the Type of Card to View</h4>
				<form action="process.php" method="POST">
					
					<div>
						Type:<select name="type">

							<option value="monster">Monster</option>
							<option value="spell">Spell</option>
							<option value="trap">Trap</option>
							
						</select>
						
					</div>
					
					<div>
						<input type="submit" value="View">
					</div>
				</form>
			</fieldset>
		</div>
	</body>
</html>