<?php

    include_once ('dbh.inc.php');

    $sql = "DELETE FROM inventory WHERE invid='".$_GET['del_id']."'";
    $query = mysqli_query($conn, $sql) or die($sql);
    header("Location: ../inventory.php");

    /* back up delete code
    if( isset($_GET['del']) ){
        $id = $_GET['del'];
		$sql = "DELETE FROM inventory WHERE invid='$id'";
		$res = mysqli_query($conn, $sql) or die("Failed".mysqli_error());
		header("Location: ../inventory.php");
	}
	*/
	
?>
