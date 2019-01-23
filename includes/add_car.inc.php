<?php

	include_once 'dbh.inc.php';

	$year = $_POST['year'];
	$make = $_POST['make'];
	$model = $_POST['model'];
    $preown = $_POST['preown'];
    $condi = $_POST['condi'];
    $miles = $_POST['miles'];
	$price = $_POST['price'];

	$sql = "INSERT INTO inventory (year, make, model, preown, condi, miles, price) VALUES ('$year', '$make', '$model', '$preown', '$condi', '$miles', '$price');";
	mysqli_query($conn, $sql);

	header("Location: ../inventory.php?add=success");