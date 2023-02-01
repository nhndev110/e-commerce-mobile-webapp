<?php

require_once "../check-super-admin-login.php";

$_POST = json_decode(file_get_contents('php://input'), true);

try {
	echo json_encode($_POST);
	die();

	if (empty($_POST['id']))
		throw new Error("ID EMPTY", 400);

	$ids = $_POST['id'];

	require_once "../connect.php";
	$sql = "DELETE FROM manufacturers WHERE id IN ( " . implode(', ', $ids) . " )";
	mysqli_query($connect, $sql);

	$error = mysqli_error($connect);
	if (!empty($error))
		throw new Error($error, 500);

	echo json_encode([
		"status" => "success",
		"statusCode" => 200,
		"message" => "Bạn đã xóa thành công !",
	]);
} catch (Error $e) {
	echo json_encode([
		"status" => "error",
		"statusCode" => $e->getCode(),
		"message" => $e->getMessage(),
	]);
}
