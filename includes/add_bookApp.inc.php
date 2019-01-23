<?php

	include_once 'dbh.inc.php';
	
	//if ($_POST['carlist'] === '') {
	//	$_POST['carlist'] = NULL;
	//}

    $username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$service = $_POST['service'];
	$employeelist = $_POST['employeelist'];
	$carlist = $_POST['carlist'];
	$appDate = $_POST['appDate'];
	$appTime = $_POST['appTime'];
	

	$sql = "INSERT INTO bookApp (username, useremail, service, employeelist, carlist, appDate, appTime) VALUES ('$username', '$useremail', '$service', '$employeelist', '$carlist', '$appDate', '$appTime');";
	//mysqli_query($conn, $sql);

	//header("Location: ../bookApp.php?status=success");
	//header("Location: ../bookApp.php?status=error");
	//echo("Error description: " . mysqli_error($conn));
	if (mysqli_query($conn, $sql))
    header("Location: ../bookApp.php?status=success");
	else
	header("Location: ../bookApp.php?status=error");
