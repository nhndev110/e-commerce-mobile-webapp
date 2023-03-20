<?php
	//	require_once './config/database.php';
	//	$connect  = new App\Database\Database();
	//	$products = $connect->select("products");

	require_once __DIR__ . '/vendor/autoload.php';

	$klein = new \Klein\Klein();

	$klein->respond('GET', '/', function ($request, $response, $service) {
		$service->render('./src/client/index.php');
	});

	$klein->dispatch();


//	if (isset($_GET['page'])) {
//		$page = $_GET['page'];
//	}
//	else {
//		$page = 'home';
//	}
//
//	if ($page == 'home') {
//	    <link rel="stylesheet" href="./assets/css/home.css">
//	    <title>nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng</title>
//	} elseif ($page == 'products') {
//		<link rel="stylesheet" href="./assets/css/products.css">
//		<title>nhndev110 - Tất cả sản phẩm</title>
//	} elseif ($page == 'cart') {
//		<link rel="stylesheet" href="./assets/css/cart.css">
//		<script src="./assets/js/cart.js" defer></script>
//		<title>nhndev110 - Giỏ Hàng</title>
//	} elseif ($page == 'user') {
//		<link rel="stylesheet" href="./assets/css/user.css">
//		<title>nhndev110 - $_SESSION["name"] </title>
//	} elseif ($page == 'product-detail') {
//	    <link rel="stylesheet" href="./assets/css/product-detail.css">
//	    <title>Điện Thoại $product['name']</title>
//	    <script src="./assets/js/view-product.js" defer></script>
//	} else {
//		header('location: ./404.html');
//	}