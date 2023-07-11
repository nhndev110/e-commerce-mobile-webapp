<?php

use app\controllers\HomeController;
use app\controllers\ProductController;

$klein->with('/', function () use ($klein) {
  $klein->respond('GET', '/?', [HomeController::class, 'index']);
});

$klein->with('/products', function () use ($klein) {
  $klein->respond('GET', '/?', [ProductController::class, 'index']);
  $klein->respond('GET', '/[*:title]-[i:id]', [ProductController::class, 'show']);
});
