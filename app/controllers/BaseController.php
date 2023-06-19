<?php

namespace App\Controllers;

require_once BASE_PATH . './app/core/View.php';

use App\Core\View;

class BaseController
{
  protected function view(string $file_path, array $data = [])
  {
    (new View($file_path, $data))->convertToFilePath()->renderView();
  }
}
