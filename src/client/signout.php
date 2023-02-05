<?php
session_start();
unset($_SESSION['name']);
unset($_SESSION['id']);
setcookie("remember", null, -1);

header('location: ./index.php');
