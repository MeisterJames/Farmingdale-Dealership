<?php
  require "header.php";
?>
<head>
	<link rel="stylesheet" href="css/bookApp.css">
</head>
<?php //Redirects to Index.php if employee is not logged in
if (!isset($_SESSION['eid'])) { 
	header("Location: ../index.php"); }
?>

<div class="page-wrap"> 
	<div class="bgmiddle" id="bgmiddle">		<section class="py-3">		<div class="container">			<div class="well-title">				<h2><center><font color="white">Employee Invoice Form</font></center></h2>			</div>	        </div>		</section>	</div><br><div id="row" class="row">	<div class="col-md-6 col-centered">		<div class="well-block">			<div class="well-title">						<?php							if(isset($_GET['status']) AND ($_GET['status'] == 'error')){								echo '								<div class="alert alert-danger alert-dismissible fade show" role="alert">									<button type="button" class="close" data-dismiss="alert" aria-label="Close">									<span aria-hidden="true">&times;</span>									</button>									<strong>Invoice Failed!</strong> Make sure you filled in all of the fields below.								</div>								';							}							else if (isset($_GET['status']) AND ($_GET['status'] == 'success')){								echo '								<div class="alert alert-success alert-dismissible fade show" role="alert">									<button type="button" class="close" data-dismiss="alert" aria-label="Close">									<span aria-hidden="true">&times;</span>									</button>									<strong>Invoice Created!</strong>								</div>								';							}						?>            </div>
			<form id="testing" action="includes/add_invoice.php" method="POST">			<div class="row">
    <!-- form starts -->	<div class="col-md-6">     <div class="form-group">	<label class="control-label" for="name"><b>Employee Filing</b></label>
    <?php
if (isset($_SESSION['eid'])) { 
    echo "<input id='nameInput' name='employee' required class='form-control input-md' value='". $_SESSION['eeid'] ."' name='uidUsers' readonly='readonly'>";
							}
        ?>    </div>     </div>

<br> 

 <div class="col-md-6">     <div class="form-group">	  <label class="control-label" for="email"><b>Customer Name:</b></label>
<?php
    $sql = "SELECT uidUsers FROM users ORDER BY uidUsers ASC;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

 if ($resultCheck > 0) {
	 echo "<select id='fullName' name='customer' class='form-control'  required>";
	 echo "<option value=''>Select User...</option>";
 while ($row = mysqli_fetch_assoc($result)) {
	 $id = $row['invid'];
  echo  "
		<option>" . $row['uidUsers'] . "</option>";		
 }
}
echo "</select>";

?>         </div>            </div>

<div class="col-md-12">    <div class="form-group">
   <label class="control-label" for="email"><b>Purchase:</b></label>
		<select id="service" class="form-control" name='purchase' required>
				<option value=''>Select Purchase...</option>
				<option value='1'>Vehicle Purchase</option>
				<option value='2'>Vehicle Oil Change</option>
				<option value='3'>Vehicle Tire Rotation</option>
				<option value='4'>Vehicle Tire Alignment </option>
		</select>
	</div>
		</div>
     <div class="col-md-12">        <div class="form-group">
		<?php
		$sql1 = "SELECT * FROM inventory;";
	   $result1 = mysqli_query($conn, $sql1);
	   echo '<label class="control-label" for="email"><b>Select Vehicle from Inventory:</b></label>';
       echo "<select name='carlisting' class='form-control' required>";
       echo "<option value=''>Select Vehicle...</option>"; 
       echo "<option value=''>None</option>"; 
       while ($row = mysqli_fetch_assoc($result1)) {
          echo "<option value='" 
		  . $row['invid'] . "'>" 
		  . $row['year'] . " " 
		  . $row['make'] . " " 
		  . $row['model'] . " $"
		  . $row['price'] . "
		  </option>";
		  }
       echo "</select>";
		?></div>	</div>
		<br>
	
		  <div class="col-md-12">     <div class="form-group">
			<?php
		$sql1 = "SELECT * FROM car_trade;";
	   $result2 = mysqli_query($conn, $sql1);
	   echo '<label class="control-label" for="email"><b>Select Traded in Vehicle:</b></label>';
       echo "<select name='cartrade' class='form-control' required>";
       echo "<option value=''>Select Vehicle...</option>"; 
       echo "<option value='1'>None</option>"; 
       while ($row = mysqli_fetch_assoc($result2)) {
          echo "<option value='" 
		  . $row['invid'] . "'>" 
		  . $row['year'] . " " 
		  . $row['make'] . " " 
		  . $row['model'] . " $"
		  . $row['value'] . "
		  </option>";
		  }
       echo "</select>";
		?>
	</div></div>	        <div class="col-md-6">            <div class="form-group">
		<label class="control-label" for="email"><b>Price:</b></label>
		<input type="text" class='form-control input-md' name="price" required>
		</div>		</div>
<br><div class="col-md-12">    <div class="form-group">
<button id = "singlebutton" name="singlebutton" class="btn btn-default">Complete Invoice</button>	</div></div></div>
</form>
              </div>		</div>		</div>
</div> <!--PAGE WRAP END -->


<footer class="site-footer">
  <?php require "footer.php"; ?>
</footer>