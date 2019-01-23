<?php
  require "header.php";
?>
<!-- Calling from the database and displaying the rows in the table if results are > 0 --> 

<head>
<!-- inventory.css in the css folder -->
<link rel="stylesheet" href="css/inventory.css">

<!-- MDBootstrap Datatables  (Needed for the table to be -->
<link href="css/addons/datatables.min.css" rel="stylesheet">

<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="js/addons/datatables.min.js"></script>
</head>

<script type="text/javascript">
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});

</script>

<div class="page-wrap"> <!-- Page-wrap div start (css for this in the css file)-->
<br>
<div class="carInventory">

<!-- Button trigger modal (When someone is logged in the button is shown) -->
<?php if (isset($_SESSION['eid'])) { 
echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_car">
  Add Car
</button>';
}

/* New Car Button / Form Modal */
include "includes/modals/New_Car_Modal.php"; 
require "includes/modals/Modify_Car_Modal.php";
?>
 
<!-- Div called carInventory for the inventory.css file -->  

<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Year
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Make
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Model
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Pre Owned
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Condition
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Mileage
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <th class="th-sm">Price
        <i class="fa fa-sort float-right" aria-hidden="true"></i>
      </th>
      <?php 
      if(isset($_SESSION['eid'])){
      echo "<th class='th-sm'>ACTION
        <i class='fa fa-sort float-right' aria-hidden='true'></i>
      </th>";
      }?>
      
    </tr>
  </thead>

  <tbody>
 <?php
    require "includes/show_inventory.php";
 ?>
  
  </tbody>

  <!-- FOOTER OF TABLE -->
  <tfoot>
    <tr>
      <th>Year
      </th>
      <th>Make
      </th>
      <th>Model
      </th>
      <th>Pre Owned
      </th>
      <th>Condition
      </th>
      <th>Mileage
      </th>
      <th>Price
      </th>
      <?php 
      if(isset($_SESSION['eid'])){
      echo "<th class='th-sm'>ACTION
        <i class='fa fa-sort float-right' aria-hidden='true'></i>
      </th>";
      }?>
    </tr>
  </tfoot>
</table> 
</div>

</div>  <!-- page-wrap div end(KEEP EVERYTHING INSIDE THIS DIV, EXCEPT FOR FOOTER / HEADER)-->


<footer class="site-footer">
  <?php require "footer.php";  ?>
</footer>
