<?php

namespace App\Models;

require_once './config/database.php';
require_once './app/models/ProductEntity.php';

use App\Config\Database;
use App\Models\ProductEntity;

class ProductModel
{
  public function all()
  {
    $connect = new Database();
		$connect->DBConnect();
		$sql_select_products = "SELECT * FROM products";
		$product_list        = $connect->executeQuery($sql_select_products);

    $data = [];
    
    foreach ($product_list as $product) {
      $data[] = new ProductEntity($product['id'], $product['name'], $product['photo'], $product['price'], $product['description'], $product['manufacturer_id']);
    }

    return $data;

    $connect->close();
  }
}