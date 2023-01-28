<?php

require_once "../check-super-admin-login.php";

/**
 * - Khi truyền dữ liệu dạng json bằng fetch thì chuyển
 * Content-Type: application/x-www-form-urlencoded và phần
 * body khởi tạo một đối tượng URLSearchParams:
 * body: new URLSearchParams(data)
 * 
 * - Ngoài ra có thể dùng:
 * $_POST = json_decode(file_get_contents('php://input'), true);
 * với mọi phương thức đều dùng được
 * 
 */

// ------------- Cấu hình của 1 api -------------
// header('Access-Control-Allow-Origin: *');
// header('Content-Type: application/json');
// header('Access-Control-Allow-Methods: POST');
// header("Access-Control-Allow-Credentials: true");
// header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,
//                                         Access-Control-Allow-Credentials,
//                                         Content-Type,
//                                         Access-Control-Allow-Methods,
//                                         Authorization,
//                                         X-Requested-With');

try {
  if (empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['image']))
    throw new Exception("Vui lòng nhập đầy đủ các thông tin", 400);

  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $image = $_POST['image'];

  require_once '../connect.php';
  $sql = "insert into manufacturers (name, address, phone, image)
    value ('$name', '$address', '$phone', '$image')";
  mysqli_query($connect, $sql);

  $error = mysqli_error($connect);
  if (!empty($error))
    throw new Exception($error, 500);

  echo json_encode([
    "statusCode" => 200,
    "message" => "Bạn đã thêm 1",
    "idInsert" => mysqli_insert_id($connect)
  ]);
} catch (Exception $e) {
  echo json_encode([
    "statusCode" => $e->getCode(),
    "message" => $e->getMessage(),
  ]);
}
