<?php require "../check-admin-login.php" ?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php require '../../header-tag.php' ?>
	<link rel="stylesheet" href="../assets/css/style.css">
	<title>Xem Chi Tiết Sản Phẩm</title>
</head>

<body>
	<?php
	$order_id = $_GET['id'];

	require "../connect.php";
	$sql = "select * from order_product join products
	on order_product.product_id = products.id
	where order_id = '$order_id'";
	$arr_result = mysqli_query($connect, $sql);
	$sum = 0;
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
					<h1 class="title-content">Xem Chi Tiết Sản Phẩm</h1>
				</div>
				<div class="info-order">
					<div class="table-content">
						<table class="table table-bordered text-center align-middle overflow-hidden">
							<thead class="table-dark">
								<tr>
									<th>Ảnh</th>
									<th>Tên Sản Phẩm</th>
									<th>Giá</th>
									<th>Số Lượng</th>
									<th>Thành Tiền</th>
								</tr>
							</thead>
							<tbody class="bg-white">
								<?php foreach ($arr_result as $each) { ?>
									<tr>
										<td>
											<img height="100px" src="../products/photos/<?= $each['photo'] ?>" />
										</td>
										<td><?= $each['name'] ?></td>
										<td><?= $each['price'] ?>$</td>
										<td><?= $each['quantity'] ?></td>
										<td>
											<?php echo $sum_product = $each['price'] * $each['quantity'];
											$sum += $sum_product; ?>$
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<div style="font-size: 20px;" class="alert alert-secondary">
						Tổng số tiền cần thanh toán: <strong><?= $sum ?>$</strong>
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