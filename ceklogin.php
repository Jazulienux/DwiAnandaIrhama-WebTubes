
<div class="container-fluid bg-1 text-center">
<center>
<?php
session_start(); //memulai session
include "config.php";
$username = $_POST['username'];//mengambil isian username dan password dari form
$password = $_POST['password'];

//query untuk mengambil data user dari database sesuai dengan username inputan form
$q = "SELECT * FROM tb_user WHERE username = '$username' " ;
$result = mysqli_query($mysqli,$q);
$data = mysqli_fetch_array($result);
//cek kesesuaian password masukan dengan database
if ($password == $data['password']) 
	{
		$_SESSION['username'] = $data['username'];
		echo "SELAMAT ANDA SUDAH BERHASIL LOGIN";
		echo "<br><a href='reservasiform.php'>Selanjutnya</a>";
	}
//jika password tidak sesuai
else 
	{
		$warning = "Username / Password Salah";
		echo $warning;
	}
?>
</div>

