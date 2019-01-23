<?php

    include_once ('dbh.inc.php');

	if( isset($_GET['modify'])){
		$id = $_GET['modify'];
		$res = mysqli_query($conn, "SELECT * FROM inventory WHERE invid='$id'");
		$row = mysqli_fetch_array($res);
	}
    if( isset($_POST['Ye'])){
		$Ye = $_POST['Ye'];
		$id = $_POST['id'];
		$sql = "UPDATE inventory SET year='$Ye' WHERE invid='$id'";
		$res = mysqli_query($conn, $sql) 
                    or die("Could not update".mysqli_error($conn));
        header("Location: ../inventory.php");
	}
    if( isset($_POST['Ma'])){
		$Ma = $_POST['Ma'];
		$id = $_POST['id'];
		$sql = "UPDATE inventory SET make='$Ma' WHERE invid='$id'";
		$res = mysqli_query($conn, $sql) 
                    or die("Could not update".mysqli_error($conn));
        header("Location: ../inventory.php");
	}
	if( isset($_POST['Mo'])){
		$Mo = $_POST['Mo'];
		$id = $_POST['id'];
		$sql = "UPDATE inventory SET model='$Mo' WHERE invid='$id'";
		$res = mysqli_query($conn, $sql) 
                    or die("Could not update".mysqli_error($conn));
        header("Location: ../inventory.php");
	}
	if( isset($_POST['Ow'])){
		$Ow = $_POST['Ow'];
		$id = $_POST['id'];
		$sql = "UPDATE inventory SET preown='$Ow' WHERE invid='$id'";
		$res = mysqli_query($conn, $sql) 
                    or die("Could not update".mysqli_error($conn));
        header("Location: ../inventory.php");
	}
	if( isset($_POST['Co'])){
		$Co = $_POST['Co'];
		$id = $_POST['id'];
		$sql = "UPDATE inventory SET condi='$Co' WHERE invid='$id'";
		$res = mysqli_query($conn, $sql) 
                    or die("Could not update".mysqli_error($conn));
        header("Location: ../inventory.php");
	}
	if( isset($_POST['Mi'])){
		$Mi = $_POST['Mi'];
		$id = $_POST['id'];
		$sql = "UPDATE inventory SET miles='$Mi' WHERE invid='$id'";
		$res = mysqli_query($conn, $sql)
                    or die("Could not update".mysqli_error($conn));
        header("Location: ../inventory.php");
	}
	if( isset($_POST['Pr'])){
		$Pr = $_POST['Pr'];
		$id = $_POST['id'];
		$sql = "UPDATE inventory SET price='$Pr' WHERE invid='$id'";
		$res = mysqli_query($conn, $sql) 
                    or die("Could not update".mysqli_error($conn));
        header("Location: ../inventory.php");
	}
?>

<form action="includes/modify.php" method="POST">
		<br>
        Year: <input type="text" class="form-control" name="Ye" value="<?php echo $row['year'];?>">
		<br>
		
        Make: <input type="text" class="form-control" name="Ma" value="<?php echo $row['make'];?>">
		<br>
		
        Model: <input type="text" class="form-control" name="Mo" value="<?php echo $row['model'];?>">
		<br>
		
		Pre Owned: <input type="text" class="form-control" name="Ow" value="<?php echo $row['preown'];?>">
		<br>
		
		Condition: <input type="text" class="form-control" name="Co" value="<?php echo $row['condi'];?>">
		<br>
		
		Miles: <input type="text" class="form-control" name="Mi" value="<?php echo number_format($row['miles']);?>">
		<br>

        Price: <input type="text" class="form-control" name="Pr" value="<?php echo number_format($row['price'],2);?>">

	<br>
    <input type="hidden" name="id" value="<?php echo $row['invid'];?>">
    <input type="submit" class="btn btn-info btn-lg btn-block" value="update"/>
	<br>
</form>
