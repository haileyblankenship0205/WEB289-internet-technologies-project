<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Paul's pottery - Register</title>
    <link rel="stylesheet" type="text/css" href="css/forms.css">
    <link href="css/styles.css" rel="stylesheet">
  </head>
  <body>
  <div class="header">
			<h2>Register</h2>
		</div>
		
		<?php include 'private/gen-nav.php'; ?>

    <form method="post" action="register.php">
    <?php echo display_error(); ?>
      <div class="input-group">
        <label>First Name</label>
        <input type="text" name="firstname" value="<?php echo $firstname; ?>" required>
      </div>
      <div class="input-group">
        <label>Last Name</label>
        <input type="text" name="lastname" value="<?php echo $lastname; ?>" required>
      </div>
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>" required>
      </div>
      <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>" required>
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1" required>
      </div>
      <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2" required>
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="register_btn">Register</button>
      </div>
      <p>Already a member? <a href="login.php">Sign in</a></p>
      <p><a href="index.php">Return Home</a></p>
    </form>
  </body>
</html>