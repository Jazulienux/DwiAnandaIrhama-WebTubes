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
     ('".$_POST['nama']."',
     '".$_POST['check_in']."',
     '".$_POST['check_out']."',
     '".$_POST['room_type']."',
     '')");
 }
?>
    <h2>Silahkan isi from dibawah dengan kategori kamar diatas</h2>
    <form action="" method="post">
    Nama Lengkap<br>
    <input type="text" name="nama" values="" /><br>
    Enter a date before 1980-01-01:<br>
    <input type="date" name="check_in" max="1979-12-31"><br><br>
    Enter a date after 2000-01-01:<br>
    <input type="date" name="check_out" min="2000-01-02"><br><br>

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
</body>
</html> 


<html>
<head>
<title>Halaman Reservasi</title>
<link rel="stylesheet" href="SIPariwisata.css"/>
</head>
<body>
    <div class="box-form">
    <?php
if(isset($_POST['reserve'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $check_in = $_POST['ci_year'].'-'.$_POST['ci_month'].'-'.$_POST['ci_date'];
    $check_out = $_POST['co_year'].'-'.$_POST['co_month'].'-'.$_POST['co_date'];
    $check_in = $_POST['ci_date'].'-'.$_POST['ci_month'].'-'.$_POST['ci_year'];
    $check_out = $_POST['co_date'].'-'.$_POST['co_month'].'-'.$_POST['co_year'];
    $room_type = $_POST['room_type'];
   


    include_once("config.php");

    $result = mysqli_query($mysqli, "INSERT INTO reservasi(id,nama,check_in,check_out,room_type) VALUES('$id','$nama','$check_in','$check_out','$room_type') ");


}
?>
    <h2>Silahkan isi from dibawah dengan kategori kamar diatas</h2>
    <form action="" method="post">
         
    <input type="hidden" name="id" values="" /><br>
    Nama Lengkap<br>
    <input type="text" name="nama" values="" /><br>

Check In</br>
<td>
<select name="ci_year">
<option value="2018">2018</option>
<option value="2019">2019</option>
</select>
<select name="ci_month">

<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select name="ci_date">
<option value ="1">1</option>
<option value ="2">2</option>
<option value ="3">3</option>
<option value ="4">4</option>
<option value ="5">5</option>
<option value ="6">6</option>
<option value ="7">7</option>
<option value ="8">8</option>
<option value ="9">9</option>
<option value ="10">10</option>
<option value ="11">11</option>
<option value ="12">12</option>
<option value ="13">13</option>
<option value ="14">14</option>
<option value ="15">15</option>
<option value ="16">16</option>
<option value ="17">17</option>
<option value ="18">18</option>
<option value ="19">19</option>
<option value ="20">20</option>
<option value ="21">21</option>
<option value ="22">22</option>
<option value ="23">23</option>
<option value ="24">24</option>
<option value ="25">25</option>
<option value ="26">26</option>
<option value ="27">27</option>
<option value ="28">28</option>
<option value ="29">29</option>
<option value ="30">30</option>
<option value ="31">31</option>
</select></td>
</br>
<br>
Check Out</br>
<td>
<select name="co_year">
<option value="2018">2018</option>
<option value="2019">2019</option>
</select>
<select name="co_month">

<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">August</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
<select name="co_date">
<option value ="1">1</option>
<option value ="2">2</option>
<option value ="3">3</option>
<option value ="4">4</option>
<option value ="5">5</option>
<option value ="6">6</option>
<option value ="7">7</option>
<option value ="8">8</option>
<option value ="9">9</option>
<option value ="10">10</option>
<option value ="11">11</option>
<option value ="12">12</option>
<option value ="13">13</option>
<option value ="14">14</option>
<option value ="15">15</option>
<option value ="16">16</option>
<option value ="17">17</option>
<option value ="18">18</option>
<option value ="19">19</option>
<option value ="20">20</option>
<option value ="21">21</option>
<option value ="22">22</option>
<option value ="23">23</option>
<option value ="24">24</option>
<option value ="25">25</option>
<option value ="26">26</option>
<option value ="27">27</option>
<option value ="28">28</option>
<option value ="29">29</option>
<option value ="30">30</option>
<option value ="31">31</option>
</select>
</td>
</br>
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
</body>
</html>  

 

