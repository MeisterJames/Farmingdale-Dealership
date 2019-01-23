<?php
  require "header.php";
?>
<head>
	<link rel="stylesheet" href="css/trade_form.css">
</head>
<?php //Redirects to Index.php if employee is not logged in
if (!isset($_SESSION['eid'])) { 
	header("Location: ../index.php"); }
?>

<div class="page-wrap"> 

<div class="bg" id="bg">
<div class="bgmiddle" id="bgmiddle">
    <section class="py-3">

      <div class="container">
        <p class="lead" id="missionStatement"><font color="white">Employee Trade-In Form</font></p>
		
      </div>

    </section>
	  </div>


<div id="jtron" class="jumbotron">
<form id="testing" action="includes/add_trade.inc.php" method="POST">
		<!-- <b>Full Name:</b>
		<input type="text" name="fullName" id="Input7" class="form-control" placeholder="Full Name"><br> -->
		<b>User(Name):</b>
		<div class="form-inline">
<?php
    $sql = "SELECT uidUsers FROM users ORDER BY uidUsers ASC;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

 if ($resultCheck > 0) {
	 echo "<select id='fullName' class='form-control mb-2 mr-sm-2' onchange='pickvalue4()' required>";
	 echo "<option selected disabled hidden value=''>Select User...</option>";
 while ($row = mysqli_fetch_assoc($result)) {
	 $id = $row['invid'];
  echo  "
		<option>" . $row['uidUsers'] . "</option>";		
 }
}
echo "</select>";
echo "<input id='nameInput' class='form-control mb-2 mr-sm-2' name='fullName' readonly='readonly' required>";
?>
</div><br>	
		

			        <b>Year:</b>
		<div class="form-inline">
			<select id="year" class="form-control mb-2 mr-sm-2" onchange="pickvalue2()" required>
				<?php 
				for($i = 1990 ; $i < 2020; $i++){
				echo "
					 <option selected disabled hidden value=''>Select Year...</option>
					 <option>$i</option>";
				}
				?>
			</select>

			<input id="yearInput" class="form-control mb-2 mr-sm-2" name="year" readonly="readonly" required>
		</div><br>
    <!-- <input type="text" name="make" placeholder="Make"><br> -->
	        <b>Make:</b> 
		
		<div class="form-inline">
			<select id="make" class="form-control mb-2 mr-sm-2" onchange="pickvalue3()" required>
				<option selected disabled hidden value=''>Select Make...</option>
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
		</div><br>
	<b>Model:</b>
    <input type="text" name="model" class="form-control" id="Input3" placeholder="Model" required><br>
	
    <!-- <input type="text" name="condi" placeholder="Condition"><br> -->
			<b>Condition:</b> 
		<div class="form-inline">
			<select id="condition" class="form-control mb-2 mr-sm-2" onchange="pickvalue1()" required>
				<option selected disabled hidden value=''>Select Option...</option>
				<option>New</option>
				<option>Excellent</option>
				<option>Good</option>
				<option>Fair</option>
				<option>Poor</option>
			</select>

			<input id="conditionInput" class="form-control mb-2 mr-sm-2" name="condi" readonly="readonly">
		</div><br>
	
	
	<b>Miles:</b>
    <input type="text" name="miles" class="form-control" id="Input6" placeholder="Miles" required><br>
	<b>Value:</b>
    <input type="text" name="value" class="form-control" id="Input7" placeholder="Value" required><br>
    <!-- <button type="submit" name="submit">Submit</button> -->
	<button type="submit" id="tradebtn" class="btn btn-primary" name="submit">Add Trade-In Vehicle</button>		
</form>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>






</div> <!-- bg -->
</div> <!-- page-wrap -->
<script>
function pickvalue1() {
document.getElementById('conditionInput').value = document.getElementById('condition').value }

function pickvalue2() {
document.getElementById('yearInput').value = document.getElementById('year').value }

function pickvalue3() {
document.getElementById('makeInput').value = document.getElementById('make').value }

function pickvalue4() {
document.getElementById('nameInput').value = document.getElementById('fullName').value }
</script>



<footer class="site-footer">
  <?php require "footer.php";  ?>
</footer>