<?php
if (empty($_SESSION['quantity_product_in_cart'])) {
  $_SESSION['quantity_product_in_cart'] = 0;
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <title><?php echo $this->escape($this->title) ?></title>
  <?php require_once './app/views/client/header_tag.php' ?>
  <link rel="stylesheet" href="./public/client/css/style-global.css">
  <link rel="stylesheet" href="./public/client/css/style.css">
  <link rel="stylesheet" href="./public/client/css/header.css">
  <link rel="stylesheet" href="./public/client/css/home.css">
  <link rel="stylesheet" href="./public/client/css/footer.css">
</head>

<body>
<div id="wrapper">
  <?php require_once './app/views/client/header.php' ?>
  <main id="main" class="container">
    <h1 hidden>nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng</h1>
    <h2>Xem Tất Cả Sản Phẩm <a href="./index.php?page=products">Tại đây</a></h2>
  </main>
  <?php require_once './app/client/footer.php' ?>
</div>
<?php require_once './app/client/footer-tag.php' ?>
</body>

</html>