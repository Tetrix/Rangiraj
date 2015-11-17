<?php

if (isset($_POST['submit'])) {
	//procesiraj

	//validacii
	$requiredFields = array("username", "password");
	validatePresences($requiredFields);

	if (empty($errors)) { 
		$foundUser = attemptLogin($username, $password);
		 if ($foundUser) {
		 	//Success
		 	redirectTo("rangiraj.php");
		  }
		  else{
		  	$_SESSION["message"] = "Wrong credentials."
		  	redirectTo("login.php");
		  }

function validatePresences($requiredFields) {
  global $errors;
  foreach($requiredFields as $field) {
    $value = trim($_POST[$field]);
  	if (!has_presence($value)) {
  		$errors[$field] = fieldname_as_text($field) . " can't be blank";
  	}

function has_presence($value)
{
    return isset($value) && $value !== "";
}


function logout() {
	//destroy session
        $_SESSION = array();
        session_destroy();
        $messages[] = "You have been logged out.";
}

function addUser();{
		//perform create
		$username = mysql_prep($_POST["username"]);
		$hashedPassword = password_encrypt($_POST["password"]);
		// query
		$query = "INSERT INTO korisnici (";
		$query.= " mail, password";
		$query.= ") VALUES (";
		$query.= " '{$username}', '{$hashedPassword}'";
		$query.= ")";
		$result = mysqli_query($connection, $query);
}


	 
