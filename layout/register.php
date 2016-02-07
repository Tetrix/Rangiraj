<?php
// mozno e i tuka da treba session_start, ne mozam da probam kaj mene

require('connect.php');

// $connection=mysqli_connect('127.0.0.1','root','','baza');
// $utf8="SET NAMES UTF8";
// mysqli_query($connection,$utf8);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password']))
{

	

	//Zimame gi vrednostite od user-o
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	if ($password == $confirm_password && filter_var($username, FILTER_VALIDATE_EMAIL))
		{
	    	register_user();
		}

}



function register_user()

{

require('connect.php');



$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$fax = $_POST['fax'];

//Malce safety-precaution
$username = htmlspecialchars($username);
$password = htmlspecialchars($password);
$fax = htmlspecialchars($fax);

//Isto
$username = mysqli_real_escape_string($rangiraj, $username);
$password = mysqli_real_escape_string($rangiraj, $password);

//Hashirame go passwordo, default algoritam e bcrypt
//Neka se naprae poleto u bazata za password pogolemo, da receme 255
$password = password_hash($password, PASSWORD_DEFAULT);

//Smenite go 'tabela' u vistinskoto ime kako e na tabelata
$register_sql = "INSERT INTO korisnici(username,password,fakultet) VALUES ('$username', '$password', '$fax')";
mysqli_query($rangiraj, $register_sql);

   header("Location: ../index.php?page=pocetna");

}
?>
