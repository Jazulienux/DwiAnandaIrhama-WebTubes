<?php
	include "config.php";
	?>
<html>
<head>
	<title>Print Document</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<table border="1" width="90%" style="border-collapse:collapse;" align="center">
    	<tr class="tableheader">
        	<th rowspan="1">Nama</th>
            <th>Check in</th>
            <th>Check out</th>
            <th>Type Kamar</th>
            
        </tr>
        <?php
        $data = "select * from reservasi"; 
        $result=mysqli_query($mysqli,$data);
        while($hasil = mysqli_fetch_array($result))
        { 
            ?>
        <tr id="rowHover">
        	<td width="10%" align="center"><?php echo $hasil['nama']; ?></td>
            <td width="25%" id="column_padding"><?php echo $hasil['check_in']; ?></td>
            <td width="25%" id="column_padding"><?php echo $hasil['check_out']; ?></td>
            <td width="25%" id="column_padding"><?php echo $hasil['room_type']; ?></td>
                    </tr>
        <?php } ?>
    </table>
    <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</body>
</html>
