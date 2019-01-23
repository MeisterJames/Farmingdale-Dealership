<!-- Modify_Car_Modal.php -->
<div class="modal fade" id="modify_car" tabindex="-1" role="dialog" aria-labelledby="ModifyCar" aria-hidden="true">
<div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
            <p class="heading lead">Modify Car</p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
            </button>

 </div>
	  <form action="includes/modify.php" method="POST">
		<div class="form-group" id="inputFormModify">
			<div class="modal-body-modify">
			<!-- show_inventory.php Modal Javascript is putting the includes/modify.php?modify=$row[invid] form here -->
			</div>
      </div>
	  
      <!-- Commented the modal-footer out because the footer button does not work in this case due to the whole 
	  modify page being loaded into the modal so we use the modify pages update button instead 

	  <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit" >Modify Car</button>
      </div>  
	  
	  -->

	    </form>
    </div>
    <!--/.Content-->
</div>
</div>
<!-- Central Modal Medium Info-->