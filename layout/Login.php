
<?php
// Konektirame se so baza, ne znam zaso
// ne ste gi upotrebile veke funkciite ja so gi napisa

// $connection=mysqli_connect('127.0.0.1','root','','baza');
// $utf8="SET NAMES UTF8";
// mysqli_query($connection,$utf8);
#require 'connect.php';







session_start();
//Proveruvame so saka da naprae user-o
if (isset($_POST["logout"])) {
	Logout_user();
}
elseif (isset($_POST["login"])) {
	Login_user();
}

//U baza:
//username, password, id_korisnik

function Login_user() 
{
	require 'connect.php';
	// $connection=mysqli_connect('127.0.0.1','root','','baza');
	// $utf8="SET NAMES UTF8";
	// mysqli_query($connection,$utf8);

	
	if (empty($_POST['username']))
	{
		// Poraka za prazen username or smth
	}
	elseif (empty($_POST['password']))
	{
		//Poraka za prazen pw or ssh2_methods_negotiated()
	}
	elseif (!empty($_POST['username']) && !empty($_POST['password'])) 
	{
		$username = mysqlI_real_escape_string($rangiraj,$_POST['username']);
		$sql = "SELECT id_korisnik, username, password, fakultet FROM korisnici WHERE username = '" . $username . "';";
		$result_of_login_check = mysqli_query($rangiraj,$sql);
		$number_of_rows = mysqli_num_rows($result_of_login_check);
		if ($number_of_rows == 1)
		{

			$result_array = mysqli_fetch_array($result_of_login_check);
			$password = $_POST['password'];
			
			if (password_verify($password , $result_array['password']))
			{
				$_SESSION['username'] = $result_array['username'];
				$_SESSION['loggedin'] = true;
				$_SESSION['uid'] = $result_array['id_korisnik'];
				$fax = $_SESSION['fax'] = $result_array['fakultet'];


				$fax_query = mysqli_query($rangiraj, "SELECT * FROM fakulteti WHERE ime_fakultet = '$fax' ");
				
				while($niza = mysqli_fetch_array($fax_query))
				{	
					$_SESSION['id_fakultet'] = $niza['id_fakultet'];
					$_SESSION['id_kampus'] = $niza['id_kampus'];
				}

				
				
				header("Location: ../index.php?page=pocetna");
			}
			else
			{
				header("Location: ../index.php?page=najavise");
			}

		}
		else
			{
				header("Location: ../index.php?page=najavise");
			}
	}
}



function Logout_user(){
	if(isset($_SESSION['username'])){
    session_destroy();
    unset($_SESSION['username']);
	header("Location: ../index.php?page=pocetna");

}
else{
	header("Location: ../index.php?page=pocetna");
}
}
