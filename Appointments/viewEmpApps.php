<head><!-- MDBootstrap Datatables -->
<link href="css/addons/datatables.min.css" rel="stylesheet">
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="js/addons/datatables.min.js"></script>
</head>
<?php 
		 $sql = "SELECT * FROM bookApp 
			   INNER JOIN 
			   employees ON bookApp.employeelist=employees.idEmps
               INNER JOIN
               inventory on bookApp.carlist=inventory.invid
			   WHERE employees.idEmps='".$_SESSION['eid']."';";
			   
		 $sql1 = "SELECT * FROM bookApp 
			   INNER JOIN 
			   employees ON bookApp.employeelist=employees.idEmps
			   WHERE employees.idEmps='".$_SESSION['eid']."';";
			   
		 $sql2 = "SELECT * FROM bookApp 
			   INNER JOIN 
			   employees ON bookApp.employeelist=employees.idEmps
               INNER JOIN
               inventory on bookApp.carlist=inventory.invid
			   WHERE employees.idEmps='".$_SESSION['eid']."';";
			   
			   /* The above query will only display the book appointments that were  */
	   $result = mysqli_query($conn, $sql);
	   $result1 = mysqli_query($conn, $sql1);
	   $result2 = mysqli_query($conn, $sql2);
?>  

<div id ="appTable" class="appTable">  
<table id="empApp" class="table table-hover table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Appointment ID</th>
      <th scope="col">Customer Username</th>
      <th scope="col">Service Type</th>
      <!-- <th scope="col">Employee Selected</th> -->  <!--Took this line out since the logged in employee doesn't need to see their own name.. redun. information -->
<?php
while ($row = mysqli_fetch_assoc($result)) {
	$carstuff = $row['carlist'];
	if($carstuff != NULL){
		echo '<th scope="col">Selected Vehicle</th>';
		break;
	}
}	
?>
  
	  <th scope="col">Appointment Date</th>
	  <th scope="col">Appointment Time</th>
    </tr>
  </thead>
  <tbody>
	   
<?php   
	      
      while ($row = mysqli_fetch_assoc($result1)) {	  
	  $service = $row['service'];
	  
	  echo "<tr>
      <th scope='row'>" . $row['appID'] . "</th>
      <td>" . $row['username'] . " (". $row['useremail'] .")</td> "; // ending the echo here for the if statement
	  
	  // <td>' . $row['service'] . '</td>  //REPLACED BY IF STATEMENT
  	if($service == '1'){ // if statement that displays the service name depending on the service id #
		echo "<td>Vehicle Test Drive</td>";
		}
		else if($service == '2'){
			echo "<td>Vehicle Oil Change</td>";
		}
		else if($service == '3'){
			echo "<td>Vehicle Tire Rotation</td>";
		}
		else{
			echo "<td>General Consultation</td>";
		}
		
	 // echo" <td>" . $row['eidEmps'] . "</td>"; //Took this line out since the logged in employee doesn't need to see their own name.. redun. information
	 

	 while ($row1 = mysqli_fetch_assoc($result2)) {
		if($service == '1'){
			echo "<td>" . $row1['year'] . " " . $row1['make'] . " " . $row1['model'] . "</td> ";
			break;
		}
	}
	 
    echo" <td>" . $row['appDate'] . "</td>";
		//echo"<td>" . $row['appTime'] . "</td>
	
	//Grabs the Time and turns it into only hours and minutes format
	$my_sql_date = "".$row['appTime']."";
	$date_time_obj = new DateTime($my_sql_date);
	echo "<td>";
	echo $date_time_obj->format('g:i');
	echo "</td>";
	echo "
    </tr> ";
		  }	// end of main while loop	  
?>
  </tbody>
</table>
</div>

<script>
$(document).ready(function() {
    $('#empApp').DataTable( {
		paging: false,
		searching: false,
		info: false,
		ordering: true,
        //"order": [[ 4, "desc" ]]
    } );
} );
</script>	