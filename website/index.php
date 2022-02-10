<?php 
include('db.php');
$query = "SELECT * FROM users";
$res = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp</title>
</head>
<body>
	<table>
    <tr>
    	<th>ID</th>
    	<th>Nama</th>
    	<th>Alamat</th>
    	<th>Jabatan</th>
    </tr>


    <?php
    while ($rows = $res->fetch_assoc()) {
    	$id = $rows['ID'];
    	$nama = $rows['nama'];
    	$alamat = $rows['alamat'];
    	$jabatan = $rows['jabatan'];
    ?>
    <tr>
    	<td><?= $id; ?></td>
    	<td><?= $nama; ?></td>
    	<td><?= $alamat; ?></td>
    	<td><?= $jabatan; ?></td>
    </tr>
    <?php

	}
	?>
</table>
</body>
</html>
