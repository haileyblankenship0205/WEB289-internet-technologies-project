<?php

  session_start();
  include 'private/database-connection.php';
  $status="";
  if (isset($_POST['product_id']) && $_POST['product_id']!=""){
    $product_id = $_POST['product_id'];
    $result = mysqli_query($db,"SELECT * FROM `product` WHERE `product_id`='$product_id'");
    $row = mysqli_fetch_assoc($result);
    $product_name = $row['product_name'];
    $product_code = $row['product_code'];
    $product_price = $row['product_price'];
    $product_image = $row['product_image'];

    $cartArray = array(
      $product_id=>array(
      'product_name'=>$product_name,
      'product_id'=>$product_id,
      'product_price'=>$product_price,
      'quantity'=>1,
      'product_image'=>$product_image)
    );

    if(empty($_SESSION["shopping_cart"])) {
      $_SESSION["shopping_cart"] = $cartArray;
      $status = "<div class='box'>Product is added to your cart!</div>";
    }else{
      $array_keys = array_keys($_SESSION["shopping_cart"]);
      if(in_array($product_id,$array_keys)) {
        $status = "<div class='box' style='color:red;'>
        Product is already added to your cart!</div>";	
      } else {
      $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
      $status = "<div class='box'>Product is added to your cart!</div>";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Paul's Pottery - Shop</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href='css/products.css' rel='stylesheet'>
  </head>
  <body>
    <header id="page-header" role="banner" aria-label="document-header">
      <div id="heading">
        <h1>Shop Paul's Pottery</h1>
      </div>
    </header> 

    <?php
      include 'private/user-nav.php';
      if(!empty($_SESSION["shopping_cart"])) {
        $cart_count = count(array_keys($_SESSION["shopping_cart"]));
    ?>
    <div class="cart_div">
      <a href="cart.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
    </div>

    <?php
      }
      $result = mysqli_query($db,"SELECT * FROM `product`");
      while($row = mysqli_fetch_assoc($result)){
        echo "<section class='product_wrapper'>
            <form method='post' action=''>
            <input type='hidden' name='product_id' value=".$row['product_id']." />
            <div class='image'><img src='".$row['product_image']."' /></div>
            <div class='name'>".$row['product_name']."</div>
            <div class='price'>$".$row['product_price']."</div>
            <button type='submit' class='buy'>+ Buy Now</button>
            </form>
            </section>";
            }
      mysqli_close($db);
    ?>
  </body>
</html>