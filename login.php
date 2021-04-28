<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Paul's Pottery - Login</title>
		<link href="css/forms.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>

	<body>
		<div class="header">
			<h2>Login</h2>
		</div>
		
		<?php include 'private/gen-nav.php'; ?>

		<form method="post" action="login.php">
			<?php echo display_error(); ?>
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>" required>
			</div>

			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password" required>
			</div>

			<div class="input-group">
				<button type="submit" class="btn" name="login_btn">Login</button>
			</div>

			<p>Not yet a member? <a href="register.php">Sign up</a></p>
			<p><a href=index.php>Return Home</a></p>
			<p><a href=pass-reset.php>Forgot Password</a></p>
		</form>
	</body>
</html