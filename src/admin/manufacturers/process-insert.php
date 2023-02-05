<?php

require_once "../check-super-admin-login.php";

$_POST = json_decode(file_get_contents('php://input'), true);

try {
  if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['image']))
    throw new Error("Vui lòng nhập đầy đủ các thông tin", 400);

  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $image = $_POST['image'];

  require_once '../connect.php';
  $sql = "INSERT INTO manufacturers (name, address, phone, image) VALUE ('$name', '$address', '$phone', '$image')";
  mysqli_query($connect, $sql);

  $error = mysqli_error($connect);
  if (!empty($error))
    throw new Error($error, 500);

  echo json_encode([
    "status" => "success",
    "statusCode" => 200,
    "message" => "Bạn đã thêm thành công !",
    "data" => [
      "id" => mysqli_insert_id($connect),
      "name" => $name,
      "address" => $address,
      "phone" => $phone,
      "image" => $image,
    ],
  ]);
} catch (Error $e) {
  echo json_encode([
    "status" => "error",
    "statusCode" => $e->getCode(),
    "message" => $e->getMessage(),
    "data" => NULL,
  ]);
}
