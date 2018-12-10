<html>
<head>
<title>Halaman Reservasi</title>
<link rel="stylesheet" href="SIPariwisata.css"/>
</head>
<body>
    <div class="box-form">
<?php
 include "config.php";
 if(isset($_POST['reserve'])){
     $reserve = mysqli_query($mysqli, "INSERT INTO reservasi VALUES
     (NULL,
     '".$_POST['nama']."',
     '".$_POST['check_in']."',
     '".$_POST['check_out']."',
     '".$_POST['room_type']."',
     '')");
 }
?>
<div class="header">
    <h1>WISATA KOTA MALANG</h1>
    </div>

    <div class="menu">
    <a href="Logout.php">Logout</a>
    <a href="Print.php">Print</a>

    </div>

     <div class="ratakiri">
    <div class="card">

    <h2>Silahkan isi from dibawah untuk reservasi</h2>
    <form action="" method="post">
    Nama Lengkap<br>
    <input type="text" name="nama" values="" /><br>
    Check In:<br>
    <input type="date" name="check_in" ><br><br>
    Check Out:<br>
    <input type="date" name="check_out" ><br><br>

<br>
    Type Kamar<br>
    <input type="radio" name="room_type" values="Superior Room" />Superior Room<br> 
    <input type="radio" name="room_type" values="Deluxe Room" />Deluxe Room<br>
    <input type="radio" name="room_type" values="Junior Suite" />Junior Suite<br>
    <input type="radio" name="room_type" values="Executive Suite" />Executive Suite<br>
    <input type="radio" name="room_type" values="Presidential Suite" />Presidential Suite<br>
<br>
    <td colspan="2" align="center">
    <input name="reserve" type="submit" value="Confirm Reservation"/>
    <input name="reset" type="reset" value="Reset"/>

</form>
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
      <h3>Room Type</h3>
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