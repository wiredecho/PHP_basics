<?php

session_start();

if(!isset($_SESSION['counter'])){
	$_SESSION['counter'] = 1;
}else{
	$_SESSION['counter'] += 1;
}

?>

<html>
<head>
	<title>Counter</title>
	<style type="text/css">
		h1,h2{
			text-align:center;
		}
	</style>
</head>
<body>

	<h1>You have visited this site</h1>
	<h2><?=$_SESSION['counter']?> times</h2>

</body>
</html>