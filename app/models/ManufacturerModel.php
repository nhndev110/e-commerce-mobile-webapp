<?php

namespace App\Models;

use App\Config\Database;
use mysqli_sql_exception;

class ManufacturerModel
{
  public function all()
  {
    try {
      $connect = new Database();
      $connect->DBConnect();

      $sql = "SELECT * FROM manufacturers";
      $manufacturers = $connect->executeQuery($sql);

      $connect->close();

      return $manufacturers;
    } catch (mysqli_sql_exception $e) {
      error_log($e->__toString());
    }
  }
}
