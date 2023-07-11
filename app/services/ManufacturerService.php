<?php

namespace app\services;

use app\models\ManufacturerModel;

class ManufacturerService
{
  public static function getManufacturersData(): array
  {
    $data = [];

    $list_manufacturers = (new ManufacturerModel())->getAllManufacturers();
    if (!empty($list_manufacturers)) {
      foreach ($list_manufacturers as $manufacturer) {
        $data[] = [
          'id' => $manufacturer->getId(),
          'name' => $manufacturer->getName(),
          'address' => $manufacturer->getAddress(),
          'phone' => $manufacturer->getPhone(),
          'image' => $manufacturer->getImage(),
        ];
      }
    }

    return $data;
  }
}
