<?php
     $sql = "SELECT * FROM inventory;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

 if ($resultCheck > 0) {
 while ($row = mysqli_fetch_assoc($result)) {
	 $id = $row['invid'];
  echo  "<tr>
		<td>" . $row['year'] . "</td>
		<td>" . $row['make'] . "</td>
		<td>" . $row['model'] . "</td>
		<td>" . $row['preown'] . "</td>
		<td>" . $row['condi'] . "</td>
		<td>" . number_format($row['miles']) . "</td>
		<td>" . "  $" . number_format($row['price'],2) . "</td>";
        if(!isset($_SESSION['eid'])){
            echo "</tr>";
        }
        else if(isset($_SESSION['eid'])){
        echo "<td><a  name='Delete' onClick='deleteme($row[invid])' class='btn btn-outline-danger waves-effect px-3'><i class='fa fa-close'aria-hidden='true'></i></a>                  
                              
		<a href='javascript:void(0);' data-href='includes/modify.php?modify=$row[invid]' class='btn btn-outline-info waves-effect px-3 openMdl'><i class='fa fa-edit'
        aria-hidden='true'></i></a></td></tr>";
        }
		
 }
}



?>
<!-- <a href='includes/modify.php?modify=$row[invid]'>MODIFY</a></td>  old modify code -->

<!-- Javascript function that loads url in data-href='' when button MODIFY-A is clicked -->
<script>

$(document).ready(function(){
    $('.openMdl').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body-modify').load(dataURL,function(){
            $('#modify_car').modal({show:true});
        });
    }); 
});

</script>
<script language="javascript">
    function deleteme(delid){
        if(confirm("Do you want Delete!")){
            window.location.href='includes/delete.php?del_id=' +delid+'';
            return true;
        }
    } 
</script>

