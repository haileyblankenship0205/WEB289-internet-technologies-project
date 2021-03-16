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
	<title>Pauls pottery - Admin Home</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">

</head>
<body>
	<header id="page-header">
		<div>
		<h1>Admin - Home Page</h1>
		<h2>Welcome, <strong><?php echo $_SESSION['user']['user_first_name']; ?></strong></h2>
		<div>
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

	<h2>View All Products</h2>

</body>
</html>