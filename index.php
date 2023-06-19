<?php

define('BASE_PATH', $_SERVER['DOCUMENT_ROOT']);

if (!defined('BASE_PATH')) {
  header("HTTP/1.0 500 Internal Server Error");
  exit();
}

session_start();
require_once BASE_PATH . '/config/variables.php';
require_once BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/routes/web.php';
