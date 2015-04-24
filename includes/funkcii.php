	
<?php 
function redirectTo ($lokacija = NULL){
	if ($lokacija != NULL)
		header("Location: {$lokacija}");
	exit;
}

function queryOK($result){
	if (!$result)
		die("Database query failed");
}

function passwordEncrypt($password); {
	$hashFormat = "$2y$10$"; //use blowfish with cost: 10
	$saltLength = 22; //blowfish salts treba da se >22 chars
	$salt = generateSalt($saltLength);
	$formatAndSalt = $hashFormat . $salt;
	$hash = crypt($password, $formatAndSalt);
	return $hash;
}

function generateSalt($length); {
	$uniqueRandomString = md5(uniqid(mt_rand(), true)); //md5 returns 32 chars
	$base64string = base64_encode($uniqueRandomString); // valid chars a-zA-Z0-9./
	$modifiedBase64String = str_replace(+, ., $base64string); // "+" is valid in b64
	$salt = substr($modifiedBase64String, 0, $length); // truncate to correct length
	return $salt;
}

function passwordCheck($password, $existingHash) {
	$hash = crypt($password, $existingHash);
	if ($hash === $existingHash) {
		return true;
	} else {
		return false;
	}
}




?>