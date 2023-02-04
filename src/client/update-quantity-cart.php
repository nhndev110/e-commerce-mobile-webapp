<?php

try {
	session_start();
	if (empty($_POST['id']) || empty($_POST['type'])) {
		throw new Exception("-1");
	}

	$id = $_POST['id'];
	$type = $_POST['type'];

	if ($type === 'decre') {
		if ($_SESSION['cart'][$id]['quantity'] <= 1) {
			$_SESSION['quantity_product_in_cart']--;
			unset($_SESSION['cart'][$id]);
		} else {
			$_SESSION['cart'][$id]['quantity']--;
		}
	} elseif ($type === 'incre') {
		$_SESSION['cart'][$id]['quantity']++;
	}

	if (isset($_SESSION['cart'][$id])) {
		echo $_SESSION['cart'][$id]['quantity'];
	} else {
		echo -2;
	}
} catch (Exception $e) {
	$e->getMessage();
}
