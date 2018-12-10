<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM lokasi ORDER BY id DESC");

?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="SIPariwisata.css"/>
</head>

<body>
    <div class="header">
    <h1>Anda Sebagai Admin</h1>
    </div>

    <div class="menu">
<a href="Home.php"></a>
    </div>
    
    <a href="add.php">Tambah List Wisata</a><br/><br/>
    <table width='100%' border=1>
      <tr>
        <th>Judul</th> <th>Deskripsi</th> <th>Alamat</th> <th>Nama</th> <th>Gambar</th> <th>Update</th>
      </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" .$user_data['judul']."</td>";
        echo "<td>" .$user_data['alamat']. "</td>";
        echo "<td><img src='image/".$user_data['foto']."' width='100' height='70'></td>";
        echo "<td>" .$user_data['deskripsi']. "</td>";
        echo "<td>" .$user_data['nama']. "</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td>";
    }
    ?>
    </table>


    </body>
    </html>