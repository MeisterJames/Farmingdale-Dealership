<?php
  require "header.php";
?>

<head>
	<!-- my custom login.css file(James)-->
	<link rel="stylesheet" href="css/login.css">
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
            <img id="profile-img" class="profile-img-card" src="/images/loginLogo.png" />
            <p id="profile-name" class="profile-name-card"></p>
			<h2>SIGN IN</h2>
		<p class="hint-text">Farmingdale Dealership Sign In</p>
			
            <form class="form-signin" action="includes/login.inc.php" method="post">
			<?php
			//Puts a message above username input if pass or name is wrong
			if(isset($_GET['error']) AND ($_GET['error'] == 'wrongpwd')){
				echo '
					<p><b><font color="red">Incorrect Password</b> please try again.</font></p>';
			}
			else if(isset($_GET['login']) AND ($_GET['login'] == 'wronguidpwd')){
				echo '
					<p><b><font color="red">Incorrect Username or Password</b> please try again.</font></p>';
			} ?>
                <input type="text" name="mailuid" class="form-control" placeholder="Username" required autofocus>
                <input type="password" name = "pwd" id="pwd" class="form-control" placeholder="Password" required>
				
			<div class="custom-control custom-checkbox">
				<input type="checkbox" class="custom-control-input" onclick="password()" id="defaultUnchecked">
				<label class="custom-control-label" for="defaultUnchecked">Show Password</label>
			</div>
				<br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login-submit">Sign in</button>
            </form>
			<!-- /form -->

			<div class="text-center">Don't have an account? <a href="signup.php">Signup</a></div>
			<!-- <div class="text-center">Dealership Employee? <a href="emplogin.php">Login</a></div> -->
        </div><!-- /card-container -->
<div id="empcard" class="card bg-light mb-3 text-center" style="max-width: 28rem;">
  <div class="card-header">Farmingdale Dealership Employee Login</div>
  <div class="card-body">
    <p class="card-text">Click here to be redirected to the Dealership Employee Login</p>
	<a href="emplogin.php" class="btn btn-blue-grey" role="button">Employee Login</a>
  </div>
</div>
    </div><!-- /container -->
	
<script>
<!-- Function I made to display the password if the user wants (with a check box) -->
function password() {
    var x = document.getElementById("pwd");
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