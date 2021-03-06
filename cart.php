<?php

  session_start();
  $status="";
  if (isset($_POST['action']) && $_POST['action']=="remove"){
  if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["product_id"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
        }		
      }
  }

  if (isset($_POST['action']) && $_POST['action']=="change"){
    foreach($_SESSION["shopping_cart"] as &$value){
      if($value['product_id'] === $_POST["product_id"]){
          $value['quantity'] = $_POST["quantity"];
          break; // Stop the loop after we've found the product
      }
    }	
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Paul's Pottery - Cart</title>
    <link href='css/styles.css' rel='stylesheet'>
    <link rel='stylesheet' href='css/products.css' type='text/css' media='all' />
  </head>

  <body>
    <header id="page-header" role="banner" aria-label="document-header">
      <div id="heading">
        <h1>Shopping Cart</h1>
      </div>
    </header> 

    <?php include 'private/user-nav.php' ?>

    <?php
      if(!empty($_SESSION["shopping_cart"])) {
        $cart_count = count(array_keys($_SESSION["shopping_cart"]));
      }
    ?>

    <div class="cart">
    <?php
      if(isset($_SESSION["shopping_cart"])){
        $total_price = 0;
    ?>	
    <table class="table">
      <tbody>
        <tr>
          <td></td>
          <td>ITEM NAME</td>
          <td>QUANTITY</td>
          <td>UNIT PRICE</td>
          <td>ITEMS TOTAL</td>
        </tr>	

      <?php		
        foreach ($_SESSION["shopping_cart"] as $product){
      ?>
      <tr>
        <td><img src='<?php echo $product["product_image"]; ?>' width="50" height="40" /></td>
        <td><?php echo $product["product_name"]; ?><br />
          <form method='post' action=''>
            <input type='hidden' name='product_id' value="<?php echo $product["product_id"]; ?>" />
            <input type='hidden' name='action' value="remove" />
            <button type='submit' class='remove'>Remove Item</button>
          </form>
        </td>

        <td>
          <form method='post' action=''>
            <input type='hidden' name='product_id' value="<?php echo $product["product_id"]; ?>" />
            <input type='hidden' name='action' value="change" />
            <select name='quantity' class='quantity' onchange="this.form.submit()">
              <option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
              <option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
              <option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
              <option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
              <option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
            </select>
          </form>
        </td>

        <td><?php echo "$".$product["product_price"]; ?></td>
        <td><?php echo "$".$product["product_price"]*$product["quantity"]; ?></td>
      </tr>

      <?php
        $total_price += ($product["product_price"]*$product["quantity"]);
      }
      ?>

      <tr>
        <td colspan="5" align="right">
          <strong>TOTAL: <?php echo "$".$total_price; ?></strong>
        </td>
      </tr>
    </tbody>
  </table>		
      <?php
    }else{
      echo "<h3>Your cart is empty!</h3>";
      }
    ?>
    </div>

    <a href="customer-shop.php">Continue Shopping</a>

    <div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>

  </body>
</html>