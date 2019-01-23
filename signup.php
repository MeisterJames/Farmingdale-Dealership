<?php
  require "header.php";
?>

<head>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/signup.css">
</head>


<div class="bg">
<div class="page-wrap"> <!-- Page-wrap div start (css for this in the css file)-->


<div class="signup-form">
    <form class="form-signup" action="includes/signup.inc.php" method="post">
		<h2>Register</h2>
		<p class="hint-text">Farmingdale Dealership Registration</p>
		
		<?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {
              echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "usertaken") {
              echo '<p class="signuperror">Username is already taken!</p>';
            }
          }
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Registration Successful!</p>';
            }
          }
          ?>
		  
		    <?php
            if (!empty($_GET["uid"])) {
              echo '<input type="username" class="form-control" name="uid" placeholder="Username" value="'.$_GET["uid"].'">';
            }
            else {
              echo '<input type="username" class="form-control" name="uid" placeholder="Username" required="required" autofocus>';
            }
			?> <br> <?php
            if (!empty($_GET["mail"])) {
              echo '<input type="email" class="form-control" name="mail" placeholder="E-mail" value="'.$_GET["mail"].'">';
            }
            else {
              echo '<input type="email" class="form-control" name="mail" placeholder="E-mail" required="required">';
            }
            ?>
		<br>
		<div class="form-group">
            <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pwd-repeat" placeholder="Confirm Password" required="required">
        </div>        
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="signup-submit">Register Now</button>
        </div>
		<div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
	
</div>


</div>  <!-- page-wrap div end(KEEP EVERYTHING INSIDE THIS DIV, EXCEPT FOR FOOTER / HEADER)-->
</div>
<footer class="site-footer">
  <?php require "footer.php";  ?>
</footer>

