<?php

namespace App\Config;

use Dotenv\Dotenv;
use mysqli;
use mysqli_sql_exception;

<<<<<<< HEAD
require_once dirname(__DIR__) . '/vendor/autoload.php';
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
=======
require_once BASEPATH . '/vendor/autoload.php';
$dotenv = Dotenv::createImmutable(BASEPATH);
>>>>>>> 0d828607a5595c3dbe39b0efb1c8ffa7dcd98c39
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
  }

  public function DBConnect()
  {
    if ($_ENV['APP_DEBUG'] == "false") {
      mysqli_report(MYSQLI_REPORT_OFF);
      echo "{$_ENV['APP_DEBUG']} == false : " . ($_ENV['APP_DEBUG'] == false);
    } else {
      mysqli_report(MYSQLI_REPORT_ALL);
      echo "{$_ENV['APP_DEBUG']} == true";
    }

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

<<<<<<< HEAD
  public function all($table)
  {
    $sql = "SELECT * FROM {$table}";
    $result = mysqli_query($this->DBConnect(), $sql);
    if (mysqli_num_rows($result) > 0) {
      return $result;
    } else {
      return null;
=======
  public function executeQuery($sql)
  {
    echo $sql;
    $result = $this->connect->query($sql);

    foreach ($result as $each) {
      echo $each['name'] . '<br>';
>>>>>>> 0d828607a5595c3dbe39b0efb1c8ffa7dcd98c39
    }

    $result->free();

    // if (mysqli_num_rows($result) > 0) {
    //   return $result;
    // } else {
    //   return null;
    // }
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
