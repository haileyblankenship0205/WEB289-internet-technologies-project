<?php 
include('../functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pauls pottery - Orders</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">

</head>
<body>
	<header id="page-header">
		<div>
		<h1>View Orders</h1>
    </header>
	<nav>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="create_user.php">Add User</a></li>
			<li><a href="delete_user.php">Delete User</a></li>
			<li><a href="add_products.php">Add Products</a></li>
			<li><a href="delete_products.php">Delete Products</a></li>
            <li><a href="orders.php">Orders</a></li>
		    <li><a href="../account.php">Account</a></li>
		</ul>
	</nav>
</body>
</html>