

<div class="container-fluid bg-1 text-center">
<center>
<?php
include "config.php"; // memanggil file koneksi.php untuk menghubungkan ke database
 
if(isset($_POST['simpan'])){
$username     = $_POST['username']; // memanggil nama variabel id untuk dibuat menjadi variabel baru $id
$password    = $_POST['password'];
// var_dump("$username");
// die();
//menambahkan query sql tambah data untuk memasukkan data ke database
$data = mysqli_query($mysqli,"INSERT INTO tb_user SET username='$username',password='$password'") 
or die ("data salah : ".mysqli_error($mysqli));
 
//  untuk mengetahui apakah data berhasil disimpan atau belum
if ($data) {
echo "Berhasil Input Data";
echo "<br><a href='Login.php'>Kembali</a>"; // berfungsi untuk ngelink ke halaman tampil.php
} else {
echo "Gagal Input Data!!!";
echo "<br><a href='register.php'>Kembali</a>"; // berfungsi untuk ngelink ke halaman tampil.php
}
}
?>
</div>

