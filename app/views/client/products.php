<?php
$products_arr = $this->sharedData()->get('product_list');
$manufacturers_arr = $this->sharedData()->get('manufacturer_list');
?>
<h1 hidden>nhndev110 - Tất cả sản phẩm</h1>
<div id="main-content">
  <div id="sidebar-filter">
    <ul>
      <li>
        <h3>Hãng Sản Xuất</h3>
        <ul>
          <li>
            <input type="checkbox" id="cb-all">
            <label for="cb-all">Tất Cả</label>
          </li>
          <?php foreach ($manufacturers_arr as $each_manufacturer) { ?>
            <?php $tmp_manufacturer_name = $each_manufacturer['name'] ?>
            <li>
              <input type="checkbox" id="cb-<?= $tmp_manufacturer_name ?>">
              <label for="cb-<?= $tmp_manufacturer_name ?>"><?= $tmp_manufacturer_name ?></label>
            </li>
          <?php } ?>
        </ul>
      </li>
    </ul>
  </div>
  <div id="block-product-list">
    <h2 id="title-products">TẤT CẢ SẢN PHẨM</h2>
    <div id="product-list">
      <?php foreach ($products_arr as $each_product) { ?>
        <?php $tmp_product_name = $each_product['name'] ?>
        <div class="product-info">
          <a class="product__link" href="./index.php?page=product-detail&id=<?= $each_product['id'] ?>">
            <div class="product__image">
              <img class="product__img" src="./admin/products/photos/<?= $each_product['photo'] ?>" alt="<?= $tmp_product_name ?>" title="<?= $tmp_product_name ?>">
            </div>
            <div class="product__body">
              <h3 class="product__name" title="<?= $tmp_product_name ?>">
                <?= $tmp_product_name ?>
              </h3>
              <div class="product__badge">
                <p class="product__more-info__item">6.7 inches</p>
                <p class="product__more-info__item">6 GB</p>
                <p class="product__more-info__item">128 GB</p>
              </div>
              <div class="product__box-price">
                <p class="product__price--show">
                  <?= number_format($each_product['price'], 0, ",", ".") ?>&nbsp;₫
                </p>
                <p class="product__price--through">
                  24.990.000&nbsp;₫
                </p>
              </div>
              <div class="product__promotions">
                <span>[HOT] Thu cũ lên đời giá cao - Thủ tục nhanh - Trợ giá lên tới 1.000.000đ</span>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
