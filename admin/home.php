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

		<?php include '../private/admin-nav.php';?>

		<h2>View All Products</h2>

		<?php
			$product = mysqli_query($db,"SELECT * FROM product");

			echo "<table border='1'>
			<tr>
			<th>Product ID</th>
			<th>Category ID</th>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Product Stock</th>
			</tr>";

			while($row = mysqli_fetch_array($product))
			{
			echo "<tr>";
			echo "<td>" . $row['product_id'] . "</td>";
			echo "<td>" . $row['category_id'] . "</td>";
			echo "<td>" . $row['product_name'] . "</td>";
			echo "<td>" . '$'. $row['product_price'] . "</td>";
			echo "<td>" . $row['product_stock'] . "</td>";
			echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>