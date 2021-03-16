<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pauls Pottery - Account</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>

  <body>
  <nav role="navigation">
      <label for="nav-checkbox" id="nav-trigger">Menu</label>
      <input type="checkbox" id="nav-checkbox">
      <ul>
        <li><a href="welcome.php">Home</a></li>
        <li><a href="customer-shop.php">Shop</a></li>
		    <li><a href="account.php">Account</a></li>
      </ul>
    </nav>
    
    <h1>Account</h1>
    <button class="btn"><?php  if (isset($_SESSION['user'])) : ?><a href="index.html">Logout <?php echo $_SESSION['user']['user_first_name']; ?></a><?php endif ?></button>
  </body>
</html


