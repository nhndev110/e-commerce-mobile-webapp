<?php

require_once './config/database.php';

$connect = new App\Database\Database();
print_r($connect->select("products"));
