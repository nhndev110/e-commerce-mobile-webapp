<?php

namespace App\Database;

use Dotenv\Dotenv;

require_once dirname(__DIR__) . '\vendor\autoload.php';
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

class Database
{
  private string $localhost;
  private string $username;
  private string $password;
  private string $database;

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
    $connect = mysqli_connect($this->localhost, $this->username, $this->password, $this->database);
    mysqli_set_charset($connect, 'utf8mb4');

    $error = mysqli_error($connect);
    if (empty($error)) {
      return $connect;
    } else {
      return $error;
    }
  }

  public function select($table)
  {
    $sql = "SELECT * FROM $table";
    $result = mysqli_query($this->DBConnect(), $sql);
    if (mysqli_num_rows($result) > 0) {
      return $result;
    }
  }
}
