<!DOCTYPE html>
<html lang="vi">

<head>
	<title>nhndev110 - Quên Mật Khẩu</title>
	<?php require './header-tag.php' ?>
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
	<div id="wrapper">
		<?php require './header.php' ?>
		<div id="content" class="container">
			<h1 hidden>nhndev110 - Quên Mật Khẩu</h1>
			<form action="process-forgot-password.php" method="post">
				<div class="">
					<input type="email" spellcheck="false" name="email" placeholder="Nhập email tài khoảng của bạn">
				</div>
				<button class="btn btn-dark">Gửi</button>
			</form>
		</div>
		<?php require './footer.php' ?>
	</div>
</body>

</html>