<?php
session_start();
$hostname="localhost";
$username="root";
$password="";
//Membuat koneksi
$conn=mysql_connect($hostname,$username,$password);
$db=mysql_select_db('bahasakitaDB',$conn);
//Mengecek koneksi
if(!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
if(isset($_POST['submit'])) {
$uname=mysql_real_escape_string($_POST["username"]);
$email=mysql_real_escape_string($_POST["email"]);
$pass=mysql_real_escape_string($_POST["password"]);
// $sqlselect="select * from data_user where email='$_POST["email"]' AND username='$_POST["username"]' AND password='$_POST["password"]' or die(mysql_error())";
$query=mysql_query("INSERT INTO data_user (email,username,password) VALUES ('$email','$uname','$pass')");
if($query) {
	echo "Pendaftaran berhasil!";
	header("Location: login.html");

}
else {

	echo "Pendaftaran gagal. Coba lagi.";
}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Pendaftaran User Bahasakita</title>
</head>
<body>
<!-- <fieldset> -->
<h1>Daftar Baru User Bahasakita</h1>
<div>
<p>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label for="email">E-mail</label><input type="text" size="20" name="email"/><br />
<label for="username">Username</label><input type="text" size="20" name="username"/><br />
<label for="pass">Password</label><input type="text" size="20" name="password"/><br />
<input type="submit" value="Daftar" name="submit"\>
</form>
</p>
</div>
</body>
</html>
