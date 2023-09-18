<?php require "../check-admin-login.php" ?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <?php require '../../header_tag.php' ?>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Thêm Sản Phẩm</title>
</head>

<body>
    <?php
    require "../connect.php";
    $sql = "select * from manufacturers";
    $result = mysqli_query($connect, $sql);
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
                    <h1 class="title-content">Thêm Sản Phẩm</h1>
                </div>
                <div id="main-content">
                    <div class="form-update-product">
                        <form id="form-update" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label class="bg-white fw-bold col-sm-2 col-form-label">Tên sản phẩm</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="bg-white fw-bold col-sm-2 col-form-label">Mô tả</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" cols="40" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4 row">
                                    <label class="bg-white fw-bold col-sm-2 col-form-label">Giá</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="price">
                                    </div>
                                </div>
                                <div class="col-sm-4 row">
                                    <label class="bg-white fw-bold col-sm-2 col-form-label">Ảnh</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="file" name="photo">
                                    </div>
                                </div>
                                <div class="col-sm row">
                                    <label class="bg-white fw-bold col-sm-4 col-form-label">Nhà sản xuất</label>
                                    <div class="col-sm-8">
                                        <select class="form-select" name="manufacturer_id">
                                            <?php foreach ($result as $each) { ?>
                                                <option value="<?= $each['id'] ?>">
                                                    <?= $each['name'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn-submit btn btn-outline-success me-2" data-style="create">
                                    <ion-icon name="checkmark-done-outline"></ion-icon>
                                    Thêm
                                </button>
                                <button type="reset" class="btn btn-outline-danger">
                                    Nhập Lại
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