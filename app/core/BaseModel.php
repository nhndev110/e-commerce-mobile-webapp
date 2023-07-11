<?php

namespace app\core;

use app\core\DatabaseConnection;

class BaseModel
{
  protected string $table;
  protected object $connect;

  public function __construct(string $table)
  {
    $this->table   = $table;
    $this->connect = new DatabaseConnection();
    $this->connect->DBConnect();
  }

  public function getAllData()
  {
    $sql_select_all = "SELECT * FROM {$this->table}";
    $res            = $this->connect->executeQuery($sql_select_all);
    $this->connect->close();

    return $res;
  }

  public function getData(int $id)
  {
    $sql_select_one = "SELECT * FROM {$this->table} WHERE id = '$id'";
    $res            = $this->connect->executeQuery($sql_select_one);
    $this->connect->close();

    return $res[0];
  }
}
