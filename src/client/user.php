<?php
if (empty($_SESSION['id']) || empty($_SESSION['name'])) {
  $_SESSION['error'] = "Vui lòng đăng nhập !!!";
  header('location: ./signin.php');
  exit;
}
?>
<h1 hidden>nhndev110 - <?= $_SESSION['name'] ?></h1>
<?php if (isset($_SESSION["error"])) : ?>
  <span style="color: red;"><?= $_SESSION["error"] ?></span>
  <?php unset($_SESSION["error"]) ?>
<?php endif; ?>
<h2>Chào mừng <span style="color: green;">"<?php echo $_SESSION['name']; ?>"</span> quay trở lại !!!</h2>