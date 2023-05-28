<?php

namespace App\Controllers;

require_once './config/database.php';
require_once './app/models/ProductModel.php';
require_once './app/models/ProductEntity.php';

use App\Config\Database;
use App\Models\ProductModel;
use App\Models\ProductEntity;

use mysqli_sql_exception;

class ProductController extends BaseController
{
	public function index($ser)
	{
		try {
			// $connect = new Database();
			// $connect->DBConnect();

			// $sql_select_products = "SELECT * FROM products";
			// $products            = $connect->executeQuery($sql_select_products);
			
			// $sql_select_manufacturers = "SELECT * FROM manufacturers";
			// $manufacturers            = $connect->executeQuery($sql_select_manufacturers);
			
			// $connect->close();

			echo json_encode((new ProductModel)->all());
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
		} catch (mysqli_sql_exception $e) {
			error_log($e->__toString());
		}
	}
}
