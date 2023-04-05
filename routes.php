<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once './app/controllers/BaseController.php';
require_once './app/controllers/HomeController.php';
require_once './app/controllers/ProductController.php';
require_once './app/controllers/ManufacturerController.php';

$klein = new \Klein\Klein();

use App\Controllers\BaseController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\ManufacturerController;

$klein->respond('GET', '/', function ($req, $res, $service) {
  $service->render('./app/views/client/index.php', [
      'title' => 'nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng'
  ]);
});

$klein->respond('GET', '/products', function ($req, $res, $service) {
  $product_list = (new ProductController)->all();
  $manufacturer_list = (new ManufacturerController)->all();

  $service->render('./app/views/client/products.php', [
      'title' => 'nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng',
      'product_list' => $product_list,
      'manufacturer_list' => $manufacturer_list,
  ]);
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
//		<script app="./assets/js/cart.js" defer></script>
//		<title>nhndev110 - Giỏ Hàng</title>
//	} elseif ($page == 'user') {
//		<link rel="stylesheet" href="./assets/css/user.css">
//		<title>nhndev110 - $_SESSION["name"] </title>
//	} elseif ($page == 'product-detail') {
//	    <link rel="stylesheet" href="./assets/css/product-detail.css">
//	    <title>Điện Thoại $product['name']</title>
//	    <script app="./assets/js/view-product.js" defer></script>
//	} else {
//		header('location: ./404.html');
//	}