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

	$orders = $db->query('SELECT * FROM order, order_detail');
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
    
    <?php include '../private/admin-nav.php';

      $orderDetail = mysqli_query($db,"SELECT * FROM order_detail");

      echo "<table border='1'>
      <tr>
      <th>Order Detail ID</th>
      <th>Order ID</th>
      <th>Product ID</th>
      <th>Price</th>
      <th>Quantity</th>
      </tr>";

      while($row = mysqli_fetch_array($orderDetail))
      {
      echo "<tr>";
      echo "<td>" . $row['order_detail_id'] . "</td>";
      echo "<td>" . $row['order_id'] . "</td>";
      echo "<td>" . $row['product_id'] . "</td>";
      echo "<td>" . '$'. $row['order_detail_price'] . "</td>";
      echo "<td>" . $row['order_detail_quantity'] . "</td>";
      echo "</tr>";
      }
      echo "</table>";
    ?>

  </body>
</html>