<?php

namespace app\core;

use Exception;
use Smarty;

class ViewEngine extends Smarty
{
  public function __construct()
  {
    parent::__construct();

    $this->setTemplateDir(BASE_PATH . "/resources/views/");
    $this->setConfigDir(BASE_PATH . "/storage/templates/configs/");
    $this->setCompileDir(BASE_PATH . "/storage/templates/templates_c/");
    $this->setCacheDir(BASE_PATH . "/storage/templates/cache/");

    $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
    $this->assign('app_name', 'Ecommerce MOBILE SELLING Website');
  }

  public static function convertToFileView(string $file_path): string
  {
    $file_path = BASE_PATH . '/resources/views/' . $file_path . '.tpl';

    if (!file_exists($file_path))
      throw new Exception("File not found {$file_path}");

    return $file_path;
  }
}
