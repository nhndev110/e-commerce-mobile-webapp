<?php

namespace Config;

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

return [
  "DB_HOST" => $_ENV['DB_HOST'],
  "DB_USER" => $_ENV['DB_USER'],
  "DB_PASS" => $_ENV['DB_PASS'],
  "DB_DATABASE" => $_ENV['DB_DATABASE'],
];
