<?php require "../check_admin_login.php" ?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <?php require '../../header-tag.php' ?>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Thông Tin Sản Phẩm</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    require "../connect.php";
    $sql = "select * from products
    where id = '$id'";
    $arr_result = mysqli_query($connect, $sql);
    $result = mysqli_fetch_array($arr_result); // products

    $sql = "select * from manufacturers";
    $arr_result = mysqli_query($connect, $sql); // manufacturers
    ?>
    <div id="wrapper">
        <div class="sidebar-offcanvas">
            <?php require '../sidebar.php' ?>
        </div>
        <div class="page-body-wrapper">
            <?php require '../header.php' ?>
            <div id="content" class="container-fluid">
                <div class="header-content d-flex align-items-center">
                    <button type="button" class="me-2 btn btn-outline-dark" onclick="history.back()">
                        <ion-icon name="arrow-undo-outline"></ion-icon>
                    </button>
                    <h1 class="title-content">Thông Tin Sản Phẩm</h1>
                </div>
                <div id="main-content">
                    <div class="form-update-product container-xxl">
                        <form id="form-update" method="post" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" name="id" value="<?= $result['id'] ?>">
                            <div class="mb-3">
                                <label class="form-label">Tên sản phẩm</label>
                                <input class="form-control" type="text" name="name" value="<?= $result['name'] ?>">
                            </div>
                            <div class="mb-3 row">
                                <div class="col">
                                    <span>Giữ lại ảnh cũ:</span>
                                    <img src="../products/photos/<?= $result['photo'] ?>" alt="<?= $result['name'] ?>" title="<?= $result['name'] ?>" height="100px">
                                    <input class="form-control" type="hidden" name="photo_old" value="<?= $result['photo'] ?>">
                                </div>
                                <div class="col">
                                    <label class="form-label">Hoặc đổi ảnh mới:</label>
                                    <input id="imgFile" class="form-control" type="file" name="photo_new">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col">
                                    <label class="form-label">Giá</label>
                                    <input class="form-control" type="text" name="price" value="<?= $result['price'] ?>">
                                </div>
                                <div class="col">
                                    <label class="form-label">Nhà sản xuất</label>
                                    <select name="manufacturer_id" class="form-select">
                                        <?php foreach ($arr_result as $each) { ?>
                                            <option <?= ($result['manufacturer_id'] === $each['id']) ? 'selected' : '' ?> value="<?= $each['id'] ?>">
                                                <?= $each['name'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mô tả</label>
                                <textarea class="form-control" name="description" rows="6"><?= $result['description'] ?></textarea>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn-submit btn btn-outline-success me-2" data-style="update">
                                    <ion-icon name="checkmark-done-outline"></ion-icon>
                                    Lưu
                                </button>
                                <button type="button" class="btn-delete btn btn-outline-danger" data-style="delete-form" data-id="<?= $result['id'] ?>">
                                    <ion-icon name="trash-outline"></ion-icon>
                                    Xóa
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require '../../footer-tag.php' ?>
    <script type="module" src="../assets/js/index.js"></script>
    <script type="module" src="../assets/js/products.js"></script>
</body>

<?php mysqli_close($connect) ?>

</html>