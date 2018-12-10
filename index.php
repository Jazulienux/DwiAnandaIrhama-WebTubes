<?php
include "config.php";// memanggil file koneksi.php untuk menghubungkan ke database
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
        <link rel="stylesheet" href="SIPariwisata.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script>
    $(document).ready(function(){
      $('.slider').bxSlider({
        mode: 'fade',
        auto:true,
        slidewidth:1000,
        pause:3000,
      });
    });
    
  </script>
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

  <div class="ratakiri">
    <div class="card">
      <h2>Kota Wisata Kota Malang</h2>
      <h5>Desember 2, 2018 8:50</h5>
      <div class="slider">
          <div><img src="2.jpg"width="1500" height="500" alt="gambar1" ></div>
          <div><img src="1.jpg"width="1500" height="500" alt="gambar2"></div>
          <div><img src="3.jpg"width="1500" height="500" alt="gambar2"></div>
          <div><img src="4.jpg"width="1500" height="500" alt="gambar2"></div>

        </div>
      <p>Kota Malang</p>
      <p>   Kota Malang adalah sebuah Kota di Provinsi Jawa Timur , Indonesia. Karena letaknya yang berada di dataran tinggi 
        membuat Kota Malang memiliki cuaca yang nyaman dan cukup sejuk dibanding kota lain di kawasan Jawa Timur. Kota terbesar 
        kedua di Jawa Timur ini memiliki julukan beraneka ragam seperti contohnya Paris van East Java, Kota Wisata, Kota Militer,
        Kota Sejarah, Kota Apel, Kota Dingin, Kota Kuliner dan masih banyak julukan lainnya. Namun julukan yang paling terkenal 
        dan khas dari Kota Malang sendiri adalah Kota Pelajar. Julukan tersebut memang terbukti dengan banyaknya sekolah dan 
        universitas yang berdiri di Kota ini. Selain menjadi Kota dengan tingkat pelajar tertinggi di Jatim, Kota Malang juga 
        memiliki berbagai objek wisata mulai dari wisata bersejarah seperti candi dan museum, wisata religi hingga wisata hiburan 
        yang patut untuk dikunjungi oleh para wisatawan baik domestik maupun Mancanegara.  Karena banyaknya objek wisata yang 
        tersebar di kawasan Malang Raya, jangan heran jika banyak berdiri penginapan mulai dari Hotel, Resort, Cottage hingga 
        persewaan rumah di Kota Malang. Berbagai objek wisata menarik di daerah Malang Raya kebanyakan terletak di kawasan Batu 
        yakni berlokasi disebelah barat Kota</p> 
        <p>   Di Batu sendiri terdapat banyak tempat wisata menarik dan sudah terkenal akan 
        wahananya seperti Jawa Timur Park 1, Jawa Timur Park 2, Batu Night Spectacular, Eco Green Park, Selecta dan lain sebagainya. 
        Bukan hanya objek wisata hiburan, kawasan Batu juga dikelilingi oleh tempat wisata alam yang sungguh mempesona seperti 
        Coban Rondo, Coban Talun, Bendengan dan beberapa lokasi alam yang pantang untuk dilewatkan ketika berkunjung ke daerah 
        Malang. Tidak hanya itu, Kota Malang juga terkenal akan wisata kulinernya yang beragam dan unik. Karena populasi kehidupan 
        di Kota Malang yang semakin tahun semakin meningkat tidak heran jika banyak dari warga malang maupun pengusaha dari luar 
        kota berboyong boyong untuk mendirikan aneka ragam kuliner khas Malang maupun franchisedemi menarik keuntungan yang fantastis. 
        So, jadikan musim libur Anda bersama keluarga semakin meriah dan seru dengan berlibur ke kawasan Kota Malang dan Sekitarnya.</p>
    </div>
  </div>
  <div class="ratakanan">
    <div class="card">
      <h2>About Me</h2>
      <img src = "9.jpg" width="90" height="120" alt="gambar"/>
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
</div>

</body>
</html>
