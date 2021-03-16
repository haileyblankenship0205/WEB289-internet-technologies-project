<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pauls Pottery - Delete Products </title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/forms.css">

</head>
<body>
	<header class="header">
        <h1>Delete Products</h1>
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

	<form method="post" action="delete_products.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Product Name</label>
			<input type="text" name="product_name" value="<?php echo $product_name; ?>">
		<div class="input-group">
			<button type="submit" class="btn" name="delete_products_btn"> - Product</button>
		</div>
	</form>
</body>
</html>