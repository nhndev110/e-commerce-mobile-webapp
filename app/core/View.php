<?php

namespace App\Core;

class View
{
  protected array $view_data;

  protected string $view_file;

  public function __construct(string $view_file)
  {
    $this->view_data = array();
    $this->view_file = $view_file;
  }

  public function assign(string $key, array|string|int $value): void
  {
    $this->view_data[$key] = $value;
  }

  public function render(array $data): void
  {
    if (!empty($data)) {
      $this->view_data = $data;
    }

    extract($this->view_data);
    ob_start();
    include $this->view_file;
    ob_end_flush();
    ob_end_clean();
  }
}
