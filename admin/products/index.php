<?php require "../check-admin-login.php" ?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <?php require '../../header-tag.php' ?>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Giao Diện Admin</title>
</head>

<body>
    <?php
    require "../connect.php";
    $sql = "select products.*, manufacturers.name as manufacturer_name
    from products
    join manufacturers on products.manufacturer_id = manufacturers.id";
    $result = mysqli_query($connect, $sql);
    ?>

    <div id="wrapper">
        <div class="sidebar-offcanvas">
            <?php require '../sidebar.php' ?>
        </div>
        <div class="page-body-wrapper">
            <?php require '../header.php' ?>
            <div id="content" class="container-fluid">
                <div class="header-content">
                    <h1 class="title-content">Quản Lý Tất Cả Sản Phẩm</h1>
                </div>
                <div id="main-content">
                    <div class="mb-2">
                        <a title="Thêm" href="../products/form_insert.php" class="btn btn-outline-dark">
                            <ion-icon name="add-outline"></ion-icon>
                            Thêm Mới
                        </a>
                    </div>
                    <div class="table-content">
                        <table class="table table-bordered text-center align-middle overflow-hidden">
                            <thead class="table-dark">
                                <tr class="align-middle">
                                    <th>Mã</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Giá</th>
                                    <th>Nhà Sản Xuất</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <?php foreach ($result as $each) { ?>
                                    <tr>
                                        <td><?= $each['id'] ?></td>
                                        <td><?= $each['name'] ?></td>
                                        <td><?= number_format($each['price'], 0, ",", ".") ?>₫</td>
                                        <td><?= $each['manufacturer_name'] ?></td>
                                        <td>
                                            <a href="../products/form_update.php?id=<?= $each['id'] ?>" class="btn btn-outline-primary">
                                                <ion-icon name="create-outline"></ion-icon>
                                            </a>
                                        </td>
                                        <td>
                                            <button class="btn-delete btn btn-outline-danger" data-style="delete-table" data-id="<?= $each['id'] ?>">
                                                <ion-icon name="trash-outline"></ion-icon>
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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