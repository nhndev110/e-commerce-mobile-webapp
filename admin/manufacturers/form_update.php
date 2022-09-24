<?php require "../check_admin_login.php" ?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php require '../../header-tag.php' ?>
	<link rel="stylesheet" href="../assets/css/style.css">
	<title>Thông Tin Nhà Sản Xuất</title>
</head>

<body>
	<?php
	$id = $_GET['id'];
	require "../connect.php";
	$sql = "select * from manufacturers
            where id = '$id'";
	$arr_result = mysqli_query($connect, $sql);
	$result = mysqli_fetch_array($arr_result);
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
					<h1 class="title-content">Thông Tin Nhà Sản Xuất</h1>
				</div>
				<div id="main-content">
					<div class="info-manufacturer row">
						<div class="image-show col-2">
							<img width="100%" class="image-manufacturer" src="<?= $result['image'] ?>" alt="<?= $result['name'] ?>" title="<?= $result['name'] ?>">
						</div>
						<div class="form-update-manufacturer col-10">
							<form id="form-update">
								<input type="hidden" name="id" value="<?= $result['id'] ?>">
								<div class="row mb-3">
									<label class="bg-white col-sm-2 col-form-label">Tên</label>
									<div class="col-sm-10">
										<input class="form-control" type="text" name="name" value="<?= $result['name'] ?>">
									</div>
								</div>
								<div class="row mb-3">
									<label class="bg-white col-sm-2 col-form-label">Địa chỉ</label>
									<div class="col-sm-10">
										<textarea class="form-control" name="address" rows="6"><?= $result['address'] ?></textarea>
									</div>
								</div>
								<div class="row mb-3">
									<label class="bg-white col-sm-2 col-form-label">Số điện thoại</label>
									<div class="col-sm-10">
										<input class="form-control" type="tel" name="phone" value="<?= $result['phone'] ?>">
									</div>
								</div>
								<div class="row mb-3">
									<label class="bg-white col-sm-2 col-form-label">Ảnh</label>
									<div class="col-sm-10">
										<input class="form-control" type="text" name="image" value="<?= $result['image'] ?>">
									</div>
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
	</div>
	<?php require '../../footer-tag.php' ?>
	<script type="module" src="../assets/js/index.js"></script>
	<script type="module" src="../assets/js/manufacturers.js"></script>
</body>

<?php mysqli_close($connect) ?>

</html>