<?php
session_start();

if (isset($_SESSION['cart'])) {
	$cart = $_SESSION['cart'];
	$sum = 0;
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
	<title>nhndev110 - Giỏ Hàng</title>
	<?php require './header-tag.php' ?>
	<link rel="stylesheet" href="./assets/css/style.css">
	<link rel="stylesheet" href="./assets/css/view-cart.css">
</head>

<body>
	<div id="wrapper">
		<?php require "./header.php" ?>
		<div id="content" class="container">
			<h1 hidden>nhndev110 - Giỏ Hàng</h1>
			<div id="info-cart">
				<?php if (isset($_SESSION['cart']) && !empty($_SESSION['quantity_product_in_cart'])) { ?>
					<h2>Thanh Toán Giỏ Hàng</h2>
					<table class="table table-striped table-bordered table-hover text-center" width="100%" style="border-radius: 8px; overflow: hidden;">
						<thead class="table-dark">
							<tr>
								<th>Ảnh</th>
								<th>Tên Sản Phẩm</th>
								<th>Giá</th>
								<th>Số Lượng</th>
								<th>Thành Tiền</th>
								<th>Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($cart as $id => $each) { ?>
								<tr>
									<td><img height="100px" src="./admin/products/photos/<?php echo $each['photo'] ?>" alt=""></td>
									<td><?php echo $each['name'] ?></td>
									<td><kbd><span><?php echo $each['price'] ?></span>$</kbd></td>
									<td>
										<button data-id="<?php echo $id ?>" data-type="decre" class="btn btn-dark btn-sm btn-update-quantity">-</button>
										<span class="result-quantity"><?php echo $each['quantity'] ?></span>
										<button data-id="<?php echo $id ?>" data-type="incre" class="btn btn-dark btn-sm btn-update-quantity">+</button>
									</td>
									<?php
									$tmp = $each['quantity'] * $each['price'];
									$sum += $tmp;
									?>
									<td><kbd><span class="product-price"><?php echo $tmp ?></span>$</kbd></td>
									<td>
										<button type="button" class="btn btn-dark btn-sm btn-delete-product" data-id="<?= $id ?>">Xóa</button>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
					<div class="order-form">
						<div style="font-size: 20px;" class="alert alert-secondary">
							<strong>Tổng số tiền cần thanh toán: </strong><kbd><span id="pay-price"><?php echo $sum ?></span>$</kbd>
						</div>

						<?php if (isset($_SESSION['name']) && isset($_SESSION['id'])) { ?>
							<?php
							$id = $_SESSION['id'];
							require "./admin/connect.php";
							$sql = "select * from customers
							where id = '$id'";
							$arr_result = mysqli_query($connect, $sql);
							$result = mysqli_fetch_array($arr_result);
							?>
							<div class="pay-form">
								<form action="process-checkout.php" method="post">
									<div>
										<label>Tên người nhận</label>
										<input type="text" name="name_receiver" value="<?php echo $result['name'] ?>">
									</div>
									<div>
										<label>Số điện thoại người nhận</label>
										<input type="tel" name="phone_receiver" value="<?php echo $result['phone_number'] ?>">
									</div>
									<div>
										<label>Địa chỉ người nhận</label>
										<input type="text" name="address_receiver" value="<?php echo $result['address'] ?>">
									</div>
									<button type="submit" class="btn btn-dark">Đặt Hàng</button>
								</form>
							</div>
						<?php } else { ?>
							<div>
								<h4 style="color: green;">Vui lòng đăng nhập để thanh toán đơn hàng</h4>
								<a href="./signin.php">Đăng Nhập</a>
							</div>
						<?php } ?>
					</div>
			</div>
		<?php } else { ?>
			<div id="empty-cart">
				<div style="text-align: center; color: red;">
					<h3>Danh sách giỏ hàng đang trống</h3>
					<a href="./products.php">Mua sản phẩm</a>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
	<?php require "./footer.php" ?>
	</div>

	<?php require './footer-tag.php' ?>
	<script src="./assets/js/view-cart.js"></script>
</body>

</html>