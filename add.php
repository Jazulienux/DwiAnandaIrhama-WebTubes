<html>
<head>
    <title>Add User</title>
    <link rel="stylesheet" href="SIPariwisata.css"/>
</head>

<body>

    <div class="header">
    <h1>WISATA KOTA MALANG</h1>
    </div>

    <div class="menu">
    <a>*** Isi dengan sesuai kolom dibawah untuk menambahkan list wisata ***</a>
</div>

    <div class="ratakiri">
    <div class="card">
    <a href="admin.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%"  border="0">
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>

        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="deskripsi"></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</div>
</div>
</form>

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
      <img src = "5.png" width="250" height="130" alt="gambar"/>
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

<?php
if(isset($_POST['Submit'])){
    $judul = $_POST['judul'];
    $alamat = $_POST['alamat'];
    $deskripsi = $_POST['deskripsi'];
    $nama = $_POST['nama'];
    $foto = $_POST['foto'];
   


    include_once("config.php");

    $result = mysqli_query($mysqli, "INSERT INTO lokasi(judul,alamat,deskripsi,nama,foto) VALUES('$judul','$alamat','$deskripsi','$nama','$foto') ");

    echo "User added successfullu. <a href='index.php'>View User</a>";
}
?>
</body>
</html>
