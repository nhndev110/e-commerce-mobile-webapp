<?php

// namespace app\controllers;

// require_once './config/database.php';

// use app\configs\Database;
// use app\controllers\BaseController;
// use mysqli_sql_exception;

// class ManufacturerController extends BaseController
// {
// 	public function index(): void
// 	{
// 		try {
// 			$connect = new Database();
// 			$connect->DBConnect();

// 			$sql = "SELECT * FROM manufacturers";
// 			$manufacturers = $connect->executeQuery($sql);

// 			$connect->close();

// 			// return $manufacturers;
// 		} catch (mysqli_sql_exception $e) {
// 			error_log($e->__toString());
// 		}
// 	}
// }
