<?php
define('DB_HOST','localhost');
define('DB_NAME','bahasakita');
define('DB_USER','root');
define('DB_PASSWORD','');
$conn=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: ".mtsql_error());
$db=mysql_select_db(DB_NAME,$conn);
$username=$_POST['user'];
$password=$_POST['password'];
session_start();
if(isset($_POST['submit'])) {
	$query=mysql_query("SELECT *  FROM UserName where userName = '$_POST[username]' AND pass = '$_POST[password]'") or die(mysql_error());
	$row=mysql_fetch_array($query) or die(mysql_error());
	if(!empty($_POST['user'] AND !empty($_POST['password']))) {
		$_SESSION['username']=$row['password'];
		header("Location: index.html");
	}
	else {
		echo "Kamu telah memasukkan username dan password yang salah!";
	}
}
?>



