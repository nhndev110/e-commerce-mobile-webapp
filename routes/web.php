<?php

require_once BASE_PATH . './app/controllers/HomeController.php';
require_once BASE_PATH . './app/controllers/ProductController.php';
require_once BASE_PATH . './app/controllers/ManufacturerController.php';

use Klein\Klein as Klein;

$klein = new Klein();

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\ManufacturerController;

$klein->with('/', function () use ($klein) {
  $home_controller = new HomeController();
  $klein->respond('GET', '/?', [$home_controller, 'index']);
});

$klein->with('/products', function () use ($klein) {
  $product_controller = new ProductController();
  $klein->respond('GET', '/?', [$product_controller, 'index']);
});

$klein->dispatch();
