<?php
  require "header.php";
?>

<head>
	<!-- my custom login.css file(James)-->
	<link rel="stylesheet" href="css/loginEMP.css">
	  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
	<!------ Include the above in your HEAD tag ---------->
</head>

<?php // if logged in, do not allow them to visit login.php
if (isset($_SESSION['id']) || isset($_SESSION['eid'])) {  
	header("Location: ../index.php"); }
?>

<div class="bg">
<div class="page-wrap"> <!-- Page-wrap div start (css for this in the css file)-->


    <div class="container">
        <div class="card card-container">
            <!-- <img id="profile-img" class="profile-img-card" src="/images/username_login.png" /> -->
            <p id="profile-name" class="profile-name-card"></p>
			<h2>EMPLOYEE SIGN IN</h2>
		<p class="hint-text">Farmingdale Dealership Employee Sign In</p>
			
            <form class="form-signin" id="empsignin" action="includes/login.emp.php" method="post">
                			<?php
			//Puts a message above username input if pass or name is wrong
			if(isset($_GET['error']) AND ($_GET['error'] == 'wrongpwd')){
				echo '
					<p><b><font color="red">Incorrect Password</b> please try again.</font></p>';
			}
			else if(isset($_GET['login']) AND ($_GET['login'] == 'wrongeidpwd')){
				echo '
					<p><b><font color="red">Incorrect Username or Password</b> please try again.</font></p>';
			} ?>
                <input id="usernameEMP" type="text" name="maileid" class="form-control" placeholder="Username" required autofocus>
                <input id="passwordEMP" type="password" name = "pwd" id="pwd" class="form-control" placeholder="Password" required>
				
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" onclick="password()" id="defaultUnchecked">
				<label class="custom-control-label" for="defaultUnchecked">Show Password</label>
			</div>
				<br>
                <button id="btnEMP" class="btn btn-lg btn-warning btn-block btn-signin" type="submit" name="login-submit">Sign in</button>
            </form>
			<!-- /form -->

			<div class="text-center">New employee? <a href="empsignup.php">Signup</a></div>
        </div><!-- /card-container -->
    </div><!-- /container -->

<script>
<!-- Function I made to display the password if the user wants (with a check box) -->
function password() {
    var x = document.getElementById("passwordEMP");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>		
</div>
</div>  <!-- page-wrap div end(KEEP EVERYTHING INSIDE THIS DIV, EXCEPT FOR FOOTER / HEADER)-->

<footer class="site-footer">
  <?php require "footer.php";  ?>
</footer>