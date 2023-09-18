<?php

namespace app\controllers;

use app\core\BaseController;

class HomeController extends BaseController
{
  public static function index(): void
  {
    view('pages/home');
  }
}
