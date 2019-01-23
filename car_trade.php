<?php
  require "header.php";
?>
<head>
<!-- inventory.css in the css folder -->
<link rel="stylesheet" href="css/inventory.css">
<link rel="stylesheet" href="css/car_trade.css">

<!-- MDBootstrap Datatables  (Needed for the table to be -->
<link href="css/addons/datatables.min.css" rel="stylesheet">

<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="js/addons/datatables.min.js"></script>
</head>

<?php //Redirects to Index.php if employee is not logged in
if (!isset($_SESSION['eid'])) { 
	header("Location: ../index.php"); }
?>

<script type="text/javascript">
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});

</script>

<div class="page-wrap"> <!-- Page-wrap div start (css for this in the css file)-->
<div class="bgmiddle" id="bgmiddle">
    <section class="py-3">

      <div class="container">
        <p class="lead" id="missionStatement"><font color="white">Employee Trade-In Table View</font></p>
		
      </div>

    </section>
	  </div>

	<div class="carInventory">
	<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
	  <thead>
	    <tr>
	      <th class="th-sm">User(Name)
	        <i class="fa fa-sort float-right" aria-hidden="true"></i>
	      </th>
	      <th class="th-sm">Year
	        <i class="fa fa-sort float-right" aria-hidden="true"></i>
	      </th>
	      <th class="th-sm">Make
	        <i class="fa fa-sort float-right" aria-hidden="true"></i>
	      </th>
	      <th class="th-sm">Model
	        <i class="fa fa-sort float-right" aria-hidden="true"></i>
	      </th>
	      <th class="th-sm">Condition
	        <i class="fa fa-sort float-right" aria-hidden="true"></i>
	      </th>
	      <th class="th-sm">Mileage
	        <i class="fa fa-sort float-right" aria-hidden="true"></i>
	      </th>
	      <th class="th-sm">Valued At
	        <i class="fa fa-sort float-right" aria-hidden="true"></i>
	      </th>
	    </tr>
	  </thead>

	  <tbody>
	 <?php
	    require "includes/show_trade.php";
	 ?>
	  </tbody>

	  <!-- FOOTER OF TABLE -->
	  <!-- <tfoot>
	    <tr>
	      <th>User(Name)
	      </th>
	      <th>Year
	      </th>
	      <th>Make
	      </th>
	      <th>Model
	      </th>
	      <th>Condition
	      </th>
	      <th>Mileage
	      </th>
	      <th>Valued At
	      </th>
	    </tr>
	  </tfoot> -->
	</table>

	</div>
</div>

<footer class="site-footer">
  <?php require "footer.php";  ?>
</footer>