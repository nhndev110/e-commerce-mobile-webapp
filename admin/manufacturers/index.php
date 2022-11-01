<?php require "../check-admin-login.php" ?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<?php require '../header-tag.php' ?>
	<link rel="stylesheet" href="../assets/css/manufacturers.css">
	<script defer type="module" src="../assets/js/App.js"></script>
	<script defer type="module" src="../assets/js/manufacturers.js"></script>
	<title>Giao Diện Admin</title>
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
			<main id="main">
				<div class="container">
					<div class="content-header">
						<h1 id="title">Nhà Sản Xuất</h1>
					</div>
					<section id="content">
						<div class="control">
							<nav class="control__feature">
								<ul>
									<li>
										<label title="Chọn Tất Cả" for="control__checkbox--all" class="control__checkbox">
											<input type="checkbox" name="" id="control__checkbox--all">
										</label>
									</li>
									<li>
										<div title="Thêm" class="control__icon">
											<ion-icon name="create-outline"></ion-icon>
										</div>
									</li>
									<li>
										<div title="Tải Lại" class="control__icon btn-reload" data-type="control">
											<ion-icon name="reload-outline"></ion-icon>
										</div>
									</li>
									<li>
										<div title="Xóa Mục Đã Chọn" class="control__icon btn-delete" data-type="control">
											<ion-icon name="trash-outline"></ion-icon>
										</div>
									</li>
								</ul>
							</nav>
							<div class="control__search">
								<input type="search" name="search" placeholder="Tìm kiếm">
							</div>
						</div>
						<div class="table-content">
							<table class="table">
								<thead>
									<tr class="table__thead--bg-primary">
										<th>Chọn</th>
										<th>Mã</th>
										<th>Tên</th>
										<th>Địa chỉ</th>
										<th>SĐT</th>
										<th>Sửa</th>
										<th>Xóa</th>
									</tr>
								</thead>
							</table>
						</div>
					</section>
				</div>
			</main>
		</div>
	</div>
</body>

<?php mysqli_close($connect) ?>

</html>