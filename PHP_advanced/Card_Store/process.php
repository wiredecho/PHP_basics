<?php

session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['card'] = $_POST['card'];
$_SESSION['quantity'] = $_POST['quantity'];

header("Location: checkout.php");
