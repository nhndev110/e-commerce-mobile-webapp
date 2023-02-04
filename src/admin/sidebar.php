<ion-icon class="icon-shrink" name="chevron-back-outline"></ion-icon>

<a class="logo-sidebar" href="">
	<img class="image-logo" src="../assets/img/expert-team.gif" alt="logo-admin.png" title="logo">
	<h3 class="title-logo">Admin</h3>
</a>

<div id="sidebar">
	<nav class="nav-sidebar">
		<ul class="user-sidebar">
			<li class="item-category">
				<a href="" class="category-link">
					<ion-icon class="icon-category" name="person-circle-outline"></ion-icon>
					<span class="text-category">
						<?= $_SESSION['name'] ?>
					</span>
				</a>
			</li>
		</ul>
		<hr>
		<ul class="list-category">
			<li class="item-category" title="Trang Tổng Quan">
				<a href="../root/index.php" class="category-link">
					<ion-icon class="icon-category" name="home-outline"></ion-icon>
					<span class="text-category">Tổng quan</span>
				</a>
			</li>
			<li class="item-category">
				<a href="../manufacturers/index.php" class="category-link" id="manufacturers-btn">
					<ion-icon class="icon-category" name="people-outline"></ion-icon>
					<span class="text-category">Nhà sản xuất</span>
				</a>
			</li>
			<li class="item-category">
				<a href="../products/index.php" class="category-link" id="products-btn">
					<ion-icon class="icon-category" name="phone-portrait-outline"></ion-icon>
					<span class="text-category">Sản phẩm</span>
				</a>
			</li>
			<li class="item-category">
				<a href="../orders/index.php" class="category-link" id="orders-btn">
					<ion-icon class="icon-category" name="bag-handle-outline"></ion-icon>
					<span class="text-category">Đơn hàng</span>
				</a>
			</li>
			<li class="item-category">
				<a href="../config-products/index.php" class="category-link" id="orders-btn">
					<ion-icon class="icon-category" name="bag-handle-outline"></ion-icon>
					<span class="text-category">Cấu hình</span>
				</a>
			</li>
		</ul>
	</nav>
</div>