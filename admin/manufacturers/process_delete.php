<?php
require "../check-super-admin-login.php";


try {
	if (empty($_POST['id'])) {
		throw new Exception("ID EMPTY");
	}
	// if (gettype($_POST['id']) === "array")
	// 	$ids = $_POST['id'];
	// elseif (gettype($_POST['id']) === "string")
	// 	$ids = array($_POST['id']);

	// require "../connect.php";
	// $sql = "DELETE FROM manufacturers
	// 	WHERE id IN (" . implode(",", $ids) . ")";
	// mysqli_query($connect, $sql);

	echo json_encode([
		"status" => 200,
		"statusTest" => "Success"
	]);
} catch (Exception $e) {
	echo "Message: {$e->getMessage()}";
	// echo json_encode([
	// 	"message" => $e->getMessage(),
	// 	"status" => $e->getCode(),
	// ]);
}
// mysqli_close($connect);

// $error = mysqli_error($connect);
// if (empty($error)) {
// 	echo 1;
// } else {
// 	echo $error;
// }