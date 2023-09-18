<?php

if (file_exists($vendor = __DIR__ . '/../vendor/autoload.php')) {
  require_once $vendor;
  unset($vendor);
}

if (file_exists($bootstrap = __DIR__ . '/../bootstrap/app.php')) {
  require_once $bootstrap;
  unset($bootstrap);
}
