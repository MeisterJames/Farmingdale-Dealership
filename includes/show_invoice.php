<?php
     $sql = "SELECT * FROM invoice;";
    $sql2 = "SELECT * FROM sold_inventory;";
    $sql3 = "SELECT * FROM car_trade;";
    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    $result3 = mysqli_query($conn, $sql3);
    $resultCheck = mysqli_num_rows($result);

 if ($resultCheck > 0) {
 while ($row = mysqli_fetch_assoc($result)) {
	 $id = $row['InvoiceID'];
        echo  "<tr>
		<td>" . $row['employee'] . "</td>
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
			while($row1 = mysqli_fetch_assoc($result2)){
				if($purchace =='1'){
					echo "<td>" . $row1['year'] . " " . $row1['make'] . " " . $row1['model'] ."</td>";
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
		while($row1 = mysqli_fetch_assoc($result3)){
		 if ($cartrade !='1'){
		     echo" <td>" . $row1['year'] . " " . $row1['make'] . " " . $row1['model']. "</td>";
		    break;
		 }
		
		}
		  }
		  
		   echo "<td>" . " $" . number_format($row['price'],2) . "</td>
		
		
		</tr>
		
		";
        

    
 

 }
}