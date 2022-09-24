<?php
require "../check_admin_login.php";

$id = $_POST['id'];

require "../connect.php";
$sql = "delete from products
where id = '$id'";
mysqli_query($connect, $sql);

$error = mysqli_error($connect);
if (empty($error)) {
    echo 1;
} else {
    echo $error;
}
