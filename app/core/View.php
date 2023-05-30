<?php

namespace App\Core;

class View
{
  protected array $view_data;

  protected string $file_path;

  protected function __construct()
  {
    $this->view_data = [];
    $this->file_path = '';
  }

  protected function setFilePath(string $file_path): object
  {
    $this->file_path = $file_path;

    return $this;
  }

  protected function setViewData(array $view_data): object
  {
    $this->view_data = $view_data;

    return $this;
  }

  protected function assign(string $key, array $value): void
  {
    $this->view_data[$key] = $value;
  }

  protected function render(string $file_path, array $data = []): void
  {
    if (!empty($data)) {
      $this->view_data = $data;
      extract($this->view_data);
    }

    $this->file_path = $file_path;

    ob_start();
    require_once $this->file_path;
    ob_end_flush();
    // ob_end_clean();
  }
}
