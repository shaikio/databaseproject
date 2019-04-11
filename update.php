<?php

$id = $_GET['id'];

$year = $_COOKIE["year"];
$make = $_COOKIE["make"];
$model = $_COOKIE["model"];
$color = $_COOKIE["color"];

$dbname = "dealership";
$conn = mysqli_connect("localhost", "root", "", $dbname);
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE inventory SET year='$year', make='$make', model='$model', color='$color' WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
   mysqli_close($conn);
   header('Location: yourInventory.php');
   exit;
} else {
   echo "Error updating record";
}

?>