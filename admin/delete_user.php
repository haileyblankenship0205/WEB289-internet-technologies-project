<?php include('../functions.php');

  if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: ../login.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pauls Pottery - Delete User</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" type="text/css" href="../css/forms.css">
  </head>

  <body>
    <div class="header">
      <h2>Admin - Delete User</h2>
    </div>

    <?php include '../private/admin-nav.php';?>
    
    <form method="post" action="delete_user.php">

      <?php echo display_error(); ?>

      <div class="input-group">
        <label>First Name</label>
        <input type="text" name="firstname" value="<?php echo $firstname; ?>">
      </div>
      <div class="input-group">
        <label>Last Name</label>
        <input type="text" name="lastname" value="<?php echo $lastname; ?>">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="delete_user_btn"> - Remove User</button>
      </div>
    </form>
  </body>
</html>