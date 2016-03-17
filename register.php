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
//	sleep(5);
	header('Location: kursus.html');

}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>BahasaKita</title>
		<link rel="stylesheet" type="text/css" href="style/style.css"/>
	</head>
	<body>
	<div class="nav">
	            <div class="logo"><center><img class="" src="img/Logo.png" width="200" height="60"></center></div>
	            <ul class="ul1"><h3>
                <li><a href="index.html">Beranda</a></li>
	        <li><a href="about-us.html">Tentang Kami</a></li>
                <li><a href="#">Kamus</a></li>
                <li><a href="register.php">Kursus</a></li>
                </ul>
                <div class="twit">
                <h4>@bahasakita</h4><img src="img/twit.png" width="70px" height="70px" /> 
                </div>
                <div class="gplus">
                <h4>bahasakita</h4><img src="img/gplus.png" width="70px" height="70px" /> 
                </div>
      
                </h3>
            
            </div>
		<section>
		<div id="wrapperreg">
		   <form class="register" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input class="input_text" type="text" size="20" name="email" placeholder="E-mail"/><br />
<input class="input_text" type="text" size="20" name="username" placeholder="Username"/><br />
<input class="input_text" type="text" size="20" name="password" placeholder="Passowrd"/><br />
<input class="submit" type="submit" value="Daftar" name="submit"\>
</form>
</div>
		</section>
	
			
</body>
</html>
"
