<?php

$id = $_POST['id'];
$status = $_POST['status'];

require "../connect.php";
$sql = "update orders
set
status = '$status'
where
id = '$id'";
mysqli_query($connect, $sql);

$error = mysqli_error($connect);
if (empty($error))
    echo $status;
else
    echo $error;

mysqli_close($connect);
