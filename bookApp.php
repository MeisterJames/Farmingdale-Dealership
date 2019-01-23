<?php
  require "header.php";
?>
<head>
	<link href="css/bookApp.css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!-- Time Picker Includes -->
	<link rel="stylesheet" href="js/jquery.timepicker.css">
	<script src="js/jquery.timepicker.min.js"></script>
</head>
<?php //Redirects to Index.php if a user is not logged in
if (!isset($_SESSION['id'])) { 
	header("Location: ../index.php"); }
?>

<div class="page-wrap"> 
	<div class="bgmiddle" id="bgmiddle">
		<section class="py-3">
		<div class="container">
			<div class="well-title">
				<h2><center><font color="white">Farmingdale Dealership Appointment Form</font></center></h2>
			</div>	
        </div>
		</section>
	</div>
<br>
		  <!-- random jtron (added for center testing)  (REMOVED)-->
 	<div id="row" class="row">
<div class="col-md-6 col-centered">
                    <div class="well-block">
                        <div class="well-title">
						
						<?php
							if(isset($_GET['status']) AND ($_GET['status'] == 'error')){
								echo '
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
									<strong>Booking Failed!</strong> Make sure you filled in all of the fields below.
								</div>
								';
							}
							else if (isset($_GET['status']) AND ($_GET['status'] == 'success')){
								echo '
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
									<strong>Booking Successful!</strong> Thanks for booking an appointment with Farmingdale Dealership.
								</div>
								';
							}
						?>

                        </div>
                        <form id="testing" action="includes/add_bookApp.inc.php" method="POST">
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name"><b>User(Name)</b></label>
										<?php
										if (isset($_SESSION['id'])) { 
										?>
											<input id='nameInput' class='form-control input-md' value='<?php echo $_SESSION['uid'] ; ?>' name='username' readonly='readonly'>
										<?php
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
											echo "<input id='email' class='form-control input-md' value='". $row['emailUsers'] ."' name='useremail' readonly='readonly'>";
											}
										}
										?>										
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor"><b>Farmingdale Dealership Services</b></label>
											<select id="service" class="form-control" name='service' onchange="get_employees();" required>
												<option value=''>Select Service...</option>
												<option value='1'>Vehicle Test Drive</option>
												<option value='2'>Vehicle Oil Change</option>
												<option value='3'>Vehicle Tire Rotation</option>
												<option value='4'>General Consultation</option>
											</select>

										<div id="get_employees"> </div> 
										<div id="get_cars"> </div> 
										<br>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date"><b>Appointment Date</b></label>
										<input class="form-control input-md" id="datepicker" name="appDate" placeholder="CLICK CALENDAR BUTTON TO SELECT A DATE" readonly='readonly'>
                                    </div>
                                </div>
								
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date"><b>Appointment Time</b></label>
										<input class="form-control input-md" id="timepicker" name="appTime" placeholder="" required>
                                    </div>
                                </div>
                                <!-- Select Basic -->
								<!--
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Preferred Time</label>
                                        <select id="time" name="time" class="form-control">
                                            <option value="8:00 to 9:00">8:00 to 9:00</option>
                                            <option value="9:00 to 10:00">9:00 to 10:00</option>
                                            <option value="10:00 to 1:00">10:00 to 1:00</option>
                                        </select>
                                    </div>
                                </div>
								-->
                                <!-- Select Basic -->

                                <!-- Button -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-default">Book Appointment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
                    </div>
                </div>	</div>

			
			
<!-- <button type="submit" id="tradebtn" class="btn btn-primary" name="submit">Book Appointment</button> -- >
</form> <!-- random testing form (added for center testing) -->
 <!-- jtron div (added for center testing) (REMOVED) -->
 
 
 
 

 
</div> <!-- page-wrap -->


<!--Picks Employee depending on service (getemployees.php is also involved here) -->
<script type="text/javascript">
function get_employees() { // Call to ajax function
    var service = $('#service').val();
    var dataString = "service="+service; // "service=" links to $service = $_POST['service']; in getemployees.php
    $.ajax({
        type: "POST",
        url: "getemployees.php", // Name of the php files
        data: dataString,
        success: function(html)
        {
            $("#get_employees").html(html);
        }
    });
}
</script>

<!--Date Picker-->
<script> //Calendar Script for #datapicker
	$( function() {
		$( "#datepicker" ).datepicker({ 
		minDate: 0, 
		maxDate: "+1M +10D",
		showOn: "button",
		buttonImage: "images/calendar.gif",
		buttonImageOnly: true,
		buttonText: "Select date"
		
		}); 
	} );
</script>

<!--Time Picker-->
<script>
$('#timepicker').timepicker({
	'disableTextInput': true,
	'minTime': '11:00am',
	'maxTime': '4:00pm',
    'disableTimeRanges': [
        ['12pm', '1:30pm'],
        //['3am', '4:01am']
    ]
});
</script>  
  
<footer class="site-footer">
  <?php require "footer.php";  ?>
</footer>