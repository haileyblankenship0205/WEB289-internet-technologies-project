<?php
include 'functions.php';

$products = $db->query('SELECT product_image, product_name, product_price FROM product');
?>
?>

<html>
  <head>
  <meta charset="utf-8">
    <title>Paul's Pottery - Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/products.css" rel="stylesheet">
  </head>

  <body>
    <header id="page-header" role="banner" aria-label="document-header">
      <div id="heading">
        <h1>Shop Paul's Pottery</h1>
        <p>Log in to purchase pottery items</p>
      </div>
    </header>
      
    <?php include 'private/gen-nav.php'; 

    $result = mysqli_query($db,"SELECT * FROM `product`");
    while($row = mysqli_fetch_assoc($result)){
		echo "<section class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='product_id' value=".$row['product_id']." />
			  <div class='image'><img src='".$row['product_image']."' /></div>
			  <div class='name'>".$row['product_name']."</div>
		   	  <div class='price'>$".$row['product_price']."</div>
			  </form>
        </section>";
        }
mysqli_close($db);
?>
  </body>
</html>
