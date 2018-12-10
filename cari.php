<html>
    <head>
        <title>TampilUser</title>
        <link rel="stylesheet" href="SIPariwisata.css"/>
</head>
<body>
<div class="header">
    <h1>WISATA KOTA MALANG</h1>
    </div>

    <div class="menu">
     <a href="Home.php">Home</a>
     <a href="Wisata.php">Wisata Kota Malang</a>
     <a href="Kuliner.php">Kuliner</a>
     <a href="Penginapan.php">Penginapan</a>
    </div>
<thead>

</thead>
<tbody>

<div class="ratakiri">
<div class="card">
<?php

	include "config.php";
	
	$cari= $_POST['input_cari'];
	$q = "SELECT * FROM lokasi WHERE judul like '%$cari%' ";
	$result = mysqli_query($mysqli, $q);
		echo "<center>";
        echo "<h2> Hasil Searching </h2>";
        echo "</center>";
		
			while ($data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<p>" .$data['judul']."</p>";
                echo "<p>" .$data['alamat']. "</p>";
                echo "<p><img src='image/".$data['foto']."' width='500' height='300'></td>";
                echo "<p>" .$data['deskripsi']. "</p>";
                echo "<p>" .$data['nama']. "</p>";
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