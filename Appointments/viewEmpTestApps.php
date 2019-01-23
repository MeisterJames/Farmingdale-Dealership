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
	   
	   	   // ************ BELOW CODE is for INVOICES *************
	   $sql3 = "SELECT * FROM invoice
				INNER JOIN
				employees ON invoice.employee=employees.eidEmps
				WHERE invoice.employee='".$_SESSION['eeid']."';";
	   
	   $sql4 = "Select * FROM sold_inventory;";
	   $sql5 ="SELECT * FROM car_trade;";
	   
		$result3 = mysqli_query($conn, $sql3);
	  $result4 = mysqli_query($conn, $sql4);
	    $result5 = mysqli_query($conn, $sql5);
?>  

<div id ="appTable" class="appTable">  
<ul class="nav nav-tabs" role="tablist">
					<li class="active">
						<a class="btn btn-mdb-color btn-sm active" aria-pressed="true" href="#tab-table1" data-toggle="tab">Appointments</a>
					</li>
					&nbsp;
					&nbsp;
					&nbsp;
					<li>
						<a class="btn btn-mdb-color btn-sm" href="#tab-table2" data-toggle="tab">Invoices</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab-table1">
						<table id="myTable1" class="table table-hover table-dark table-striped">
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
      <td>" . $row['username'] . " (". $row['useremail'] .")</td> "; 
	  
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
		
	 //echo" <td>" . $row['eidEmps'] . "</td>";
	 
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
<!-- Invoice Table -->
  </tbody>
						</table>
					</div>
					<div class="tab-pane" id="tab-table2">
						<table id="myTable2" class="table table-hover table-dark table-striped">
							<thead>
								<tr>
									<th>Invoice ID</th>
									<th>Customer</th>
									<th>Purchases</th>
									<th>Vehicle Purchased</th>
									<th>Trade-In</th>
									<th>Traded-In Vehicle</th>
									<th>Price</th>
								</tr>
							</thead>
							
							
							<?php
						while ($row = mysqli_fetch_assoc($result3)) {
	         $id = $row['InvoiceID'];
             echo  "<tr>
            <td>" . $row['InvoiceID'] . "</td>
	    	<td>" . $row['customer'] . "</td>";
            //purchace 1 1 = vehicale purchased
            //purchase 2  2 = oilchange
            $purchace = $row['purchase'];
            if ($purchace =='1'){
                echo"<td>Vehicle Purchased</td>";
            }
            if ($purchace =='2'){
             echo"<td>Oil Change</td>";
            }
	    	//purchace 3 3= tire rotation
	    	if($purchace =='3'){
	    	echo"<td>Tire Rotation</td>";
	    	}
	    	// purchase 4 4 = tire alignment
	    	if($purchace == '4'){
	    	    echo"<td>Tire Alignment</td>";
	    	}
		
	   
		if ($purchace !='1'){
			echo"<td>N/A</td>";
		}
		else{
			while($row4 = mysqli_fetch_assoc($result4)){
				if($purchace =='1'){
					echo "<td>" . $row4['year'] . " " . $row4['make'] . " " . $row4['model'] ."</td>";
					break;
				}
			}
		}
			
		 // traded in cars
		  $cartrade = $row['cartrade'];
		  if ($cartrade =='1'){
		  echo"<td>N/A</td>";
		  }
		  if ($cartrade !='1'){
		      echo"<td>Yes</td>";
		  }
		  if ($cartrade =='1'){
		      echo"<td>N/A</td>";
		  }
		  else{
		while($row4 = mysqli_fetch_assoc($result5)){
		 if ($cartrade !='1'){
		     echo" <td>" . $row4['year'] . " " . $row4['make'] . " " . $row4['model']. "</td>";
		    break;
		 }
		
		}
		  }
		  
		   echo "<td>" . " $" . number_format($row['price'],2) . "</td>
		</tr>
		";
 }
?>
						</table>
					</div>
				</div>
</div>

<script>

   $(document).ready(function() {
	$('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
		$.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
	} );
	
	$('table.table').DataTable( {
		//scrollY:        200,
		//scrollCollapse: true,
		paging:         false,
		searching: 		false,
		info:			false
	} );
	// Apply a search to the second table for the demo

} );
</script>	