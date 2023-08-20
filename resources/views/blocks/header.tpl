{strip}
  {nocache}
  {$title = 'Điện thoại, laptop, tablet, phụ kiện chính hãng | NHNdev110 Store'}
  <header class="header">
    <section class="header__top">
      <div class="container">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="tel:18002097" title="Hỗ trợ 1800.2097">
              Hỗ Trợ 1800.2097
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/abort" title="Giới Thiệu">
              Giới Thiệu
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/check-orders" title="Kiểm Tra Đơn Hàng">
              Kiểm Tra Đơn Hàng
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" title="Facebook">
              <i class="bi bi-facebook"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" title="Tiktok">
              <i class="bi bi-tiktok"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" title="Instagram">
              <i class="bi bi-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section class="header__main">
      <div class="container">
        <nav class="nav">
          <a class="nav__brand" href="/" title="{$title}">
            <img class="h-100" src={asset("assets/images/logo.png")} alt="{$title}" />
          </a>
          <form action="" method="get" class="nav__search">
            <i class="mr-4 icon-search bi bi-search"></i>
            <input autocomplete="off" class="input-search" name="q" type="search" {nocache}{if !empty($smarty.get.q)}value="{$smarty.get.q}" {/if}{/nocache} placeholder="Tìm kiếm ..." />
            <button class="btn-search" type="submit">Tìm kiếm</button>
          </form>
          <a class="nav__user" href="/login" title="Tài khoản">
            <i class="icon-user mr-4 bi bi-person-circle"></i>
            <span>Tài Khoản</span>
          </a>
          <a class="nav__cart" href="/cart" title="Giỏ hàng">
            <i class="icon-cart mr-4 bi bi-cart2"></i>
          </a>
        </nav>
      </div>
    </section>
    <div class="container">
      <hr>
    </div>
    <section class="header__category">
      <div class="container">
        <ul class="nav">
          <li class="nav-item">
            <a href="" class="nav-link">Điện Thoại</a>
            <ul class="subnav">
              <li class="subnav-item subnav-item-1">
                <h4 class="mb-16">Hãng Sản Xuất</h4>
                <ul class="row">
                  <li class="col col-3"><a title="Apple (iPhone)" href="">Apple (iPhone)</a></li>
                  <li class="col col-3"><a title="Sam Sung" href="">Sam Sung</a></li>
                  <li class="col col-3"><a title="Xiaomi" href="">Xiaomi</a></li>
                  <li class="col col-3"><a title="Vivo" href="">Vivo</a></li>
                  <li class="col col-3"><a title="realme" href="">realme</a></li>
                  <li class="col col-3"><a title="Asus" href="">Asus</a></li>
                  <li class="col col-3"><a title="Oppo" href="">Oppo</a></li>
                  <li class="col col-3"><a title="Honor" href="">Honor</a></li>
                  <li class="col col-3"><a title="Nokia" href="">Nokia</a></li>
                </ul>
              </li>
              <li class="subnav-item subnav-item-2">
                <h4 class="mb-16">Mức Giá</h4>
                <ul>
                  <li><a href="">Duoi 2 trieu</a></li>
                  <li><a href="">Tu 2 - 4 trieu</a></li>
                  <li><a href="">Tu 4 - 8 trieu</a></li>
                  <li><a href="">Tu 8 - 13 trieu</a></li>
                  <li><a href="">Tren 13 trieu</a></li>
                </ul>
              </li>
              <li class="subnav-item subnav-item-3">
                <h4 class="mb-16">Sản Phẩm Bán Chạy</h4>
                <ul>
                  <li>
                    <a href="">
                      <div>
                        <img src="https://images.fpt.shop/unsafe/fit-in/80x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/7/5/638241722578403987_samsung-galaxy-a34-dd.jpg" alt="">
                      </div>
                      <div>
                        <p>Samsung Galaxy A34 5G</p>
                        <span>7.490.000 &dstrok;</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <div>
                        <img src="https://images.fpt.shop/unsafe/fit-in/80x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/7/5/638241722578403987_samsung-galaxy-a34-dd.jpg" alt="">
                      </div>
                      <div>
                        <p>Samsung Galaxy A34 5G</p>
                        <span>7.490.000 &dstrok;</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="subnav-item subnav-item-4">
                <img src="https://images.fpt.shop/unsafe/fit-in/248x248/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/7/19/638253601156522464_H4_248x248.png" alt="">
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">Laptop</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">Máy Tính Bảng</a>
            <ul class="subnav">
              <li class="nav-item">
                <a class="nav-link" href="">Iphone 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Sam Sung</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Xiaomi</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">Phụ Kiện Di Động</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">Đồng Hồ</a>
          </li>
        </ul>
      </div>
    </section>
  </header>
  {/nocache}
{/strip}