<?php require "header.php"; ?>

<head>
	<!-- css file for index.php -->
	<link rel="stylesheet" href="css/index.css">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    
	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">
	<link href="css/style.min.css" rel="stylesheet">
</head>

<div class="page-wrap">
<?php
if (!isset($_SESSION['id']) && !isset($_SESSION['eid'])) { 
echo '<div id="alertstuff" class="alert alert-dark alert-dismissible fade show" role="alert">
  <strong><a href="login.php" class="alert-link">LOGIN</a></strong> to book an appointment with Farmingdale Dealership.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
<div class="bgTop" id="bgtop">
    <section class="py-5">

      <div class="container">
        <h1><font color="white">Farmingdale Dealership</font></h1>
        <p class="lead" id="missionStatement"><font color="white">We at Farmingdale Dealership will keep you up to date on our wide selection of inventory</font></p>
      </div>

    </section>
	  </div>

<!-- OLD SETMORE BUTTON  
<div class="bgmiddle" id="bgmiddle">
    <section class="py-3">

      <div class="container">
        <p class="lead" id="missionStatement"><font color="white">Schedule a test drive today!</font></p>
		
		 <p class="lead" id="missionStatement"> <script id="setmore_script" type="text/javascript" src="https://my.setmore.com/webapp/js/src/others/setmore_iframe.js"></script><a id="Setmore_button_iframe" style="float:none" href="https://my.setmore.com/bookingpage/30e13dfc-e219-4803-a061-16a74fc49c70"> <button type="button" class="btn btn-secondary">Schedule Now!</button></a> </p>
		
      </div>

    </section>
	  </div>
-->


<!--Carousel Wrapper-->
<div id="carousel-example-2" id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="images\indexAboutUs.jpg" alt="First slide" height="700px" width="100px">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive"><a href="#" style="color: black;">About us!</a></h3>
       
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
            <img border="0" class="d-block w-100" src="images\inventoryres.jpg" alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive"><a href="inventory.php">Buy now!</a></h3>
        
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        
    <img class="d-block w-100"   src="images\joinUs.jpg" alt="Third slide" height="300px"></a>
         
      
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive"><a href="signup.php" style="color:black;">Sign up!</a></h3>
    
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<div class="bgmiddle" id="bgmiddle">
    <section class="py-2">

      <div class="container">
        <h1><font color="white">Vehicle Images</font></h1>
        <p class="lead" id="missionStatement"><font color="white">Check below to see images of the vehicles for sale!</font></p>
      </div>

    </section>
	  </div>  
  

  
  
  
  

    <section class="py-5">
      <div class="container">
<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car1.png" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car2.png" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car3.png" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car4.png" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car5.png" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car6.png" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

</div>

<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car7.png" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car8.jpg" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car9.png" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

</div>

<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car10.png" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car11.png" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car12.jpg" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

</div>

<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car13.png" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car14.png" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-3 view overlay zoom hoverable">

    <img src="images/cars/car15.png" class="img-fluid z-depth-1"
      alt="Responsive image">

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->
	  
	  
	  
      </div>

    </section>

  

 

</div>  <!-- page-wrap div (KEEP EVERYTHING INSIDE THIS DIV, EXCEPT FOR FOOTER / HEADER)-->


<footer class="site-footer">
  <?php require "footer.php";  ?>
</footer>