<?php

$name_receiver = $_POST['name_receiver'];
$phone_receiver = $_POST['phone_receiver'];
$address_receiver = $_POST['address_receiver'];

session_start();

$cart = $_SESSION['cart'];
$total_price = 0;
foreach ($cart as $each) {
	$total_price += $each['quantity'] * $each['price'];
}

$customer_id = $_SESSION['id'];
$status = 0;

require "./admin/connect.php";
$sql = "insert into orders(customer_id, name_receiver, phone_receiver, address_receiver, status, total_price)
values('$customer_id', '$name_receiver', '$phone_receiver', '$address_receiver', '$status', '$total_price')";
mysqli_query($connect, $sql);

$sql = "select max(id) from orders where customer_id = '$customer_id'";
$arr_result = mysqli_query($connect, $sql);
$order_id = mysqli_fetch_array($arr_result)['max(id)'];

foreach ($cart as $product_id => $each) {
	$quantity = $each['quantity'];
	$sql = "insert into order_product(order_id, product_id, quantity)
	values('$order_id', '$product_id', '$quantity')";
	mysqli_query($connect, $sql);
}

unset($_SESSION['cart']);
unset($_SESSION['quantity_product_in_cart']);
mysqli_close($connect);
header('location: ./products.php');