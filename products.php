<?php
session_start();
require "./admin/connect.php";
$products_sql = "select * from products";
$products_arr = mysqli_query($connect, $products_sql);

$manufacturers_sql = "select * from manufacturers";
$manufacturers_arr = mysqli_query($connect, $manufacturers_sql);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>nhndev110 - Tất cả sản phẩm</title>
    <?php require './header-tag.php' ?>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/products.css">
</head>

<body>
    <div id="wrapper">
        <?php require "./header.php" ?>
        <div id="content" class="container">
            <h1 hidden>nhndev110 - Tất cả sản phẩm</h1>
            <div id="main-content">
                <div id="sidebar-filter">
                    <ul>
                        <li>
                            <h3>Hãng Sản Xuất</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" id="cb-all">
                                    <label for="cb-all">Tất Cả</label>
                                </li>
                                <?php foreach ($manufacturers_arr as $each_manufacturer) { ?>
                                    <?php $tmp_manufacturer_name = $each_manufacturer['name'] ?>
                                    <li>
                                        <input type="checkbox" id="cb-<?= $tmp_manufacturer_name ?>">
                                        <label for="cb-<?= $tmp_manufacturer_name ?>"><?= $tmp_manufacturer_name ?></label>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="block-product-list">
                    <h2 id="title-products">TẤT CẢ SẢN PHẨM</h2>
                    <div id="product-list">
                        <?php foreach ($products_arr as $each_product) { ?>
                            <?php $tmp_product_name = $each_product['name'] ?>
                            <div class="product-info">
                                <a class="product__link" href="./view-product.php?id=<?= $each_product['id'] ?>">
                                    <div class="product__image">
                                        <img class="product__img" src="./admin/products/photos/<?= $each_product['photo'] ?>" alt="<?= $tmp_product_name ?>" title="<?= $tmp_product_name ?>">
                                    </div>
                                    <div class="product__body">
                                        <h3 class="product__name" title="<?= $tmp_product_name ?>">
                                            <?= $tmp_product_name ?>
                                        </h3>
                                        <div class="product__badge">
                                            <p class="product__more-info__item">6.7 inches</p>
                                            <p class="product__more-info__item">6 GB</p>
                                            <p class="product__more-info__item">128 GB</p>
                                        </div>
                                        <div class="product__box-price">
                                            <p class="product__price--show">
                                                <?= number_format($each_product['price'], 0, ",", ".") ?>&nbsp;₫
                                            </p>
                                            <p class="product__price--through">
                                                24.990.000&nbsp;₫
                                            </p>
                                        </div>
                                        <div class="product__promotions">
                                            <span>[HOT] Thu cũ lên đời giá cao - Thủ tục nhanh - Trợ giá lên tới 1.000.000đ</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php require "./footer.php" ?>
    </div>


    <?php require './footer-tag.php' ?>
    <script>
        $(document).ready(function() {
            $('.btn-add-to-cart').click(function(e) {
                let id = $(this).data('id');
                $.ajax({
                    url: './add-to-cart.php',
                    type: 'POST',
                    data: {
                        id
                    },
                    success(response) {
                        if (response == -1) {
                            alert('id không tồn tại');
                        } else {
                            $("#products-in-cart").text(response);
                        }
                    },
                    error(xhr) {
                        console.error(xhr.statusText);
                    }
                })
            });
        });
    </script>
</body>

<?php mysqli_close($connect) ?>

</html>