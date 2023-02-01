<?php

require_once "../check-super-admin-login.php";

try {
	if (empty($_POST['id']))
		throw new Exception("ID EMPTY", 400);

	$ids = $_POST['id'];

	require_once "../connect.php";
	$sql = "DELETE FROM manufacturers WHERE id IN ( {$ids} )";
	mysqli_query($connect, $sql);

	$error = mysqli_error($connect);
	if (!empty($error))
		throw new Exception($error, 500);

	echo json_encode([
		"status" => "success",
		"statusCode" => 200,
		"message" => "Bạn đã xóa thành công !",
	]);
} catch (Exception $e) {
	echo json_encode([
		"status" => "error",
		"statusCode" => $e->getCode(),
		"message" => $e->getMessage(),
	]);
}
