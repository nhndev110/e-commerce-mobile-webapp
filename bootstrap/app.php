<?php

declare(strict_types=1);

session_start();

$_SESSION['quantity_product_in_cart'] ?? $_SESSION['quantity_product_in_cart'] = 0;

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

if (file_exists($vars_conf = __DIR__ . '/../config/variables.conf.php')) {
  require_once $vars_conf;
  unset($vars_conf);
}

require_once APP_PATH . '/config/database.conf.php';

spl_autoload_register(function ($className) {
  if (file_exists($file_path = APP_PATH . '/' . $className . '.php')) {
    require_once str_replace('\\', '/', $file_path);
  }
});

set_exception_handler('app\core\ErrorHandler::handleException');

require_once APP_PATH . '/app/helpers/functions.php';

$klein = new \Klein\Klein();

require_once APP_PATH . '/routes/web.php';
require_once APP_PATH . '/routes/api.php';

$klein->dispatch();
