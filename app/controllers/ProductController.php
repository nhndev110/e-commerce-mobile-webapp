<?php

namespace App\Controllers;

require_once './app/models/ProductModel.php';

use App\Models\ProductModel;

class ProductController extends BaseController
{
	public function index(): void
	{
		// $connect = new Database();
		// $connect->DBConnect();

		// $sql_select_products = "SELECT * FROM products";
		// $products            = $connect->executeQuery($sql_select_products);

		// $sql_select_manufacturers = "SELECT * FROM manufacturers";
		// $manufacturers            = $connect->executeQuery($sql_select_manufacturers);

		// $connect->close();

		$result = (new ProductModel)->all();
		$data = [];
		foreach ($result as $product) {
			$data[] = [
				'name' => $product->getName(),
				'photo' => $product->getPhoto(),
				'price' => $product->getPrice(),
				'description' => $product->getDescription(),
				'manufacturer_id' => $product->getManufacturerId(),
			];
		}

		echo json_encode($data);
		die();

		// $ser->render('./app/views/client/index.phtml', [
		// 	'title'     => 'nhndev110 - Tất cả sản phẩm',
		// 	'style_css' => './public/client/css/products.css',
		// 	'data'      => [
		// 		'product_list'      => $products,
		// 		'manufacturer_list' => $manufacturers,
		// 	],
		// 	'main_content' => './app/views/client/products.phtml',
		// ]);
	}
}
