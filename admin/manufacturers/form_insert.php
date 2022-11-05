<?php require "../check-super-admin-login.php" ?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<?php require '../../header-tag.php' ?>
	<link rel="stylesheet" href="../assets/css/style.css">
	<title>Thêm Nhà Sản Xuất</title>
</head>

<body>
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
					<h1 class="title-content">Thêm Nhà Sản Xuất</h1>
				</div>
				<div id="main-content">
					<div class="form-update-manufacturer">
						<form id="form-update">
							<div class="row mb-3">
								<label class="bg-white col-sm-2 col-form-label">Tên</label>
								<div class="col-sm-10">
									<input placeholder="Nhập Tên Nhà Sản Xuất" class="form-control" type="text" name="name">
								</div>
							</div>
							<div class="row mb-3">
								<label class="bg-white col-sm-2 col-form-label">Địa chỉ</label>
								<div class="col-sm-10">
									<textarea placeholder="Nhập Địa Chỉ Nhà Sản Xuất" class="form-control" name="address" cols="40"
										rows="4"></textarea>
								</div>
							</div>
							<div class="row mb-3">
								<label class="bg-white col-sm-2 col-form-label">Số Điện Thoại</label>
								<div class="col-sm-10">
									<input placeholder="Nhập Số Điện Thoại Nhà Sản Xuất" class="form-control" type="tel" name="phone">
								</div>
							</div>
							<div class="row mb-3">
								<label class="bg-white col-sm-2 col-form-label">Link Ảnh</label>
								<div class="col-sm-10">
									<input placeholder="Link Ảnh Đại Diện Của Nhà Sản Xuất" class="form-control" type="text" name="image">
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
	<script type="module" src="../assets/js/manufacturers.js"></script>
</body>

</html>