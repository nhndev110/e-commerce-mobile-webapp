<?php
require "../check-super-admin-login.php";

$id = $_POST['id'];
echo json_encode($id);
die();

require "../connect.php";
// foreach ($variable as $key => $value) {
//     # code...
// }
$sql = "delete from manufacturers
where id = '$id'";
mysqli_query($connect, $sql);

$error = mysqli_error($connect);
if (empty($error)) {
    echo 1;
} else {
    echo $error;
}