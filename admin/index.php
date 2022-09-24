<?php session_start() ?>

<?php
if (isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['level'])) {
    header('location: ./root');
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require '../header-tag.php' ?>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100vw;
            height: 80vh;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <h1>ĐĂNG NHẬP</h1>
        <?php if (isset($_SESSION['error'])) { ?>
            <span style="color: red;"><?php echo $_SESSION['error'] ?></span>
            <?php unset($_SESSION['error']) ?>
        <?php } ?>
        <form action="process_login_admin.php" method="post">
            <div class="mb-3">
                <label class="form-label">Tên Đăng Nhập</label>
                <input class="form-control" type="email" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Mật Khẩu</label>
                <input class="form-control" type="password" name="password">
            </div>
            <button type="submit" class="btn btn-dark d-block w-100">Đăng Nhập</button>
        </form>
    </div>
</body>

</html>