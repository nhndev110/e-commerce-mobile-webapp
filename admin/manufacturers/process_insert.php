<?php
require "../check_super_admin_login.php";

if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['image'])) {
    echo "Vui lòng nhập đầy đủ các thông tin";
    exit();
}

$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$image = $_POST['image'];

require '../connect.php';
$sql = "insert into manufacturers (name, address, phone, image)
value ('$name', '$address', '$phone', '$image')";
mysqli_query($connect, $sql);

$error = mysqli_error($connect);
if (empty($error)) {
    echo 1;
} else {
    echo $error;
}
mysqli_close($connect);
