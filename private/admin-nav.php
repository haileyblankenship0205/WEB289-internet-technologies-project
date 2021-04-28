<nav role="navigation">
  <label for="nav-checkbox" id="nav-trigger">Menu</label>
  <input type="checkbox" id="nav-checkbox">
	<ul>
    <li><img src="../images/logo1.png"></li>
		<li><a href="home.php">Home</a></li>
		<li><a href="create_user.php">Add User</a></li>
		<li><a href="delete_user.php">Delete User</a></li>
		<li><a href="add_products.php">Add Products</a></li>
		<li><a href="delete_products.php">Delete Products</a></li>
		<li><a href="orders.php">Orders</a></li>
    <li><?php  if (isset($_SESSION['user'])) : ?><a href="../index.php">Logout <?php echo $_SESSION['user']['user_first_name']; ?></a>
      <?php endif ?></li>
	</ul>
</nav>