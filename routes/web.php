<?php

use app\controllers\DashboardAdminController;
use app\controllers\HomeController;
use app\controllers\ProductController;

$klein->with('/', function () use ($klein) {
  $klein->respond('GET', '/?', [HomeController::class, 'index']);
});

$klein->with('/products', function () use ($klein) {
  $klein->respond('GET', '/?', [ProductController::class, 'index']);
  $klein->respond('GET', '/[*:title]-[i:id]', [ProductController::class, 'show']);
});

$klein->with('/admin', function () use ($klein) {
  $klein->respond('GET', '/?', [DashboardAdminController::class, 'index']);
});
