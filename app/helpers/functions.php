<?php

use app\core\ViewEngine;

function view(string $file_path, array $data = [])
{
  $file_path = ViewEngine::convertToFileView($file_path);
  $view = new ViewEngine();
  if ($file_path != "") {

    if ($data) $view->assign($data);

    $view->display($file_path);
  }

  return $view;
}
