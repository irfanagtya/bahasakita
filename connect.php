<?php
define('DB_HOST','localhost');
define('DB_NAME','bahasakitaDB');
define('DB_USER','root');
define('DB_PASSWORD','');
$conn=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: ".mtsql_error());
$db=mysql_select_db(DB_NAME,$conn);

session_start();
if(isset($_POST['submit'])) {
	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	$query=mysql_query("SELECT *  FROM UserName where userName = '$username' AND pass = '$password'") or die(mysql_error());
	$row=mysql_fetch_array($query) or die(mysql_error());
	if(!empty($username) AND !empty($password)) {
		$_SESSION['username']=$row['password'];
		header("Location: index.html");
	}
	else {
		echo "Kamu telah memasukkan username dan password yang salah!";
	}
}
?>



