<?php require "../check-admin-login.php" ?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<?php require '../header-tag.php' ?>
	<link rel="stylesheet" href="../assets/css/manufacturers.css">
	<script defer type="module" src="../assets/js/app.js"></script>
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
					<div id="content-header">
						<h1>Nhà Sản Xuất</h1>
					</div>
					<div id="content-body">
						<section id="section-controller">
							<nav class="control-features">
								<ul>
									<li>
										<label title="Chọn Tất Cả" for="control-checkbox-id" class="control-checkbox">
											<input type="checkbox" name="" id="control-checkbox-id">
										</label>
									</li>
									<li>
										<button title="Thêm" class="control-btn btn-create">
											<ion-icon name="create-outline"></ion-icon>
										</button>
									</li>
									<li>
										<button title="Tải Lại" class="control-btn btn-reload">
											<ion-icon name="reload-outline"></ion-icon>
										</button>
									</li>
									<li>
										<button title="Xóa Mục Đã Chọn" class="control-btn btn-delete">
											<ion-icon name="trash-outline"></ion-icon>
										</button>
									</li>
								</ul>
							</nav>
							<div class="control-search">
								<input type="search" name="search" placeholder="Tìm kiếm">
							</div>
						</section>
						<section id="section-table">
							<table class="table">
								<thead>
									<tr class="table-bg-primary">
										<th>Chọn</th>
										<th>Mã</th>
										<th>Tên</th>
										<th>Địa chỉ</th>
										<th>SĐT</th>
										<th>Sửa</th>
										<th>Xóa</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</section>
					</div>
				</div>
			</main>
		</div>
		<?php include './form-insert.php' ?>
	</div>
</body>

<?php mysqli_close($connect) ?>

</html>