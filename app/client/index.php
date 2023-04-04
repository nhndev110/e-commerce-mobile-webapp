<?php
if (empty($_SESSION['quantity_product_in_cart'])) {
    $_SESSION['quantity_product_in_cart'] = 0;
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <?php require_once './src/client/header_tag.php' ?>
</head>

<body>
<div id="wrapper">
    <?php require_once './src/client/header.php' ?>
    <main id="main" class="container">
        <?php require_once './src/client/home.php' ?>
    </main>
    <?php require_once './src/client/footer.php' ?>
</div>
<?php require_once './src/client/footer-tag.php' ?>
</body>

</html>