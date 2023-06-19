<?php

namespace App\Core;

class View
{
  private string $file_path;

  private array $view_data;

  public function __construct(string $file_path, array $view_data = [])
  {
    $this->file_path = $file_path;
    $this->view_data = $view_data;

    return $this;
  }

  public function assign(string $file_path, array $view_data = [])
  {
    $this->__construct($file_path, $view_data)->convertToFilePath()->renderView();
  }

  public function convertToFilePath(): object
  {
    if (substr_count($this->file_path, '.') > 0)
      $this->file_path = str_replace('.', '/', $this->file_path);

    $this->file_path = BASE_PATH . '/app/views/' . $this->file_path . '.phtml';

    if (!file_exists($this->file_path))
      die("File not found: $this->file_path");

    return $this;
  }

  public function renderView(): void
  {
    if (!empty($this->view_data))
      extract($this->view_data);

    ob_start();
    require_once $this->file_path;
    ob_end_flush();
  }
}
