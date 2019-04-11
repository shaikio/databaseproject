<?php

$id = $_GET['id'];

$dbname = "dealership";
$conn = mysqli_connect("localhost", "root", "", $dbname);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM inventory WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
   mysqli_close($conn);
   header('Location: yourInventory.php');
   exit;
} else {
   echo "Error deleting record";
}

?>