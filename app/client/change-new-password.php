<?php
$token = $_GET['token'];
require './admin/connect.php';
$sql = "select * from forgot_password
where token = '$token'";
$arr_result = mysqli_query($connect, $sql);
if (mysqli_num_rows($arr_result) !== 1) {
	header('location: ./signin.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<title>nhndev110 - Đổi Mật Khẩu</title>
	<?php require './header-tag.php' ?>
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
	<?php require './header.php' ?>
	<div id="content" class="container">
		<h1 hidden>nhndev110 - Đổi Mật Khẩu</h1>
		<form action="./process-change-new-password.php" method="post">
			<input type="hidden" name="token" spellcheck="false" value="<?php echo $token ?>">
			<div>
				<label>Đổi mật khẩu mới</label>
				<input type="password" spellcheck="false" name="password">
			</div>
			<button class="btn btn-dark">Đổi mật khẩu</button>
		</form>
	</div>
	<?php require './footer.php' ?>
</body>

<?php mysqli_close($connect) ?>

</html>