<?php

namespace app\core;

use Exception;
use Smarty;

class ViewEngine extends Smarty
{
  public function __construct()
  {
    parent::__construct();

    $this->setTemplateDir(APP_PATH . "/resources/views/");
    $this->setConfigDir(APP_PATH . "/storage/templates/configs/");
    $this->setCompileDir(APP_PATH . "/storage/templates/templates_c/");
    $this->setCacheDir(APP_PATH . "/storage/templates/cache/");

    $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
    $this->assign('app_name', 'E commerce MOBILE SELLING Website');
  }

  public static function convertToFileView(string $file_path): string
  {
    $file_path = APP_PATH . '/resources/views/' . $file_path . '.tpl';

    if (!file_exists($file_path))
      throw new Exception("File not found {$file_path}");

    return $file_path;
  }
}
