<?php
session_start();

if (empty($_SESSION['quantity_product_in_cart'])) {
  $_SESSION['quantity_product_in_cart'] = 0;
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <?php require './header-tag.php' ?>
</head>

<body>
  <div id="wrapper">
    <?php require './header.php' ?>
    <?php require './main.php' ?>
    <?php require './footer.php' ?>
  </div>

  <?php require './footer-tag.php' ?>
</body>

</html>