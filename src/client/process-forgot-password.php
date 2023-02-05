<?php

$email = $_POST['email'];

require './admin/connect.php';
$sql = "select id, name from customers
where email = '$email'";
$arr_result = mysqli_query($connect, $sql);

function generateRandomString($length = 20)
{
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

if (mysqli_num_rows($arr_result) === 1) {
	$result = mysqli_fetch_array($arr_result);
	$id = $result['id'];
	$name = $result['name'];

	$sql = "delete from forgot_password
	where customer_id = '$id'";
	mysqli_query($connect, $sql);

	$token = uniqid('' . time() . uniqid('' . generateRandomString(), true), true);
	$sql = "insert into forgot_password(customer_id, token)
    values('$id', '$token')";
	mysqli_query($connect, $sql);

	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/../change-new-password.php?token=$token";
	require './mail.php';
	$title = "XÁC NHẬN QUÊN MẬT KHẨU";
	$content = "<h2>Vui lòng click vào link bên dưới để đặt lại mật khẩu</h2>
	<a href='$actual_link'>Click vào đây</a>";
	sendMail($email, $name, $title, $content);
}

header('location: ./index.php');
mysqli_close($connect);
