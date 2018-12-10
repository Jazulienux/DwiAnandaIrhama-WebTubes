<?php

include_once("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $judul=$_POST['judul'];
    $alamat=$_POST['alamat'];
    $deskripsi=$_POST['deskripsi'];
    $nama=$_POST['nama'];
    $foto=$_POST['foto'];
    
    $result = mysqli_query($mysqli, "UPDATE lokasi SET judul='$judul',alamat='$alamat',deskripsi='$deskripsi',nama='$nama',foto='$foto' WHERE id=$id");

    header("Location: index.php");

}

$id = $_GET['id'];

$result = mysqli_query($mysqli,"SELECT*FROM lokasi WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $judul = $user_data['judul'];
    $alamat = $user_data['alamat'];
    $deskripsi = $user_data['deskripsi'];
    $nama = $user_data['nama'];
    $foto = $user_data['foto'];
}
?>
<html>
<head>
    <title> Edit Uset Data</title>
    <link rel="stylesheet" href="SIPariwisata.css"/>
</head>

<body>
    

    <div class="header">
    <h1>WISATA KOTA MALANG</h1>
    </div>

    <div class="menu">
    <a>*** Jika anda ingin mengedit data, silahkan isi kolom dibawah dengan sesuai ***</a>
    </div>

    <div class="ratakiri">
    <div class="card">
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" value=<?php echo $judul;?>></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
        </tr>

        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="deskripsi" value=<?php echo $deskripsi; ?>></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
        </tr>

        <tr>
            <td>Foto</td>
            <td><input type="checkbox" name="ubah_foto" value="true"> Ceklist jika ingin mengubah foto<br>
                <input type="file" name="foto">
            </td>
        </tr>


        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
        
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
    </form>
</div>
</div>

    <div class="ratakanan">
    <div class="card">
      <h2>About Me</h2>
      <img src = "3.jpg" width="90" height="120" alt="gambar"/>
      <p>Nama    : Dwi Ananda Irhama</p>
      <p>NIM     : 174172019</p>
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
</body>
</html>