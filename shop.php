<?php
include 'functions.php';

$products = $db->query('SELECT product_image, product_name, product_price FROM product');
?>
?>

<html>
  <head>
  <meta charset="utf-8">
    <title>Pauls Pottery - Shop Pottery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/products.css" rel="stylesheet">
  </head>

  <body>
    <header id="page-header" role="banner" aria-label="document-header">
      <div>
        <h1>Shop Pauls Pottery</h1>
        <p>Log in to purchase pottery items</p>
      </div>
    </header>
      
    <nav role="navigation">
      <label for="nav-checkbox" id="nav-trigger">Menu</label>
      <input type="checkbox" id="nav-checkbox">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="login.php">Log In</a></li>
      </ul>
    </nav>   

    <?php foreach ($products as $products){ ?>
    <section>  
        <img src = "<?php echo $products['product_image']; ?>">
        <p><?php echo $products['product_name']; ?></p>
        <p><?php echo "$" . $products['product_price']; ?></p>
    </section>
    <?php } ?>
  </body>
</html>
