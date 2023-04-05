<?php

namespace App\Controllers;

require_once './config/database.php';

use App\Config\Database;

class ManufacturerController extends BaseController
{
	public function all()
	{
		$connect = new Database();
		$sql = "SELECT * FROM manufacturers";
		$manufacturers = $connect->executeQuery($sql);
		
		$connect->close();

		return $manufacturers;
	}
}