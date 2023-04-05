<?php

namespace App\Controllers;

require_once __DIR__ . '/vendor/autoload.php';

$klein = new \Klein\Klein();

class HomeController extends BaseController
{
  public function __construct()
  {
//    require_once './app/views/client/index.php';
//    $service->render('./app/views/client/index.php', array('title' => 'My View'));
  }

  public function index()
  {
    // $klein->respond()
  }
}
