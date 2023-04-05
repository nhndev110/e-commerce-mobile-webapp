<?php

namespace App\Controllers;

require_once './config/database.php';

use App\Config\Database;

class ProductController extends BaseController
{
	public function all()
	{
		$connect = new Database();
		$sql = "SELECT * FROM products";
		$products = $connect->executeQuery($sql);
		
		$connect->close();

		return $products;
	}
}