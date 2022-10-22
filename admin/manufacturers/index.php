<?php require "../check-admin-login.php" ?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<?php require '../header-tag.php' ?>
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/manufacturers.css">
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
											<ion-icon name="add-circle"></ion-icon>
										</div>
									</li>
									<li>
										<div title="Cập Nhật" class="control__icon">
											<ion-icon name="sync-circle"></ion-icon>
										</div>
									</li>
									<li>
										<div title="Xóa Mục Đã Chọn" class="control__icon">
											<ion-icon name="trash-bin"></ion-icon>
										</div>
									</li>
								</ul>
							</nav>
							<div class="control__search">
								<label for="">Tìm kiếm:</label>
								<input type="search" name="search">
							</div>
						</div>
						<div class="table-content">
							<table class="table">
								<thead>
									<tr class="row-bg-black">
										<th>#</th>
										<th>Mã</th>
										<th>Tên</th>
										<th>Địa chỉ</th>
										<th>SĐT</th>
										<th>Sửa</th>
										<th>Xóa</th>
									</tr>
								</thead>
								<?php foreach ($result as $each) { ?>
									<tr>
										<td class="col-center">
											<label class="table-col" for="table-col-<?= $each['id'] ?>">
												<input type="checkbox" name="" id="table-col-<?= $each['id'] ?>">
											</label>
										</td>
										<td class="col-center">
											<?= $each['id'] ?>
										</td>
										<td class="col-center">
											<?= $each['name'] ?>
										</td>
										<td class="vertical-align">
											<?= $each['address'] ?>
										</td>
										<td class="col-center">
											<?= $each['phone'] ?>
										</td>
										<td class="col-center">
											<a title="Chỉnh Sửa" href="../manufacturers/form_update.php?id=<?= $each['id'] ?>">
												<ion-icon name="create-outline"></ion-icon>
											</a>
										</td>
										<td class="col-center">
											<button title="Xóa" data-style="delete-table" data-id="<?= $each['id'] ?>">
												<ion-icon name="trash-outline"></ion-icon>
											</button>
										</td>
									</tr>
								<?php } ?>
							</table>
						</div>
					</section>
				</div>
			</main>
		</div>
	</div>

	<script type="module" src="../assets/js/index.js"></script>
	<script type="module" src="../assets/js/manufacturers.js"></script>
</body>

<?php mysqli_close($connect) ?>

</html>