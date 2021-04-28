<?php 
include 'private/database-connection.php';
session_start();

// variable declaration
$firstname = "";
$lastname = "";
$username = "";
$email    = "";
$errors   = array(); 

//USER FUNCTIONS
// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $firstname, $lastname, $username, $email;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$firstname = ($_POST['firstname']);
	$lastname = ($_POST['lastname']);
	$username = ($_POST['username']);
	$email = ($_POST['email']);
	$password_1 = ($_POST['password_1']);
	$password_2 = ($_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($firstname)) { 
		array_push (e($errors, "First Name is required")); 
	}
	if (empty($firstname)) { 
		array_push($errors, "Last Name is required"); 
	}

	if (empty($username)) { 
		array_push($errors, "Username is required"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO user (user_first_name, user_last_name, user_username, user_email, user_type, user_password) 
					  VALUES('$firstname', '$lastname','$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: home.php');
		}else{
			$query = "INSERT INTO user (user_first_name, user_last_name, user_username, user_email, user_type, user_password) 
					  VALUES('$firstname', '$lastname','$username', '$email', '$user_type', '$password')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: welcome.php');				
		}
	}
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM user WHERE user_id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: index.html");
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM user WHERE user_username='$username' AND user_password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: welcome.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

//PRODUCT FUNCTIONS

// variable declaration
$product_name = "";
$product_code = "";
$category_id = "";
$product_price = "";
$product_stock = "";
$product_image = "";


// call the add_products() if add_products_btn is clicked
if (isset($_POST['add_products_btn'])) {
	add_products();
}

function add_products(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $product_name, $product_code, $category_id, $product_price, $product_stock, $product_image;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$product_name = e($_POST['product_name']);
	$product_code = e($_POST['product_code']);
	$category_id = e($_POST['category_id']);
	$product_price = e($_POST['product_price']);
	$product_stock = e($_POST['product_stock']);
	$product_image = e($_POST['product_image']);

	// form validation: ensure that the form is correctly filled
	if (empty($product_name)) { 
		array_push($errors, "Product Name is required"); 
	}
	if (empty($product_code)) { 
		array_push($errors, "Product Code is required"); 
	}
	if (empty($category_id)) { 
		array_push($errors, "Category ID is required"); 
	}
	if (empty($product_price)) { 
		array_push($errors, "Product Price is required"); 
	}
	if (empty($product_stock)) { 
		array_push($errors, "Product Stock is required"); 
	}
	if (empty($product_image)) { 
		array_push($errors, "Product image URL is required"); 
	}

	// Add product if there are no errors
	$query = "INSERT INTO product (product_name, product_code, category_id, product_price, product_stock, product_image) 
		VALUES ('$product_name', '$product_code', '$category_id', '$product_price', '$product_stock', '$product_image')";
        
		if($db->query($query) == TRUE) { 
			echo "Record has been added";
		} else {
			echo "Error creating record: " . $db->error;
		}
}

// Call the delete_products() if add_products_btn is clicked
if (isset($_POST['delete_products_btn'])) {
	delete_products();
}

function delete_products() {
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $product_name;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$product_name = e($_POST['product_name']);

	// form validation: ensure that the form is correctly filled
	if (empty($product_name)) { 
		array_push($errors, "Product Name is required"); 
	}

	$query = "DELETE FROM product WHERE product_name = '$product_name'";
	
	if($db->query($query) == TRUE) { 
		echo "Record has been added";
	} else {
		echo "Error creating record: " . $db->error;
	}
}

// Call the delete_products() if add_products_btn is clicked
if (isset($_POST['delete_user_btn'])) {
	delete_user();
}

function delete_user() {
// call these variables with the global keyword to make them available in function
global $db, $errors, $firstname, $lastname;

// receive all input values from the form. Call the e() function
// defined below to escape form values
$firstname = e($_POST['firstname']);
$lastname = e($_POST['lastname']);


// form validation: ensure that the form is correctly filled
if (empty($firstname)) { 
	array_push($errors, "First Name is required"); 
}
if (empty($firstname)) { 
	array_push($errors, "Last Name is required"); 
}
	$query = "DELETE FROM user WHERE user_first_name = '$firstname' AND user_last_name = '$lastname'";
	
	if($db->query($query) == TRUE) { 
		echo "Record has been added";
	} else {
		echo "Error creating record: " . $db->error;
	}
}
