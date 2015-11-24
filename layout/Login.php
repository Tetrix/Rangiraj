<?php
// Konektirame se so baza, ne znam zaso
// ne ste gi upotrebile veke funkciite ja so gi napisa
$connection=mysqli_connect('127.0.0.1','root','','baza');
$utf8="SET NAMES UTF8";
mysqli_query($connection,$utf8);

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

// function Login_user() 
// {

// 	$connection=mysqli_connect('127.0.0.1','root','','baza');
// 	$utf8="SET NAMES UTF8";
// 	mysqli_query($connection,$utf8);

	
// 	if (empty($_POST['username']))
// 	{
// 		// Poraka za prazen username or smth
// 	}
// 	elseif (empty($_POST['password']))
// 	{
// 		//Poraka za prazen pw or smth
// 	}
// 	elseif (!empty($_POST['username']) && !empty($_POST['password'])) 
// 	{
// 		$username = mysql_real_escape_string($_POST['username']);
// 		$sql = "SELECT username, password FROM korisnici WHERE username = '" . $username . "';";
// 		$result_of_login_check = mysqli_query($connection,$sql);
// 		$number_of_rows = mysqli_num_rows($result_of_login_check);
// 		if ($number_of_rows == 1)
// 		{

// 			$result_array = mysqli_fetch_array($result_of_login_check);
// 			if ($_POST['password'] == $result_array['password'])
// 			{
// 				$_SESSION['username'] = $result_array['username'];
// 				$_SESSION['loggedin'] = 1;
// 					header("Location: ../index.php?page=pocetna");
// 			}
				 
// 			else 
// 			{
// 				echo "AEMRS";
// 			}
// 		// else 
// 		// 	{
// 		// echo "AEMRS";
// 		// 	}
// 		}
// 	}
// }



function Logout_user(){
    session_destroy();
    unset($_SESSION['username']);
	header("Location: ../index.php?page=zanas");
}


// <script type="text/javascript">
//     var button = document.getElementById("button");
//     var d3 = document.getElementById("d3");

//     function showMore() {
//         button1.style.display = "none";
//         l1.style.display = "none";
//         d3.style.display = "block";
//         d4.style.display = "block";
//     }

//     function showLess() {
//         button1.style.display = "inline-block";
//         l1.style.display = "inline-block";
//         button.style.display = "inline-block";
//         d3.style.display = "none";
//         d4.style.display = "none";
//     }
// </script>