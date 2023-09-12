<?php

namespace app\controllers;

use app\core\BaseController;

class DashboardAdminController extends BaseController
{
  public static function index(): void
  {
    view("admin/pages/index");
  }
}
