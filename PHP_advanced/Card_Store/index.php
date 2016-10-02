<!doctype html>
<html>
	<head>
		<title>Yu Gi Oh Cards for Sale</title>
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
						Your Name:<input type="text" name='name'/>
					</div>
						<div>Email: <input type="text" name='email'/>
					</div>
					<div>Purchasing:
						<select name="card" id="">
							<option value="monster">Monster Card</option>
							<option value="spell">Spell Card</option>
							<option value="trap">Trap Card</option>
						</select>
					</div>
					<div>
						Quantity:<input type="text" name="quantity"/>
					</div>
					
					<div>
						<input type="submit" value="View">
					</div>
				</form>
			</fieldset>
		</div>
	</body>
</html>