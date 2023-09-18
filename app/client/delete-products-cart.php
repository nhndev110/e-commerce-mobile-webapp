<?php

try {
	session_start();
	if (empty($_POST['id'])) {
		throw new Exception("-1");
	}
	$id = $_POST['id'];

	unset($_SESSION['cart'][$id]);
	if ($_SESSION['quantity_product_in_cart'] > 0) {
		$_SESSION['quantity_product_in_cart']--;
	}

	echo $_SESSION['quantity_product_in_cart'];
} catch (Exception $e) {
	$e->getMessage();
}
