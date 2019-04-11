<?php


echo '<div class="menu-container">
<div id="topmost-part"> <h1 id="after-login-heading"> Car Dealership </h1> </div>
<div class="menu-container">
 <span class="menu-item"><a href="showSearch.php"> Search </a> </span> |
 <span class="menu-item"><a href="showAddVehicle.php"> Add New Vehicle </a></span> |
 <span class="menu-item"><a href="yourInventory.php"> Your Vehicles </a></span> |

</div>
</div>';

echo '<style type="text/css">
#topmost-part {
	background-color: black;
	padding-bottom: 20px;
	padding-top: 20px;
}

h2 {
	text-align: center;
}

#after-login-heading {
	color: green;
	padding-top: 15px;
	text-align: center;
}

body {
	background-color: tan;
}

.menu-container {
	color:#EEE;
  	background-color:#222;
  	padding:6px;
  	font-size:1.5em;
}

a:link {
	color: white;
	text-decoration: none;
}
	
a:hover {
	background-color: green;
	text-decoration: underline;
}

a:visited {
	color: white;
	text-decoration: none;
}

#table-of-results {
	text-align: center;
}

 </style>';
 
$dbname = "dealership";
$conn = mysqli_connect("localhost", "root", "", $dbname);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$searchForYear = $_GET['vYear'];
$searchForMake = $_GET['vMake'];
$searchForModel = $_GET['vModel'];
$searchForColor = $_GET['vColor'];

$sql_statement = "SELECT * FROM inventory WHERE 
year LIKE '%$searchForYear%' AND make LIKE '%$searchForMake%' AND model LIKE '%$searchForModel%' AND color LIKE '%$searchForColor%'";

if ($conn) {
	$result = mysqli_query($conn, $sql_statement);
	if ($result) {
				echo '<h2> Your Results (If Any) </h2>';
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<div id="table-of-results">';
				
				echo "Year: " . $row['year'] . "<br>";
				echo "Make: " . $row['make'] . "<br>";
				echo "Model: " . $row['model'] . "<br>";
				echo "Color: " . $row['color'] . "<br>";
				echo "-----------------------<br>";
				echo '</div>';
			}	
	}
}
?>