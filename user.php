<?php
session_start();
if (empty($_SESSION['id']) || empty($_SESSION['name'])) {
    $_SESSION['error'] = "Vui lòng đăng nhập !!!";
    header('location: ./signin.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <title>nhndev110 - <?= $_SESSION['name'] ?></title>
    <?php require './header-tag.php' ?>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div id="wrapper">
        <?php require "./header.php" ?>
        <div id="content" class="container">
            <h1 hidden>nhndev110 - <?= $_SESSION['name'] ?></h1>
            <?php if (isset($_SESSION["error"])) : ?>
                <span style="color: red;"><?= $_SESSION["error"] ?></span>
                <?php unset($_SESSION["error"]) ?>
            <?php endif; ?>
            <h2>Chào mừng <span style="color: green;">"<?php echo $_SESSION['name']; ?>"</span> quay trở lại !!!</h2>
        </div>
        <?php require "./footer.php" ?>
    </div>
</body>

</html>