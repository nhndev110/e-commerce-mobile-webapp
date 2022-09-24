<?php
require "../check_super_admin_login.php";

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$image = $_POST['image'];

require '../connect.php';
$sql = "update manufacturers
set
id = '$id',
name = '$name',
address = '$address',
phone = '$phone',
image = '$image'
where
id = $id";
mysqli_query($connect, $sql);

$error = mysqli_error($connect);
if (empty($error))
    echo 1;
else
    echo $error;
