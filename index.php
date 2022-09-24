<?php
session_start();

if (empty($_SESSION['quantity_product_in_cart'])) {
    $_SESSION['quantity_product_in_cart'] = 0;
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <title>nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng</title>
    <?php require './header-tag.php' ?>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/home-page.css">
</head>

<body>
    <div id="wrapper">
        <?php require "./header.php" ?>
        <div id="content">
            <h1 hidden>nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng</h1>
            <h2>Xem Tất Cả Sản Phẩm <a href="./products.php">Tại đây</a></h2>
        </div>
        <?php require "./footer.php" ?>
    </div>
</body>

</html>