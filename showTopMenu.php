

<html>
	<title>Car Dealership</title>
<head>
	<link rel="stylesheet" type="text/css" href="custom-styles.css">
</head>

<body>
<div id="topmost-part"> <h1 id="after-login-heading"> Car Dealership </h1> </div>
<div class="menu-container">
<span class="menu-item"> Welcome, <?php
session_start();
echo $_SESSION['username']; ?>. <a href="logout.php"> Logout </a></span>
| </span> | <span class="menu-item">
 <span class="menu-item"><a href="showSearch.php"> Search </a></span> |
 <span class="menu-item"><a href="showAddVehicle.php"> Add Vehicle </a></span> | 
 <span class="menu-item"><a href="yourInventory.php"> Inventory </a></span> |

</div>

</body>
</html>