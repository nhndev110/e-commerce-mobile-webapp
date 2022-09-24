<?php

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

require "./connect.php";
$sql = "select * from admin
where email = '$email' and password = '$password'";
$arr_result = mysqli_query($connect, $sql);

if (mysqli_num_rows($arr_result) === 1) {
	$result = mysqli_fetch_array($arr_result);
	$_SESSION['id'] = $result['id'];
	$_SESSION['name'] = $result['name'];
	$_SESSION['level'] = $result['level'];

	header('location: ./root/index.php');
	exit();
}

mysqli_close($connect);
$_SESSION['error'] = 'Đăng Nhập Không Hợp Lệ !!!';
header('location: ./index.php');