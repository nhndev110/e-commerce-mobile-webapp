<?php
require "../check_admin_login.php";

if (empty($_POST['name']) || empty($_FILES['photo']) || empty($_POST['price']) || empty($_POST['description']) || empty($_POST['manufacturer_id'])) {
    echo "Vui lòng điền đầy đủ thông tin";
    exit();
}

$name = $_POST['name'];
$photo = $_FILES['photo'];
$price = $_POST['price'];
$description = $_POST['description'];
$manufacturer_id = $_POST['manufacturer_id'];

$folder = 'photos/';
$file_extension = explode('.', $photo['name'])[1];
$file_name = time() . '.' . $file_extension;
$part_file = $folder . $file_name;

move_uploaded_file($photo['tmp_name'], $part_file);

require "../connect.php";
$sql = "insert into products (name, photo, price, description, manufacturer_id)
value('$name', '$file_name', '$price', '$description', '$manufacturer_id')";
mysqli_query($connect, $sql);

$error = mysqli_error($connect);
if (empty($error)) {
    echo 1;
} else {
    echo $error;
}
mysqli_close($connect);
