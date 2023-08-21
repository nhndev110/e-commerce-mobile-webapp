<?php

namespace app\services;

use app\models\ProductModel;

class ProductService
{
  public static function getProductsData(): array
  {
    $list_products = (new ProductModel())->getAllProducts();

    if (!empty($list_products)) {
      foreach ($list_products as $product) {
        $data[] = [
          'id'              => $product->getId(),
          'name'            => $product->getName(),
          'image'           => $product->getImage(),
          'price'           => $product->getPrice(),
          'description'     => $product->getDescription(),
          'manufacturer_id' => $product->getManufacturerId(),
        ];
      }
    }

    return $data;
  }

  public static function getProductData(int $id)
  {
    $product = (new ProductModel())->getProduct($id);

    $data = [
      'id'              => $product->getId(),
      'name'            => $product->getName(),
      'image'           => $product->getImage(),
      'price'           => $product->getPrice(),
      'description'     => $product->getDescription(),
      'manufacturer_id' => $product->getManufacturerId(),
    ];

    return $data;
  }
}
