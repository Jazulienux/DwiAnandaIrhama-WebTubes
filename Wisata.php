<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
        <link rel="stylesheet" href="SIPariwisata.css"/>
</head>
<body>

<div class="header">
  <h1>WISATA KOTA MALANG</h1>
</div>

<div class="menu">
  <a href="index.php">Home</a>
  <a href="Wisata.php">Wisata Kota Malang</a>
  <a href="Kuliner.php">Kuliner</a>
  <a href="Login.php">Booking Hotel</a>
</div>

<?php
include "config.php";
?>


<div class="ratakiri">
<div class="card">
<form action="cari.php" method="post">
   	 <input type="text" name="input_cari" placeholder="Cari Berdasar Nama" class="css-input" style="width:250px;" />
   	 <input type="submit" name="cari" value="Cari" class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
  	</form>
<?php 
$data = mysqli_query($mysqli,"SELECT * FROM lokasi"); 

//perintah untuk menampilkan semua data yang ada di tabel jual menggunakan perulangan
    while($show = mysqli_fetch_array($data)){
        echo "<tr>";
        echo "<p>" .$show['judul']."</p>";
        echo "<p>" .$show['alamat']. "</p>";
        echo "<p><img src='image/".$show['foto']."' width='500' height='300'></td>";
        echo "<p>" .$show['deskripsi']. "</p>";
        echo "<p>" .$show['nama']. "</p>";
    }
    ?>
</div>
</div>

 <div class="ratakanan">
    <div class="card">
      <h2>About Me</h2>
      <img src = "55.jpg" width="90" height="120" alt="gambar"/>
      <p>Nama    : Dwi Ananda Irhama</p>
      <p>NIM     : 1741720109</p>
      <p>Kelas   : TI-2D</p>
      <p>*** WELCOME TO MY WEBSITE ***</p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <img src = "5.jpg" width="250" height="130" alt="gambar"/>
      <img src = "6.jpg" width="250" height="150" alt="gambar"/>
      <img src = "7.jpg" width="250" height="130" alt="gambar"/>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>IG    : dwiirhama</p>
      <p>FB    : dwi ananda irhama</p>
      <p>email : dwianandairhama@gmail.com</p>
    </div>
  </div>

</body>
</html>
