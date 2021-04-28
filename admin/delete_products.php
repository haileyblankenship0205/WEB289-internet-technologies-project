<?php include('../functions.php');

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
		<title>Pauls Pottery - Delete Products </title>
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
		<link rel="stylesheet" type="text/css" href="../css/forms.css">
	</head>

	<body>
		<header class="header">
			<h1>Delete Products</h1>
		</header>

		<?php include '../private/admin-nav.php';?>

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