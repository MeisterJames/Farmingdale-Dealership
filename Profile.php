<?php
  require "header.php";
?>

<head>
<link href="css/Profile.css" rel="stylesheet">
</head>

<?php
if (isset($_SESSION['id']) || isset($_SESSION['eid'])) {

}
else {
		header("Location: ../index.php"); 
	 }
?>

<div class="page-wrap"> <!-- Page-wrap div start (css for this in the css file)-->
<div class="bgmiddle" id="bgmiddle">
    <section class="py-3">
      <div class="container">
	  	<div class="well-title">
            <h2><center><font color="white">Profile Information</font></center></h2>
        </div>	
      </div>
    </section>
</div>
<br>
	<div id="row" class="row">
		<div class="col-md-6 col-centered">
			<div class="well-block">
						<div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name"><b>User(Name)</b></label>
										<?php
										if (isset($_SESSION['id'])) { 
											echo "<input id='nameInput' class='form-control input-md' value='". $_SESSION['uid'] ."' name='uidUsers' readonly='readonly'>";
										}
										else if(isset($_SESSION['eid'])) { 
										echo "<input id='nameInput' class='form-control input-md' value='". $_SESSION['eeid'] ."' name='eidEmps' readonly='readonly'>";
										}
										?>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="email"><b>Email</b></label>
										<?php
										if (isset($_SESSION['id'])) { 

											$sql = "SELECT emailUsers FROM users 
											WHERE idUsers='".$_SESSION['id']."';";
											$result = mysqli_query($conn, $sql);
											while ($row = mysqli_fetch_assoc($result)) {
											echo "<input id='email' class='form-control input-md' value='". $row['emailUsers'] ."' name='emailUsers' readonly='readonly'>";
											}
										}
										else if(isset($_SESSION['eid'])) {
											$sql1 = "SELECT emailEmps FROM employees 
											WHERE idEmps='".$_SESSION['eid']."';";
											$result1 = mysqli_query($conn, $sql1);
											while ($row1 = mysqli_fetch_assoc($result1)) {
											echo "<input id='email' class='form-control input-md' value='". $row1['emailEmps'] ."' name='emailEmps' readonly='readonly'>";
										
											}	
										}
										?>										
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
										<?php
										if (isset($_SESSION['id'])) { 
										     echo'<div class="well-title">
												<br>
												<br>
												<h2><center>Vehicles Traded-In</center></h2>
												</div>';
											$sq2 = "SELECT * FROM car_trade 
											WHERE fullName='".$_SESSION['uid']."';";
											$result2 = mysqli_query($conn, $sq2);
											while ($row2 = mysqli_fetch_assoc($result2)) {
												 echo "<center><input id='tradein' class='form-control input-md' value='". $row2['year'] ." ". $row2['make'] ." ". $row2['model'] ." $". $row2['value'] ."' readonly='readonly' style='width:380px'></center>";
											}
										}
										?>
										<br>
                                    </div>
                                </div>
								<!-- <div class="col-md-12">
									<div class="form-group">
										<button id="singlebutton" name="singlebutton" class="btn btn-default">Update Info</button>
									</div>
								</div> -->
						</div>
			</div>
		</div>	
    </div>
<!-- Displays the User View of their Booked Appointments -->
<br>
<br>
	<div class="well-title">
		<h2><center>Appointments / Invoices</center></h2>
	</div>	
<?php
if (isset($_SESSION['id'])) { 
	//include "Appointments/viewUserApps.php"; 
	include "Appointments/viewTestApps.php"; 
}
else if(isset($_SESSION['eid'])) {
	//include "Appointments/viewEmpApps.php"; 
	include "Appointments/viewEmpTestApps.php"; 
}
?>
  <!-- jtron-->
</div>  <!-- page-wrap div end(KEEP EVERYTHING INSIDE THIS DIV, EXCEPT FOR FOOTER / HEADER)-->

<footer class="site-footer">
  <?php require "footer.php";  ?>
</footer>