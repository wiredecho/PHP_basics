<?php 
	include_once('connection.php'); 
	
	$display_quotes_query = "SELECT * FROM quotes ORDER BY created_at DESC";
	$quotes = fetch_all($display_quotes_query);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Quotes using PHP with MySQL</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
</head>
<body>
	<h1>Quotes</h1>

<?php
	//var_dump($quotes);
	foreach($quotes as $quote)
	{
		$date_added = date('g:ia F d, Y', strtotime($quote['created_at']));
		
		echo "<p>'". $quote['text'] . "'</p>
				<p> - ". $quote['name'] ." at  ". $date_added ."</p><hr />";
			
	}
?>
	<p><a href='index.php'>Go Back</a></p>

</body>
</html>