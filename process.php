<?php

$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$data = $_POST['data'];
$total = $_POST['total'];
$paymentMethod = $_POST['paymentMethod'];

include 'koneksi.php';

$sql = "INSERT INTO `orders` (`name`, `data`, `total`, `paymentMethod`,`email`,`address`) VALUES ('$name', '$data', '$total', '$paymentMethod','$email','$address')";
mysqli_query($koneksi, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        localStorage.removeItem('carts');
        // direct index.php
        window.location.href = 'index.php';
    </script>
</body>

</html>
