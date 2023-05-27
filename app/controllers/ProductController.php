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

			return $products;
			$connect->close();
		} catch (mysqli_sql_exception $e) {
			error_log($e->__toString());
		}
	}
}
