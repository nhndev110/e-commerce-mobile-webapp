<?php

namespace app\core;

use Throwable;

class ErrorHandler
{
  public static function handleException(Throwable $e): void
  {
    http_response_code(500);
    view("errors/exception", [
      "message" => $e->getMessage(),
      "code" => $e->getCode(),
      "file" => $e->getFile(),
      "line" => $e->getLine(),
      "trace_as_string" => $e->getTraceAsString(),
    ]);
  }
}
