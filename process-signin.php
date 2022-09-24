<?php
session_start();

$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);
if (isset($_POST['remember'])) {
    $remember = true;
} else {
    $remember = false;
}

require "./admin/connect.php";
$sql = "select * from customers
where email = '$email' and password = '$password'";
$arr_result = mysqli_query($connect, $sql);
$num_row = mysqli_num_rows($arr_result);

function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if ($num_row === 1) {
    $result = mysqli_fetch_array($arr_result);
    $id = $result['id'];
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $result['name'];
    if ($remember) {
        $token = uniqid('' . time() . uniqid('' . generateRandomString()));
        require "./admin/connect.php";
        $sql = "update customers
        set
        token = '$token'
        where
        id = '$id'";
        mysqli_query($connect, $sql);
        setcookie("remember", $token, time() + 60 * 60 * 24 * 30);
    }

    echo $_SESSION['name'];
    exit();
}

echo -1;
mysqli_close($connect);
