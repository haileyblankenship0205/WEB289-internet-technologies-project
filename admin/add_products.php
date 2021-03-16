<?php include('../functions.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Pauls Pottery - Add Products </title>
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/forms.css">

</head>
<body>
	<header class="header">
        <h1>Add Products</h1>
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

	<form method="post" action="add_products.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Product Name</label>
			<input type="text" name="product_name" value="<?php echo $product_name; ?>">
		</div>
		<div class="input-group">
			<label>Product Code</label>
			<input type="text" name="product_code" value="<?php echo $product_code; ?>">
		</div>
		<div class="input-group">
			<label>Category ID</label>
			<input type="text" name="category_id" value="<?php echo $category_id; ?>">
		</div>
		<div class="input-group">
			<label>Product Price</label>
			<input type="text" name="product_price" value="<?php echo $product_price; ?>">
		</div>
		<div class="input-group">
			<label>Product Stock</label>
			<input type="text" name="product_stock" value="<?php echo $product_stock; ?>">
		</div>
		<div class="input-group">
			<label>Product Img URL</label>
			<input type="text" name="product_image" value="<?php echo $product_image; ?>">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="add_products_btn"> + Product</button>
		</div>
	</form>
</body>
</html>