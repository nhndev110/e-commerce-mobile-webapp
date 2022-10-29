<?php
require "../check-super-admin-login.php";

try {
	if (empty($_POST['id']))
		throw new Exception("ID EMPTY", 400);

	if (gettype($_POST['id']) === "array")
		$ids = $_POST['id'];
	elseif (gettype($_POST['id']) === "string")
		$ids = array($_POST['id']);

	require "../connect.php";
	$sql = "DELETE FROM manufacturers
		WHERE id IN (" . implode(",", $ids) . ")";
	mysqli_query($connect, $sql);

	$error = mysqli_error($connect);
	if (!empty($error))
		throw new Exception($error, 500);


	echo json_encode([
		"statusCode" => 200,
		"message" => "Bạn đã xóa " . count($ids),
	]);
} catch (Exception $e) {
	echo json_encode([
		"statusCode" => $e->getCode(),
		"message" => $e->getMessage(),
	]);
}