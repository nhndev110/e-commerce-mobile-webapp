<?php $canonical_path = "https://nhndev110.epizy.com/" ?>
<meta name="title" content="nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng" />
<meta name="description" content="Hệ thống 100 cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, smarthome, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí." />
<meta name="robots" content="index, follow" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="content-language" content="vi" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="keywords" content="nhndev110" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="url" content="<?= $canonical_path ?>" />
<!-- FB -->
<meta property="og:url" content="<?= $canonical_path ?>" />
<meta property="og:title" content="nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng" />
<meta property="og:description" content="Hệ thống 100 cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, smarthome, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí." />
<meta property="og:image" content="./assets/img/logo-apple.png" />
<meta property="og:image:width" content="307" />
<meta property="og:image:height" content="307" />
<meta property="og:image:alt" content="nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng" />
<meta property="og:site_name" content="nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng" />
<meta property="og:type" content="website" />
<!--  -->
<meta rel="canonical" content="<?= $canonical_path ?>" />
<link rel="icon" type="image/x-icon" href="./assets/img/logo-apple.png" />
<!--  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- <script src="https://unpkg.com/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" /> -->
<link rel="stylesheet" href="./assets/css/style.css">
<!--  -->
<?php
if (isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = 'home';
?>
<?php if ($page == 'home') { ?>
    <link rel="stylesheet" href="./assets/css/home.css">
    <title>nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng</title>
<?php } elseif ($page == 'products') { ?>
    <link rel="stylesheet" href="./assets/css/products.css">
    <title>nhndev110 - Tất cả sản phẩm</title>
<?php } elseif ($page == 'cart') { ?>
    <link rel="stylesheet" href="./assets/css/cart.css">
    <script src="./assets/js/cart.js" defer></script>
    <title>nhndev110 - Giỏ Hàng</title>
<?php } elseif ($page == 'user') { ?>
    <link rel="stylesheet" href="./assets/css/user.css">
    <title>nhndev110 - <?= $_SESSION["name"] ?></title>
<?php } elseif ($page == 'product-detail') { ?>
    <link rel="stylesheet" href="./assets/css/product-detail.css">
    <title>Điện Thoại <?= $product['name'] ?></title>
    <script src="./assets/js/view-product.js" defer></script>
<?php } else { ?>
    <?php header('location: ./404.html') ?>
<?php } ?>