<ion-icon class="icon-shrink" name="chevron-back-outline"></ion-icon>

<a class="logo-sidebar" href="">
    <img class="image-logo" src="../assets/images/logo-admin.png" alt="logo-admin.png" title="logo">
    <h3 class="title-logo">Supper Admin</h3>
</a>

<div id="sidebar">
    <nav class="nav-sidebar">
        <ul class="list-category">
            <li class="item-category" title="Trang Tổng Quan">
                <a href="../root/index.php" class="category-link">
                    <ion-icon class="icon-category" name="home-outline"></ion-icon>
                    <span class="text-category">Trang tổng quan</span>
                </a>
            </li>
            <li class="item-category">
                <a href="../manufacturers/index.php" class="category-link" id="manufacturers-btn">
                    <ion-icon class="icon-category" name="people-outline"></ion-icon>
                    <span class="text-category">Quản lí nhà sản xuất</span>
                </a>
            </li>
            <li class="item-category">
                <a href="../products/index.php" class="category-link" id="products-btn">
                    <ion-icon class="icon-category" name="phone-portrait-outline"></ion-icon>
                    <span class="text-category">Quản lí sản phẩm</span>
                </a>
            </li>
            <li class="item-category">
                <a href="../orders/index.php" class="category-link" id="orders-btn">
                    <ion-icon class="icon-category" name="bag-handle-outline"></ion-icon>
                    <span class="text-category">Quản lí đơn hàng</span>
                </a>
            </li>
        </ul>

        <ul class="user-sidebar">
            <li class="item-category">
                <a href="" class="category-link">
                    <ion-icon class="icon-category" name="person-circle-outline"></ion-icon>
                    <span class="text-category"><?= $_SESSION['name'] ?></span>
                </a>
            </li>
            <li class="item-category">
                <a href="" class="category-link">
                    <ion-icon class="icon-category" name="settings-outline"></ion-icon>
                    <span class="text-category">Settings</span>
                </a>
            </li>
        </ul>
    </nav>
</div>