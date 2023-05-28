<?php

namespace App\Controllers;

class HomeController extends BaseController
{
  public function index($ser)
  {
    $ser->render('./app/views/client/index.phtml', [
      'title' => 'nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng',
      'main_content' => './app/views/client/home.phtml',
      'style_css' => './public/client/css/home.css',
    ]);
  }
}
