<?php

namespace app\models;

use app\core\BaseModel;

class ManufacturerModel extends BaseModel
{
  protected string $table = "manufacturers";

  public function __construct()
  {
    parent::__construct($this->table);
  }

  public function getAllManufacturers()
  {
    $data = [];

    $manufacturers_list = parent::getAllData();

    if (!empty($manufacturers_list)) {
      foreach ($manufacturers_list as $manufacturer) {
        $data[] = new ManufacturerEntity($manufacturer['id'], $manufacturer['name'], $manufacturer['address'], $manufacturer['phone'], $manufacturer['image']);
      }
    }

    return $data;
  }
}
