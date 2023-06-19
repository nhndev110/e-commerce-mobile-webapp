<?php

namespace App\Controllers;

require_once BASE_PATH . './app/controllers/BaseController.php';

use App\Controllers\BaseController;

class HomeController extends BaseController
{
  public function index(): void
  {
    BaseController::view('client.index', [
      'title' => 'nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng',
      'main_content' => 'client.home',
      'style_css' => './public/client/css/home.css',
    ]);
  }
}
