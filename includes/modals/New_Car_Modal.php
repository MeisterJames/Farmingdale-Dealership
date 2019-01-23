<!-- New Car Button / Form Modal -->

<div class="modal fade" id="add_car" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Car Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
    <form action="includes/add_car.inc.php" method="post">

		<div class="form-group" id="inputForm" form-inline>
        
        <b>Year:</b> <!-- <input type="text" class="form-control" name="year" id="Input1" placeholder="Year"> -->
		<div class="form-inline">
			<select id="year" class="form-control mb-2 mr-sm-2" onchange="pickvalue2()">
				<?php 
				for($i = 1990 ; $i < 2019; $i++){
				echo "
					 <option selected disabled hidden>Select Year...</option>
					 <option>$i</option>";
				}
				?>
			</select>

			<input id="yearInput" class="form-control mb-2 mr-sm-2" name="year" readonly="readonly">
		</div>

		<br>
        <b>Make:</b> <!-- <input type="text" class="form-control" name="make" id="Input2" placeholder="Make"> -->
		
		<div class="form-inline">
			<select id="make" class="form-control mb-2 mr-sm-2" onchange="pickvalue3()">
				<option selected disabled hidden>Select Make...</option>
       <?php
        // An array of car makes
        $makes = array("Acura","Alfa Romeo","AM General","AMC","Aston Martin","Audi","Bentley","BMW","Bricklin","Buick","Cadillac","Chevrolet","Chrysler","Daewoo","Datsun","Dodge","Eagle","Ferrari","Fiat","Ford","Geo","GMC","Honda","HUMMER","Hyundai","Infiniti","Isuzu","Jaguar","Jeep","Kia","Land Rover","Lexus","Lincoln","Lamborghini","Lotus","Maserati","Mazda","Mercedes-Benz","Mercury","MG","MINI","Mitsubishi","Nissan","Oldsmobile","Plymouth","Pontiac","Porsche","RAM","Renault","Rolls Royce","Saab","Saturn","Scion","Shelby","Smart","Subaru","Suzuki","Toyota","Triumph","Volkswagen","Volvo");
        
        // Iterating through the makes array
        foreach($makes as $item){
        ?>
        <option value="<?php echo $item; ?>"><?php echo $item; ?></option>
        <?php
        }
        ?>
    </select>

			<input id="makeInput" class="form-control mb-2 mr-sm-2" name="make" readonly="readonly">
		</div>		
		
		
		<br>
		
        <b>Model:</b> <input type="text" class="form-control" name="model" id="Input3" placeholder="Model">
		<br>
		
		<b>Pre Owned:</b> <!-- <input type="text" class="form-control" name="preown" id="Input4" placeholder="Pre Owned"> -->
		<div class="form-inline">
			<select id="preowned" class="form-control mb-2 mr-sm-2" onchange="pickvalue()">
				<option selected disabled hidden>Select Option...</option>
				<option>Yes</option>
				<option>No</option>
			</select>

			<input id="preownedInput" class="form-control mb-2 mr-sm-2" name="preown" readonly="readonly">
		</div>

		<br>
		
		<b>Condition:</b> <!-- <input type="text" class="form-control" name="condi" id="Input5" placeholder="Condition"> -->
		<div class="form-inline">
			<select id="condition" class="form-control mb-2 mr-sm-2" onchange="pickvalue1()">
				<option selected disabled hidden>Select Option...</option>
				<option>New</option>
				<option>Excellent</option>
				<option>Good</option>
				<option>Fair</option>
				<option>Poor</option>
			</select>

			<input id="conditionInput" class="form-control mb-2 mr-sm-2" name="condi" readonly="readonly">
		</div>
		
		
		
		<br>
		
		<b>Mileage:</b> <input type="text" class="form-control" name="miles" id="Input6" placeholder="Mileage">
		<br>

        <b>Price:</b> <input type="text" class="form-control" name="price" id="Input7" placeholder="Price">
		</div>
		
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">Add Car</button>
      </div>
	    </form>
    </div>
  </div>
</div>
<!-- End Modal -->

<!-- Javascript that puts the value in the input when selected from dropdown -->
<script>
function pickvalue() {
document.getElementById('preownedInput').value = document.getElementById('preowned').value }

function pickvalue1() {
document.getElementById('conditionInput').value = document.getElementById('condition').value }

function pickvalue2() {
document.getElementById('yearInput').value = document.getElementById('year').value }

function pickvalue3() {
document.getElementById('makeInput').value = document.getElementById('make').value }

</script>