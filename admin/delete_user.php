<?php include('../functions.php')?>

<!DOCTYPE html>
<html>
<head>
	<title>Pauls Pottery - Delete User</title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/forms.css">

</head>
<body>
	<div class="header">
		<h2>Admin - Delete User</h2>
	</div>

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
	
	<form method="post" action="delete_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="firstname" value="<?php echo $firstname; ?>">
		</div>
		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="lastname" value="<?php echo $lastname; ?>">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="delete_user_btn"> - Remove User</button>
		</div>
	</form>
</body>
</html>