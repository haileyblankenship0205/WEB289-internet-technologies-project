<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Paul's Pottery - Password Reset</title>
		<link href="css/forms.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
	</head>

	<body>
	  <div class="header">
			<h2>Reset Password</h2>
		</div>
		
		<?php include 'private/gen-nav.php'; ?>
		
    <form method="post" action="reset-conf.php">
			<?php echo display_error(); ?>

			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email" required>
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="pass-reset">Reset Password</button>
			</div>
			<p>Not yet a member? <a href="register.php">Sign up</a></p>
     	<p><a href=index.php>Return Home</a></p>
		</form>
	</body>
</html