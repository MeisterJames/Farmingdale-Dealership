<?php

	include_once 'dbh.inc.php';
	
	
    $employee = $_POST['employee'];
	$customer = $_POST['customer'];
	$purchase = $_POST['purchase'];
	$carlisting = $_POST['carlisting'];
	$cartrade = $_POST['cartrade'];
	$price = $_POST['price'];

	

	$sql = 
	"INSERT INTO invoice (employee, customer, purchase, carlisting, cartrade, price) 
	VALUES('$employee', '$customer', '$purchase', '$carlisting', '$cartrade', '$price');";

    $sql2 = "Insert INTO sold_inventory(year, make, model, price)
        Select year, make, model, price
        from inventory
        where invid In(select carlisting from invoice);";
   $sql3 = "DELETE From inventory Where invid In(select carlisting from invoice);";

	//header("Location: ../bookApp.php?status=success");
	//header("Location: ../bookApp.php?status=error");
	//echo("Error description: " . mysqli_error($conn));
if (mysqli_query($conn, $sql))
    header("Location: ../invoice.php?status=success");
	else
	header("Location: ../invoice.php?status=error");
if (mysqli_query($conn, $sql2))
 header("Location: ../invoice.php?status=success");
	else
	header("Location: ../invoice.php?status=error");
if (mysqli_query($conn, $sql3))
 header("Location: ../invoice.php?status=success");
	else
	header("Location: ../invoice.php?status=error");
?>