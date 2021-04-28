<?php include ('db-cred.php');

  $db = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }
?>