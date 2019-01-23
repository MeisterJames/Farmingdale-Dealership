<?php
  require "header.php";
?>

<head>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	
	
	
</head>

<div class="page-wrap"> <!-- Page-wrap div start (css for this in the css file)-->

<br>
<br>
<br>

<ul class="nav nav-tabs" role="tablist">
					<li class="active">
						<a href="#tab-table1" data-toggle="tab">Appointments</a>
					</li>
					&nbsp;
					&nbsp;
					&nbsp;
					<li>
						<a href="#tab-table2" data-toggle="tab">Invoices</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab-table1">
						<table id="myTable1" class="table table-hover table-dark table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Extn.</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</thead>
						</table>
					</div>
					<div class="tab-pane" id="tab-table2">
						<table id="myTable2" class="table table-hover table-dark table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Extn.</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>



</div>  <!-- page-wrap div end(KEEP EVERYTHING INSIDE THIS DIV, EXCEPT FOR FOOTER / HEADER)-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">

   $(document).ready(function() {
	$('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
		$.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
	} );
	
	$('table.table').DataTable( {
		scrollY:        200,
		scrollCollapse: true,
		paging:         false,
		searching: 		false,
		info:			false
	} );
	// Apply a search to the second table for the demo

} );
</script>

<script>


</script>



<script>

</script>



<footer class="site-footer">
  <?php require "footer.php";  ?>
</footer>


