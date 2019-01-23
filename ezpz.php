<?php
require "header.php";
?>
<head>
<!-- inventory.css in the css folder -->
<link rel="stylesheet" href="css/inventory.css">

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
<br>
<div class="carInventory">
 
<!-- Div called carInventory for the inventory.css file -->  

<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Employee
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Customer
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Purchases
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Car Purhcased
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Trade-in
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
    <th class="th-sm">Traded-in Car
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Price
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      
    </tr>
  </thead>

  <tbody>
 <?php
    require "includes/show_invoice.php";
 ?>
  
  </tbody>

  <!-- FOOTER OF TABLE -->
  <tfoot>
    <tr>
      <th>Employee
      </th>
      <th>Customer
      </th>
      <th>Purchases
      </th>
      <th>Car Purchased
      </th>
      <th>Trade-in 
      </th>
      <th>Traded-in car
      </th>
      <th>Price
      </th>
    </tr>
  </tfoot>
</table> 
</div>

</div> 

<?php
require "footer.php";  
?>