<head><!-- MDBootstrap Datatables -->
<link href="css/addons/datatables.min.css" rel="stylesheet">
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="js/addons/datatables.min.js"></script>
</head>

<?php 
		//test stuff
		//echo "<h2>" . $service . "</h2>";
		//$sql1 = "SELECT eidEmps FROM employees ORDER BY eidEmps ASC;";
		
	   //$sql = "SELECT * FROM bookApp;";
	   //$sql = "SELECT * FROM bookApp INNER JOIN employees ON bookApp.employeelist=employees.idEmps;";
	   /* $sql = "SELECT * FROM bookApp INNER JOIN 
			   employees ON bookApp.employeelist=employees.idEmps 
			   WHERE employees.idEmps='".$_SESSION['eid']."';"; 
	   */
			   
		 $sql = "SELECT * FROM bookApp 
			   INNER JOIN 
			   users ON bookApp.username=users.uidUsers
			   INNER JOIN 
			   employees ON bookApp.employeelist=employees.idEmps
               INNER JOIN
               inventory on bookApp.carlist=inventory.invid
			   WHERE users.uidUsers='".$_SESSION['uid']."';";
			   
		 $sql1 = "SELECT * FROM bookApp 
			   INNER JOIN 
			   users ON bookApp.username=users.uidUsers
			   INNER JOIN 
			   employees ON bookApp.employeelist=employees.idEmps
			   WHERE users.uidUsers='".$_SESSION['uid']."';";
			   
		 $sql2 = "SELECT * FROM bookApp 
			   INNER JOIN 
			   users ON bookApp.username=users.uidUsers
			   INNER JOIN 
			   employees ON bookApp.employeelist=employees.idEmps
               INNER JOIN
               inventory on bookApp.carlist=inventory.invid
			   WHERE users.uidUsers='".$_SESSION['uid']."';";
			   
			   /* The above query will only display the book appointments that were  */
	   $result = mysqli_query($conn, $sql);
	   $result1 = mysqli_query($conn, $sql1);
	   $result2 = mysqli_query($conn, $sql2);
?>  
<div id ="appTable" class="appTable"> 		
<table id="userApp" class="table table-hover table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Appointment ID</th>
      <!--<th scope="col">Customer Username</th> -->  <!-- Took this line out since the logged in user doesn't need to see their own name.. redun. information-->
      <th scope="col">Service Type</th>
      <th scope="col">Employee Selected</th>
	  <th scope="col">Selected Vehicle</th>
	  <th scope="col">Appointment Date</th>
	  <th scope="col">Appointment Time</th>
    </tr>
  </thead>
  <tbody>
	   
<?php   
	      
      while ($row = mysqli_fetch_assoc($result1)) {	  
	  $service = $row['service'];
	  
	  echo "<tr>
      <th scope='row'>" . $row['appID'] . "</th>";
      // <td>" . $row['username'] . " (". $row['useremail'] .")</td> "; // Took this line out since the logged in user doesn't need to see their own name.. redun. information
	  
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
		
	 echo" <td>" . $row['eidEmps'] . "</td>";
	 
	 if($service != '1'){
		echo "<td>- - - - - - - - - - - - - - - - -</td> ";
	 }
	 else{
		while ($row1 = mysqli_fetch_assoc($result2)) {
			if($service == '1'){
				echo "<td>" . $row1['year'] . " " . $row1['make'] . " " . $row1['model'] . "</td> ";
				break;
			}
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
<?php	  
// <td>' . $row['service'] . '</td>
?>

<script>
$(document).ready(function() {
    $("#tabs").tabs( {
        "activate": function(event, ui) {
            var table = $.fn.dataTable.fnTables(true);
            if ( table.length > 0 ) {
                $(table).dataTable().fnAdjustColumnSizing();
            }
        }
    } );
	</script>

<script>
$(document).ready(function() {
    $('#userApp').DataTable( {
		paging: false,
		searching: false,
		info: false,
		ordering: true,
        "order": [[ 4, "desc" ]]
    } );
} );
</script>