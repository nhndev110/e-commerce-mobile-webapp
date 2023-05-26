<?php

namespace App\Controllers;

require_once './config/database.php';

use App\Config\Database;
use mysqli_sql_exception;

class ProductController extends BaseController
{
	public function all()
	{
		try {
			$connect = new Database();
			$connect->DBConnect();

			$sql = "SELECT * FROM products";
			$products = $connect->executeQuery($sql);
			var_dump($products);

			$connect->close();

			return $products;
		} catch (mysqli_sql_exception $e) {
			error_log($e->__toString());
		}
	}
}
