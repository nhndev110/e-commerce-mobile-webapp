<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];

require "./admin/connect.php";
$sql = "select count(*) from customers
where email = '$email'";
$arr_result = mysqli_query($connect, $sql);
$num_row = mysqli_fetch_array($arr_result)['count(*)'];

if ($num_row > 0) {
    echo -1;
    exit();
}

$sql = "insert into customers (name, email, password, phone_number, address)
value('$name', '$email', '$password', '$phone_number', '$address')";
mysqli_query($connect, $sql);

$sql = "select id from customers
where email = '$email'";
$arr_result = mysqli_query($connect, $sql);
$id = mysqli_fetch_array($arr_result)['id'];

session_start();
$_SESSION['name'] = $name;
$_SESSION['id'] = $id;

require './mail.php';
$title = "BẠN ĐÃ ĐĂNG KÝ THÀNH CÔNG";
$content = "<h2>Xin chào bạn <span style='color: green;'>${name}</span> !!!</h2>
<p>Bạn đã đăng ký thành công shop của chúng tôi !!!</p>
<p>Chúc bạn có những trải nghiệm tốt nhất do sản phẩm của chúng tôi mang lại</p>";
sendMail($email, $name, $title, $content);

echo 1;
mysqli_close($connect);
