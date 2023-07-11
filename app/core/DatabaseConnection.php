<?php

namespace app\core;

use app\core\ErrorHandler;
use Exception;
use mysqli;

class DatabaseConnection
{
  private string $localhost;
  private string $username;
  private string $password;
  private string $database;

  private object $connect;

  public function __construct()
  {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $this->localhost = $GLOBALS["DB_Config"]['DB_HOST'];
    $this->username = $GLOBALS["DB_Config"]['DB_USER'];
    $this->password = $GLOBALS["DB_Config"]['DB_PASS'];
    $this->database = $GLOBALS["DB_Config"]['DB_DATABASE'];
  }

  public function DBConnect(): void
  {
    try {
      $this->connect = new mysqli($this->localhost, $this->username, $this->password, $this->database);
      $this->connect->set_charset('utf8mb4');

      if (!empty($this->connect->error))
        throw new Exception("Connect failed {$this->connect->error}", $this->connect->errno);
    } catch (Exception $e) {
      ErrorHandler::handleException($e);
    }
  }

  /**
   * @param string $sql
   * @return array
   */
  public function executeQuery(string $sql): array
  {
    $data = [];

    if (!empty($this->connect)) {
      $stmt = $this->connect->prepare($sql);

      $stmt->execute();

      $res = $stmt->get_result();

      while ($row = $res->fetch_assoc()) {
        $data[] = $row;
      }
    }

    return $data;
  }

  public function executeUpdate(string $sql): void
  {
    if (!empty($this->connect))
      $this->connect->query($sql);
  }

  public function close(): void
  {
    if (!empty($this->connect))
      $this->connect->close();
  }
}
