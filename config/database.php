<?php

namespace App\Config;

use Dotenv\Dotenv;
use mysqli;
use mysqli_sql_exception;

require_once BASEPATH . '/vendor/autoload.php';
$dotenv = Dotenv::createImmutable(BASEPATH);
$dotenv->load();


class Database
{
  private string $localhost;
  private string $username;
  private string $password;
  private string $database;

  private $connect;

  public function __construct()
  {
    $this->localhost = $_ENV['DB_HOST'];
    $this->username  = $_ENV['DB_USER'];
    $this->password  = $_ENV['DB_PASS'];
    $this->database  = $_ENV['DB_DATABASE'];
  }

  public function DBConnect()
  {
    try {
      $this->connect = new mysqli($this->localhost, $this->username, $this->password, $this->database);
      $this->connect->set_charset('utf8mb4');

      if ($this->connect->connect_error) {
        error_log($this->connect->connect_error);
      }
    } catch (mysqli_sql_exception $e) {
      error_log($e->__toString());
    }
  }

  public function executeQuery($sql)
  {
    $res  = $this->connect->query($sql);
    $data = [];

    $rows = $res->fetch_all(MYSQLI_ASSOC);
    foreach ($rows as $row) {
      $data[] = $row;
    }

    $res->free();

    return $data;
  }

  public function executeUpdate($sql)
  {
    mysqli_query($this->connect, $sql);
  }

  public function close()
  {
    $this->connect->close();
  }
}
