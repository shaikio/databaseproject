<!DOCTYPE html>
<html>
<head>
 <title></title>
 
 <style>
  table {
   border: 5px solid black;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
   margin-top: 75px;
   
     } 
  th {
   background-color: #588c7e;
   color: white;
   border: 2px solid black;
    }
  tr {
	background-color: white;	
	}
  td {
	border: 2px solid black;
	color: black;
	}
  tr:nth-child(even) {background-color: #f2f2f2;}
  td:last-child {background-color: grey; text-align: center;}
  td:nth-last-child(2) {background-color: grey; text-align: center;}
 </style>
</head>
<body>
<div id="table-page-top">
	<div id="topmost-part"> <h1 id="after-login-heading"> Car Dealership </h1> </div>
		<div class="menu-container">
			<span class="menu-item"> Welcome, <?php
			session_start();
			echo $_SESSION['username']; ?>. <a href="logout.php"> Logout </a></span> |
			<span class="menu-item"><a href="showSearch.php"> Search </a> </span> |
			 <span class="menu-item"><a href="showAddVehicle.php"> Add Vehicle</a></span> |
			 <span class="menu-item"><a href="yourInventory.php"> Inventory </a></span> |
            
		</div>
</div>

<div id="inventory-table-listing">
 <table id="inventory-table" >
 <tr>
  <th>Year</th> <th> Make </th> <th> Model </th> <th> Color </th> <th> Delete </th> <th> Edit </th>
 </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "dealership");
 // Check connection
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
 }
 $sql = "SELECT * FROM inventory";
 $result = $conn->query($sql);
 $counter = 1;
 if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "<tr><td id='year'>" . $row['year'];
    echo "<td id='make'>" . $row['make'];
    echo "<td id='model'>" . $row['model'];
	echo "<td id='color'>" . $row['color'];
    echo "<td><a href='delete.php?id=" . $row['id']."'>Delete</a></td>";
    echo "<td id='update' onclick='myFunction($counter)'><a href='update.php?id=". $row['id']."'>Update</a></td>";
	$counter++;
}
echo '</table>';
} else { echo '0 results'; }
$conn->close();
?>

<script>
function myFunction(variable) {
	var mytable = document.getElementById("inventory-table");
	var newyear = prompt("Hello, what should the vehicle year be?", mytable.rows[variable].cells[0].innerHTML);
	var newmake = prompt("Hello, what should the vehicle make be?", mytable.rows[variable].cells[1].innerHTML);
	var newmodel = prompt("Hello, what should the vehicle model be?", mytable.rows[variable].cells[2].innerHTML);
	var newcolor = prompt("Hello, what should the vehicle color be?", mytable.rows[variable].cells[3].innerHTML);
	document.cookie = "year=" + newyear;
	document.cookie = "make=" + newmake;
	document.cookie = "model=" + newmodel;
	document.cookie = "color=" + newcolor;
}
</script>

</table>
</div>
</body>
</html>
<!-- Display all vehicles, and allow them to be changed. --->