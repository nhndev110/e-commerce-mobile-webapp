<?php

<<<<<<< HEAD
namespace App\Controller;

//require_once dir(__DIR__) . '/vendor/autoload.php';

//$klein = new \Klein\Klein();

class HomeController
{
  public function __construct()
  {
//    require_once './app/views/client/index.php';
//    $service->render('./app/views/client/index.php', array('title' => 'My View'));
=======
namespace App\Controllers;

require_once '.\vendor\autoload.php';

$klein = new \Klein\Klein();

class HomeController extends BaseController
{
  public function index()
  {
    // $klein->respond()
>>>>>>> 0d828607a5595c3dbe39b0efb1c8ffa7dcd98c39
  }
}
