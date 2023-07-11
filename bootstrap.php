<?php

declare(strict_types=1);

define('BASE_PATH', $_SERVER['DOCUMENT_ROOT']);

session_start();

$_SESSION['quantity_product_in_cart'] ?? $_SESSION['quantity_product_in_cart'] = 0;

spl_autoload_register(function (string $className) {
  $file_path = BASE_PATH . '/' . $className . '.php';
  $file_path = str_replace('\\', '/', $file_path);

  if (file_exists($file_path))
    require_once $file_path;
});

set_exception_handler("app\core\ErrorHandler::handleException");

require_once BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/configs/database.conf.php';
require_once BASE_PATH . '/configs/variables.conf.php';

require_once BASE_PATH . '/app/helpers/functions.php';

$klein = new Klein\Klein();

require_once BASE_PATH . '/routes/web.php';
require_once BASE_PATH . '/routes/api.php';

$klein->dispatch();
