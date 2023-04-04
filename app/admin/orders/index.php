<?php require "../check-admin-login.php" ?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php require '../../header_tag.php' ?>
	<link rel="stylesheet" href="../assets/css/style.css">
	<title>Giao Diện Admin</title>
</head>

<body>
	<?php
	require "../connect.php";
	$sql = "select
	customers.name,
	customers.phone_number,
	customers.address,
	orders.*
	from orders join customers on orders.customer_id = customers.id";
	$result = mysqli_query($connect, $sql);
	?>

	<div id="wrapper">
		<div class="sidebar-offcanvas">
			<?php require '../sidebar.php' ?>
		</div>
		<div class="page-body-wrapper">
			<?php require '../header.php' ?>
			<div id="content" class="container-fluid">
				<div class="header-content">
					<h1 class="title-content">Quản Lý Tất Cả Nhà Sản Xuất</h1>
				</div>
				<div id="main-content">
					<div class="table-content">
						<table class="table table-bordered text-center align-middle overflow-hidden">
							<thead class="table-dark">
								<tr class="align-middle">
									<th>Mã</th>
									<th>Thời Gian Đặt</th>
									<th>Thông Tin Người Nhân</th>
									<th>Thông Tin Người Đặt</th>
									<th>Trạng Thái</th>
									<th>Tổng Tiền</th>
									<th>Xem</th>
									<th>Xét Duyệt</th>
								</tr>
							</thead>
							<tbody class="bg-white">
								<?php foreach ($result as $each) { ?>
									<tr>
										<td><?= $each['id'] ?></td>
										<td><?= $each['created_at'] ?></td>
										<td>
											<?= $each['name_receiver'] ?><br>
											<?= $each['phone_receiver'] ?><br>
											<?= $each['address_receiver'] ?>
										</td>
										<td>
											<?= $each['name'] ?><br>
											<?= $each['phone_number'] ?><br>
											<?= $each['address'] ?>
										</td>
										<td class="order-status">
											<kbd class="status-current">
												<?php switch ($each['status']) {
													case 1:
														echo "Duyệt";
														break;
													case 2:
														echo "Hủy";
														break;
													case 0:
														echo "Chờ";
														break;
													default:
														echo "Lỗi";
												} ?>
											</kbd>
										</td>
										<td><?= $each['total_price'] ?>$</td>
										<td>
											<a href="../orders/order-detail.php?id=<?= $each['id'] ?>" class="btn btn-outline-dark btn-sm" data-id="">Xem</a>
										</td>
										<td>
											<button class="btn-status btn btn-outline-primary btn-sm d-block mx-auto mb-2" data-status="1" data-id="<?= $each['id'] ?>">Duyệt</button>
											<button class="btn-status btn btn-outline-danger btn-sm d-block mx-auto" data-status="2" data-id="<?= $each['id'] ?>">Hủy</button>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require '../../footer-tag.php' ?>
	<script type="module" src="../assets/js/index.js"></script>
	<script type="module" src="../assets/js/orders.js"></script>
</body>

<?php mysqli_close($connect) ?>

</html>