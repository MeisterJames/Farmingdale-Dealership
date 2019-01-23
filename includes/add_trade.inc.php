<?php

	include_once 'dbh.inc.php';

    $fullName = $_POST['fullName'];
	$year = $_POST['year'];
	$make = $_POST['make'];
	$model = $_POST['model'];
	$condi = $_POST['condi'];
	$miles = $_POST['miles'];
	$value = $_POST['value'];

	$sql = "INSERT INTO car_trade (fullName, year, make, model, condi, miles, value) VALUES ('$fullName', '$year', '$make', '$model', '$condi', '$miles', '$value');";
	mysqli_query($conn, $sql);

	header("Location: ../car_trade.php?add=success");