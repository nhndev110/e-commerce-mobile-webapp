<?php
require_once "../check-super-admin-login.php";

require_once "../connect.php";

$sql = "SELECT * FROM manufacturers";
$manufacturers = mysqli_query($connect, $sql);

$result = [];
foreach ($manufacturers as $manufacturer) {
  $result[] = [
    "id" => $manufacturer['id'],
    "name" => $manufacturer['name'],
    "address" => $manufacturer['address'],
    "phone" => $manufacturer['phone'],
  ];
}

echo json_encode([
  'status' => 'success',
  "statusCode" => 200,
  'data' => $result,
]);
