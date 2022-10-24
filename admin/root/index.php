<?php require "../check-admin-login.php" ?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <?php require '../header-tag.php' ?>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Giao Diện Admin</title>
</head>

<body>
    <div id="wrapper">
        <div class="sidebar-offcanvas">
            <?php require '../sidebar.php' ?>
        </div>
        <div class="page-body-wrapper">
            <?php require '../header.php' ?>
            <div id="content" class="container-fluid"></div>
        </div>
    </div>

    <script type="module" src="../assets/js/index.js"></script>
</body>

</html>