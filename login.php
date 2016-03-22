<?php
session_start();
include 'connect.php';
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



