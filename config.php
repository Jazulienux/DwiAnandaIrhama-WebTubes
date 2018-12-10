<?php

$databaseHost = 'localhost';
$databaseName = 'informasiPariwisata';
$databaseUsername = 'root';
$databasePassword = '';
$password = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if(mysqli_connect_errno()){
    echo'Koneksi gagal dilakukan dengan alasan:'.mysqli_connect_error();
    exit();
    mysqli_close($mysqli);
}


?>