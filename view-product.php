<?php
session_start();
if (isset($_GET['id']))
    $id = $_GET['id'];

require "./admin/connect.php";
$sql = "select * from products
where id = '$id'";
$arr_product = mysqli_query($connect, $sql);
$product = mysqli_fetch_array($arr_product);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Điện Thoại <?= $product['name'] ?></title>
    <?php require './header-tag.php' ?>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/view-product.css">
</head>

<body>
    <div id="wrapper">
        <?php require "./header.php" ?>
        <main id="main">
            <?php $product_name = $product['name'] ?>
            <section class="block-detail-product">
                <div class="container">
                    <div class="box-detail-product row">
                        <div class="box-detail-product__box-left col col-2">
                            <div class="box-gallery">
                                <div class="gallery-product-detail">
                                    <div class="img-content">
                                        <img src="./admin/products/photos/<?= $product['photo'] ?>" alt="<?= $product_name ?>" title="<?= $product_name ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-detail-product__box-right col col-2">
                            <div class="box-header">
                                <div class="box-product-name">
                                    <h1><?= $product_name ?></h1>
                                </div>
                            </div>
                            <hr>
                            <div class="block-box-price">
                                <div class="box-info__box-price">
                                    <p class="product__price--show">
                                        <?= number_format($product['price'], 0, ",", ".") ?>&nbsp;₫
                                    </p>
                                    <p class="product__price--through">
                                        <?= number_format($product['price'], 0, ",", ".") ?>&nbsp;₫
                                    </p>
                                </div>
                            </div>
                            <div class="box-linked">
                                <h3 class="mb-8">Chọn dung lượng:</h3>
                                <div class="list-linked row">
                                    <?php for ($i = 0; $i < 6; $i++) { ?>
                                        <div class="col col-4 mb-8">
                                            <label for="configuration" class="item-linked">
                                                <div>
                                                    <input type="radio" name="select-configuration" id="configuration">
                                                    <strong>8GB - 256GB</strong>
                                                </div>
                                                <span>
                                                    <?= number_format($product['price'], 0, ",", ".") ?>&nbsp;₫
                                                </span>
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="box-color">
                                <h3 class="mb-8">Chọn màu:</h3>
                                <div class="list-color row">
                                    <?php for ($i = 0; $i < 6; $i++) { ?>
                                        <div class="col col-5 mb-8">
                                            <label for="color-pink" class="item-color">
                                                <input type="radio" name="select-color" id="color-pink">
                                                <span>
                                                    <strong>Hồng</strong>
                                                </span>
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="box-btn">
                                <button class="btn btn-dark" type="submit">Mua Ngay</button>
                                <button class="btn btn-dark" type="submit">Thêm Giỏ Hàng</button>
                            </div>
                        </div>
                    </div>
                    <p><?= nl2br($product['description']) ?></p>
                </div>
            </section>
        </main>
        <?php require "./footer.php" ?>
    </div>
</body>

<?php mysqli_close($connect) ?>

</html>