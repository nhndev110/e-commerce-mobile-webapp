<?php require_once "../check-admin-login.php" ?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<?php require_once '../header-tag.php' ?>
	<link rel="stylesheet" href="../assets/css/manufacturers.css?<?= time() ?>">
	<script defer type="module" src="../assets/js/app.js?<?= time() ?>"></script>
	<script defer type="module" src="../assets/js/manufacturers.js?<?= time() ?>"></script>
	<title>Giao Diện Admin</title>
</head>

<body>
	<div id="wrapper">
		<div class="sidebar-offcanvas">
			<?php require_once '../sidebar.php' ?>
		</div>
		<div class="page-body-wrapper">
			<?php require_once '../header.php' ?>
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
		<?php require_once './form-insert.php' ?>
	</div>
</body>

</html>