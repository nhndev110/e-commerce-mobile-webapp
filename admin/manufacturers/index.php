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
					<h1 id="title">Nhà Sản Xuất</h1>
					<div class="control">
						<nav class="control__link">
							<ul>
								<li>
									<a title="Thêm" href="../manufacturers/form_insert.php" class="">Thêm</a>
								</li>
								<li>
									<a title="Thêm" href="../manufacturers/form_insert.php" class="">Thêm</a>
								</li>
								<li>
									<a title="Thêm" href="../manufacturers/form_insert.php" class="">Thêm</a>
								</li>
							</ul>
						</nav>
						<div class="control__search">
							<label for="">Tìm kiếm:</label>
							<input type="search">
						</div>
					</div>
					<div id="content">
						<div class="table-content">
							<table class="table">
								<thead>
									<tr>
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
											<td><?= $each['id'] ?></td>
											<td><?= $each['name'] ?></td>
											<td><?= $each['address'] ?></td>
											<td><?= $each['phone'] ?></td>
											<td>
												<a title="Chỉnh Sửa" href="../manufacturers/form_update.php?id=<?= $each['id'] ?>">
													<ion-icon name="create-outline"></ion-icon>
												</a>
											</td>
											<td>
												<button title="Xóa" data-style="delete-table" data-id="<?= $each['id'] ?>">
													<ion-icon name="trash-outline"></ion-icon>
												</button>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</main>
		</div>
	</div>

	<script type="module" src="../assets/js/index.js"></script>
	<script type="module" src="../assets/js/manufacturers.js"></script>
</body>

<?php mysqli_close($connect) ?>

</html>