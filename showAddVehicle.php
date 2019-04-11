
<html>
	<title>  </title>
<head>
	<link rel="stylesheet" type="text/css" href="custom-styles.css">
</head>

<body>
<div id="topmost-part"> <h1 id="after-login-heading"> Car Dealership </h1> </div>
<div class="menu-container">
<span class="menu-item"> Welcome, <?php
session_start();
echo $_SESSION['username']; ?>. <a href="logout.php"> Logout </a></span> |
<span class="menu-item"><a href="showSearch.php"> Search </a> </span> |
 <span class="menu-item"><a href="showAddVehicle.php"> Add New Vehicle </a></span> |
 <span class="menu-item"><a href="yourInventory.php"> Your Inventory </a></span> |
    
</div>
<div id="form-container">
	<h2>Add a vehicle</h2>
	<p>Fill out all of the fields and submit</p>
	<form action="processAddItem.php">
		
		
		<label for="add-vehicle-year"> Year: </label>
		<input type="text" name="vYear" class="search-textbox" id="vYear"></input><br>
		
		<label for="add-vehicle-make"> Make: </label>
		<input type="text" name="vMake" class="search-textbox" id="vMake"></textarea><br>
		
		<label for="add-vehicle-model"> Model: </label>
		<input type="text" name="vModel" class="search-textbox" id="vModel"></textarea><br>
		
		<label for="add-vehicle-color"> Color: </label>
		<input type="text" name="vColor" class="search-textbox" id="vColor"></textarea><br>
		<button type="submit" class="search-or-add-button">Add</button>
	</form>
</div>
</body>
</html>

<!--
This page manages the logic between the database and the site for adding vehicles.
!-->