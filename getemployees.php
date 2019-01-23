<?php
include "includes/dbh.inc.php";



if ($_POST) {
    $service = $_POST['service'];
    if ($service != '') {
		//test stuff
		//echo "<h2>" . $service . "</h2>";
		//$sql1 = "SELECT eidEmps FROM employees ORDER BY eidEmps ASC;";
		
	   $sql1 = "SELECT * FROM employees WHERE service=".$service;
	   $result1 = mysqli_query($conn, $sql1);
	   
	   echo "<br>";
	   echo "<b>Select Employee:</b><br>";
       echo "<select name='employeelist' class='form-control' required>";
       echo "<option value=''>Select Employee...</option>"; 
       while ($row = mysqli_fetch_assoc($result1)) {
          echo "<option value='" . $row['idEmps'] . "'>" . $row['eidEmps'] . "</option>";
		  }
       echo "</select>";
    }
    else
    {
        echo  '';
    }
}
?>



<?php

if ($_POST) {
    $service = $_POST['service'];
    if ($service == '1') {
		//test stuff
		//echo "<h2>" . $service . "</h2>";
		//$sql1 = "SELECT eidEmps FROM employees ORDER BY eidEmps ASC;";
		
	   $sql1 = "SELECT * FROM inventory;";
	   $result1 = mysqli_query($conn, $sql1);
	   
	   echo "<br>";
	   echo "<b>Select Vehicle from Inventory:</b><br>";
       echo "<select name='carlist' class='form-control' required>";
       echo "<option value=''>Select Vehicle...</option>"; 
       while ($row = mysqli_fetch_assoc($result1)) {
          echo "<option value='" . $row['invid'] . "'>" . $row['year'] . " " . $row['make'] . " " . $row['model'] . "</option>";
		  }
       echo "</select>";
    }
    else
    {
        echo  '';
    }
}

?>