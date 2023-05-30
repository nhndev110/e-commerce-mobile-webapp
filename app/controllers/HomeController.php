<?php

namespace App\Controllers;

require_once './app/controllers/BaseController.php';

use App\Controllers\BaseController;

class HomeController extends BaseController
{
  private object $base_controller;

  public function __construct()
  {
    $this->base_controller = new BaseController();
  }

  public function index(): void
  {
    $this->base_controller->renderView('./app/views/client/index.phtml', [
      'title' => 'nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng',
      'main_content' => './app/views/client/home.phtml',
      'style_css' => './public/client/css/home.css',
      'data' => [],
    ]);
  }
}
