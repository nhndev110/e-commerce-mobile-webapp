<?php
require "../check-super-admin-login.php";

if (gettype($_POST['id']) === "array")
	$ids = $_POST['id'];
elseif (gettype($_POST['id']) === "string")
	$ids = array($_POST['id']);

require "../connect.php";
$sql = "DELETE FROM manufacturers
	WHERE id IN (" . implode(",", $ids) . ")";
mysqli_query($connect, $sql);

$error = mysqli_error($connect);
if (empty($error)) {
	echo 1;
} else {
	echo $error;
}