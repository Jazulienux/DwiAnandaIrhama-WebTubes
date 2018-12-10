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

    $result = mysqli_query($mysqli, "INSERT INTO reservasi(id,nama,check_in,check_out,room_type) VALUES('$id','$nama','$check_in','$chck_out','$room_type') ");


}
?>