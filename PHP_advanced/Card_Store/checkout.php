<?php
session_start();
?>

<style>
	img{
				
		width:30%;
		margin-left:auto;
		margin-right:auto;

	}
</style>

<p>Hi <?= $_SESSION['name']?></p>
<p>Here are the cards you puchased</p>
<? $request = $_SESSION['quantity']; ?>
<? for($i=0; $i < $request ; $i++){
		if($_SESSION['card']=="monster"){
			?><img src='img/monster.jpg'><?;
		}elseif($_SESSION['card']=="spell"){
			?><img src='img/spell.jpg'><?;
		}else{
			?><img src='img/trap.png'><?;
		}
	}
?>