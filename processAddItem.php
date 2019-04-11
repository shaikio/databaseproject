<?php 

$dbname = "dealership";
$conn = mysqli_connect("localhost", "root", "", $dbname);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$vYear = $_GET['vYear'];
$vMake = $_GET['vMake'];
$vModel = $_GET['vModel'];
$vColor = $_GET['vColor'];

$sql_Statement = "INSERT INTO `inventory` (`make`, `model`, `year`, `color`) VALUES ('$vMake', '$vModel', '$vYear', '$vColor')";
echo '<script type="text/javascript">alert("Vehicle added successfully!");</script>';

if ($conn) {
	$result = mysqli_query($conn, $sql_Statement);
	if ($result) {
		include('showAddVehicle.php');
	}
	else {
		echo "Error inserting vehicle" . mysqli_error($conn);
	}
}
else {
	echo "Error connecting" . mysqli_connect_error();
}
?>

<!--
This page manages the addition of items logic between the database and the site for vehicle adding purposes.
!-->
