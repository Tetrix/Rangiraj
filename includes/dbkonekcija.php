<?php
require("dbKonstanti.php");

// 1. create db connection
$connection = mysql_connect(DB_HOST,DB_USER,DB_PASS);
if (!$connection) {
	die("Database connection failed: " . mysql_error());
}

// 2. select db
$db_select = mysql_select_db(DB_NAME,$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}
?>
