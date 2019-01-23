<?php
  session_start();
  require "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="SPCAR Farmingdale Senior Project">
    <meta name="author" content="Senior Project">
    <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Farmingdale Dealership</title>

    <link rel="icon" href="images/car.ico"> <!-- Browser Tab Icon (Red Car)-->

  <!-- css file for header.php -->
  <link rel="stylesheet" href="css/header.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.min.css" rel="stylesheet">
  </head>
  
  
  <!-- 
  Added this style because the modal form in inventory.php was moving the logout 
  button in the top right to the left when the "Add Car"(modal) button was clicked.								
  -->
  <style>
  .navbar{
	  padding-right: 0 !important;
  }
  </style>
  
  
<header id="header">
	<nav class="navbar navbar-expand-lg fixed-top navbar-dark indigo">
  <a class="navbar-left" id="brand-img"><img src="/images/FDLogo.png" alt="FD Logo"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inventory.php">Inventory</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li> -->
      <?php
      if (isset($_SESSION['id'])) {
      	echo "<li class='nav-item'>
        		<a class='nav-link' href='bookApp.php'>Book Appointment</a>
      		</li>";
      }
      ?>
      <?php
      if (isset($_SESSION['eid'])) {
		  
		  		echo'<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Trade-In</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="trade.php"><b>Trade-In Form</b></a>
          <a class="dropdown-item" href="car_trade.php"><b>Trade-In View</b></a>
        </div>
      </li>';
	  
		echo'      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Invoice</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="invoice.php"><b>Invoice Form</b></a>
          <a class="dropdown-item" href="ezpz.php"><b>Invoice View</b></a>
        </div>
      </li>';
      }
      ?>
    </ul>
	
<?php
        if (!isset($_SESSION['id']) && !isset($_SESSION['eid'])) { 
	echo '<a href="login.php" class="btn btn-dark-green" role="button">Login</a>';
	echo '<a href="signup.php" class="btn btn-deep-orange" role="button">Signup</a>';
		} 
		else if (isset($_SESSION['id'])) { ?>
    		<p id="welcome" style="color:white;">Welcome, <b> <?php echo $_SESSION['uid'] ; ?></b></p>
            <?php echo '<a href="Profile.php" class="btn btn-warning" role="button">Profile</a>'; ?>			
    		<?php
    		echo '<form action="includes/logout.inc.php" method="post">
    		<button type="submit" name="login-submit" class="btn btn-danger">Logout</button>
    		</form>';
         }
        ?>
        <?php 
            if(isset($_SESSION['eid'])){ ?>
				
                <p id="welcome" style="color:white;">Welcome, [Employee]<b> <?php echo $_SESSION['eeid'] ; ?></b></p>
               <?php echo '<a href="Profile.php" class="btn btn-warning" role="button">Profile</a>'; ?>
			   <?php
    		    echo '<form action="includes/logout.inc.php" method="post">
    		    <button type="submit" name="login-submit" class="btn btn-danger">Logout</button>
    		</form>';
            }
        ?>
  </div>
</nav>
</header>
	
	
	
	<!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
