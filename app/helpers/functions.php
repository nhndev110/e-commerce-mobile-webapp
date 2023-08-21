<?php

use app\core\ViewEngine;

function view(string $filePath, array $data = [])
{
  $filePath = ViewEngine::convertToFileView($filePath);
  $view = new ViewEngine();
  if ($filePath != "") {

    if ($data) $view->assign($data);

    $view->display($filePath);
  }

  return $view;
}

function asset(string $filePath)
{
  return APP_URL . $filePath . '?' . time();
}
