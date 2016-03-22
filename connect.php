<?php
define('DB_HOST','localhost');
define('DB_NAME','bahasakitaDB');
define('DB_USER','nizar');
define('DB_PASSWORD','vendetta44');
$conn=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if(!$conn) {
	die("Failed to connect to MySQL: ".mysql_error());
}
$db=mysql_select_db(DB_NAME,$conn);
?>
