<?php

require "../check_admin_login.php";

$id = $_POST['id'];
$name = $_POST['name'];

if (!empty($_FILES['photo_new'])) {
    $photo_new = $_FILES['photo_new'];
}

if (isset($photo_new) && $photo_new['size'] > 0) {
    $folder = 'photos/';
    $file_extension = explode('.', $photo_new['name'])[1];
    $file_name = time() . '.' . $file_extension;
    $part_file = $folder . $file_name;
    move_uploaded_file($photo_new['tmp_name'], $part_file);
} else {
    $file_name = $_POST['photo_old'];
}

$price = $_POST['price'];
$description = $_POST['description'];
$manufacturer_id = $_POST['manufacturer_id'];

require "../connect.php";
$sql = "update products
set
name = '$name',
photo = '$file_name',
price = '$price',
description = '$description',
manufacturer_id = '$manufacturer_id'
where
id = '$id'";
mysqli_query($connect, $sql);

$error = mysqli_error($connect);
if (empty($error)) {
    echo 1;
} else {
    echo $error;
}
