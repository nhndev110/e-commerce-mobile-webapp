<?php

try {
	session_start();

	if (empty($_SESSION['name']) || empty($_SESSION['id'])) {
		throw new Exception('-2');
	}

	if (empty($_POST['id'])) {
		throw new Exception('-1');
	}
	$id = $_POST['id'];

	if (empty($_SESSION['cart'][$id])) {
		require "./admin/connect.php";
		$sql = "select * from products
		where id = '$id'";
		$arr_result = mysqli_query($connect, $sql);
		$result = mysqli_fetch_array($arr_result);
		$_SESSION['cart'][$id]['name'] = $result['name'];
		$_SESSION['cart'][$id]['photo'] = $result['photo'];
		$_SESSION['cart'][$id]['price'] = $result['price'];
		$_SESSION['cart'][$id]['quantity'] = 1;

		if (isset($_SESSION['quantity_product_in_cart'])) {
			$_SESSION['quantity_product_in_cart']++;
		} else {
			$_SESSION['quantity_product_in_cart'] = 1;
		}
	} else {
		$_SESSION['cart'][$id]['quantity']++;
	}

	echo $_SESSION['quantity_product_in_cart'];
} catch (Exception $e) {
	echo $e->getMessage();
}
