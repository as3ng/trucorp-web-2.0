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
    <?php
    $counter = 0
    while ($rows = $res->fetch_assoc()) {
    	
        $counter = $counter + 1;
    }
    ?>
<br>
<h1>Total user yang terdaftar ada <?= $counter; ?> user.</h1>
</body>
</html>
