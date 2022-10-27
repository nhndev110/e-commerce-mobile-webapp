<?php require "../check-admin-login.php" ?>
<!DOCTYPE html>
<html lang="vi">

<head>
	<?php require '../header-tag.php' ?>
	<link rel="stylesheet" href="../assets/css/manufacturers.css">
	<script defer type="module" src="../assets/js/index.js"></script>
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
										<div title="Tải Lại" class="control__icon">
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
								<tbody>
									<?php foreach ($result as $each) { ?>
									<tr>
										<td class="table__row--center">
											<label class="table__col flex-center" for="table-col-<?= $each['id'] ?>">
												<input type="checkbox" name="" class="table__col--checkbox" id="table-col-<?= $each['id'] ?>">
											</label>
										</td>
										<td class="table__row--center">
											<?= $each['id'] ?>
										</td>
										<td class="table__row--center">
											<?= $each['name'] ?>
										</td>
										<td class="vertical-align">
											<?= $each['address'] ?>
										</td>
										<td class="table__row--center">
											<?= $each['phone'] ?>
										</td>
										<td class="table__row--center">
											<a class="table__col flex-center" title="Chỉnh Sửa"
												href="../manufacturers/form_update.php?id=<?= $each['id'] ?>">
												<ion-icon name="color-wand"></ion-icon>
											</a>
										</td>
										<td class="table__row--center">
											<button class="table__col btn-delete flex-center" title="Xóa" data-type="table"
												data-id="<?= $each['id'] ?>">
												<ion-icon name="trash-outline"></ion-icon>
											</button>
										</td>
									</tr>
									<?php } ?>
								</tbody>
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