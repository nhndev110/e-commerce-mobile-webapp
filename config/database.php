<?php

namespace App\Config;

use Dotenv\Dotenv;
use mysqli;
use mysqli_sql_exception;
use mysqli_driver;

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
    $this->username = $_ENV['DB_USER'];
    $this->password = $_ENV['DB_PASS'];
    $this->database = $_ENV['DB_DATABASE'];

    $driver = new mysqli_driver();

    if ($_ENV['APP_DEBUG'] == "false") {
      $driver->report_mode = MYSQLI_REPORT_OFF;
    } else {
      $driver->report_mode = MYSQLI_REPORT_ALL;
    }
  }

  public function DBConnect()
  {
    try {
      $this->connect = new mysqli($this->localhost, $this->username, $this->password, $this->database);
      $this->connect->set_charset('utf8mb4');

      echo print_r($this->connect);
      die();


      if ($this->connect->connect_error) {
        error_log($this->connect->connect_error);
      }
    } catch (mysqli_sql_exception $e) {
      error_log($e->__toString());
    }
  }

  public function executeQuery($sql)
  {
    $result = $this->connect->query($sql);
    var_dump($result);
    die();
    if (mysqli_num_rows($result) > 0) {
      return $result;
    } else {
      return null;
    }
  }

  public function executeUpdate($sql)
  {
    mysqli_query($this->connect, $sql);
  }

  public function close()
  {
    mysqli_close($this->connect);
  }
}
