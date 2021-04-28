<nav role="navigation">
  <label for="nav-checkbox" id="nav-trigger">Menu</label>
  <input type="checkbox" id="nav-checkbox">
  <ul>
    <li><img src="images/logo1.png"></li>
    <li><a href="welcome.php">Home</a></li>
    <li><a href="customer-shop.php">Shop</a></li>
    <li><a href="cart.php">Cart</a></li>
    <li><?php  if (isset($_SESSION['user'])) : ?><a href="index.php">Logout <?php echo $_SESSION['user']['user_first_name']; ?></a>
      <?php endif ?></li>
  </ul>
</nav>