<?php

namespace app\models;

use app\core\BaseModel;
use app\models\ProductEntity;

class ProductModel extends BaseModel
{
  protected string $table = "products";

  public function __construct()
  {
    parent::__construct($this->table);
  }

  public function getAllProducts()
  {
    $products_list = parent::getAllData();

    $data = [];

    if (!empty($products_list)) {
      foreach ($products_list as $product) {
        $data[] = new ProductEntity(
          $product['id'],
          $product['name'],
          $product['image'],
          $product['price'],
          $product['description'],
          $product['manufacturer_id']
        );
      }
    }

    return $data;
  }

  public function getProduct(int $id)
  {
    $product = parent::getData($id);

    $data = new ProductEntity(
      $product['id'],
      $product['name'],
      $product['image'],
      $product['price'],
      $product['description'],
      $product['manufacturer_id']
    );

    return $data;
  }
}
