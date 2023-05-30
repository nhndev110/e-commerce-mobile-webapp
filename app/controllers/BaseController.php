<?php

namespace App\Controllers;

require_once './app/core/View.php';

use App\Core\View;

class BaseController extends View
{
  protected object $view;

  protected function __construct()
  {
    $this->view = new View();
  }

  protected function renderView(string $file_path, array $data)
  {
    $this->view->render($file_path, $data);
  }
}
