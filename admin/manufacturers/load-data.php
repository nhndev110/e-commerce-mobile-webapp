<?php
require "../check-super-admin-login.php";

require_once "../connect.php";
$sql = "SELECT * FROM manufacturers";
$manufacturers = mysqli_query($connect, $sql);

$result = [];
foreach ($manufacturers as $manufacturer) {
  array_push($result, [
    "id" => $manufacturer['id'],
    "name" => $manufacturer['name'],
    "address" => $manufacturer['address'],
    "phone" => $manufacturer['phone'],
  ]);
}

echo json_encode([
  'statusCode' => 200,
  'data' => $result,
  'statusText' => 'ok'
]);