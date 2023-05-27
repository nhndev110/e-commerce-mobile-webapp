<?php

namespace App\Controllers;

require_once './config/database.php';

use App\Config\Database;
use App\Controllers\BaseController;
use mysqli_sql_exception;

class ManufacturerController extends BaseController
{
	public function all()
	{
		try {
			$connect = new Database();
			$connect->DBConnect();

			$sql = "SELECT * FROM manufacturers";
			$manufacturers = $connect->executeQuery($sql);

			// echo json_encode($manufacturers);

			$connect->close();

			return $manufacturers;
		} catch (mysqli_sql_exception $e) {
			error_log($e->__toString());
		}
	}
}
