<?php
    $sql = "SELECT * FROM car_trade;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

 if ($resultCheck > 0) {
 while ($row = mysqli_fetch_assoc($result)) {
	 $id = $row['id'];
  echo  "<tr>
  		<td>" . $row['fullName'] . "</td>
		<td>" . $row['year'] . "</td>
		<td>" . $row['make'] . "</td>
		<td>" . $row['model'] . "</td>
		<td>" . $row['condi'] . "</td>
		<td>" . number_format($row['miles']) . "</td>
		<td>" . "  $" . number_format($row['value'],2) . "</td></tr>";
			
 }
}
?>