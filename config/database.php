<?php

namespace App\Config;

use Dotenv\Dotenv;

require_once dirname(__DIR__) . '/vendor/autoload.php';
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
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
    $this->DBConnect();
  }

  public function DBConnect()
  {
    $this->connect = mysqli_connect($this->localhost, $this->username, $this->password, $this->database);
    mysqli_set_charset($this->connect, 'utf8mb4');

    $error = mysqli_error($this->connect);
    if (!empty($error)) {
      return $error;
    }
  }

  public function executeQuery($sql)
  {
    $result = mysqli_query($this->connect, $sql);
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
