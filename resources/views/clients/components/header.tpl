{strip}
  <div class="header__top">
    <div class="container">
      <a
        class="header__item header__phone"
        href="tel:18002097"
        title="Hỗ trợ 1800.2097"
      >
        <i class='bx bxs-phone'></i>
        <span>Hỗ trợ 1800.2097</span>
      </a>
      <a
        class="header__item header__phone"
        href="/abort"
        title="Giới Thiệu"
      >
        <i class="fa-solid fa-phone"></i>
        <span>Giới thiệu</span>
      </a>
      <a
        class="header__item header__phone"
        href=""
        title=""
      >
        <i class="fa-brands fa-facebook"></i>
      </a>
      <a
        class="header__item header__phone"
        href=""
        title=""
      >
        <i class="fa-brands fa-twitter"></i>
      </a>
      <a
        class="header__item header__phone"
        href=""
        title=""
      >
        <i class="fa-brands fa-facebook"></i>
      </a>
    </div>
  </div>
  <hr>
  <div class="header__main">
    <div class="container">
      <a
        class="header__item header__logo"
        href="/"
        title="{$title}"
      >
        <img
          class="h-100"
          src="/resources/assets/client/images/logo-removebg.png"
          alt="{$title}"
        />
      </a>
      <form
        action=""
        method="get"
        class="header__search d-inline-block"
      >
        <i class='bx bx-search'></i>
        <input
          name="q"
          type="search"
          value="{nocache}{if !empty($smarty.get.q)}{$smarty.get.q}{/if}{/nocache}"
          placeholder="Tìm kiếm ..."
        />
        <button type="submit">
          Tìm kiếm
        </button>
      </form>
      <a
        class="header__item header__cart"
        href="/cart"
        title="Giỏ hàng"
      >
        <i class='bx bx-cart'></i>
        <span>Giỏ Hàng</span>
      </a>
      <a
        class="header__item header__user"
        href="/login"
        title="Tài khoản"
      >
        <i class='bx bx-user'></i>
        <span>Tài Khoản</span>
      </a>
    </div>
  </div>
  <hr>
  <div class="header__category">
    <div class="container">
      <nav class="navbar">
        <ul>
          <li class="navbar-item">
            <a
              href=""
              class="navbar-link"
            >Điện Thoại</a>
          </li>
          <li class="navbar-item">
            <a
              href=""
              class="navbar-link"
            >Laptop</a>
          </li>
          <li class="navbar-item">
            <a
              href=""
              class="navbar-link"
            >Máy Tính Bảng</a>
          </li>
          <li class="navbar-item">
            <a
              href=""
              class="navbar-link"
            >Phụ Kiện Di Động</a>
          </li>
          <li class="navbar-item">
            <a
              href=""
              class="navbar-link"
            >Đồng Hồ</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  {* <ul class="nav nav-right">
      {if empty($_SESSION['name']) || empty($_SESSION['id'])}
        <li class="section-guest">
          <button type="button" class="btn btn-light set-signin" data-bs-toggle="modal" data-bs-target="#modal-signin">
            Đăng Nhập
          </button>
          {include file="clients/signin.tpl"}
        </li>
        <li class="section-guest">
          <button type="button" class="btn btn-outline-light set-signup" data-bs-toggle="modal" data-bs-target="#modal-signup">Đăng Kí</button>
          {include file="clients/signup.tpl"}
        </li>
      {else}
        <li>
          <a href="./index.php?page=cart">
            <div class="container-nav-icon cart-header">
              <ion-icon class="nav-icon" name="bag-handle-outline"></ion-icon>
              <div id="products-in-cart">
                {(!empty($_SESSION['quantity_product_in_cart']))?$_SESSION['quantity_product_in_cart']:0}
              </div>
            </div>
          </a>
        </li>
        <li>
          <a href="./index.php?page=user" class="set-user" title="{$_SESSION['name']}">
            <div class="container-nav-icon">
              <ion-icon class="nav-icon" name="person-circle-outline"></ion-icon>
              <ion-icon name="caret-down-outline"></ion-icon>
            </div>
          </a>
          <ul class="subnav">
            <li><a href="./index.php?page=user">{$_SESSION['name']}</a></li>
            <hr>
            <li><a href="#!">item1</a></li>
            <li><a href="#!">item2</a></li>
            <hr>
            <li><a href="./app/client/signout.php">Đăng Xuất</a></li>
          </ul>
        </li>
      {/if}
    </ul> *}
{/strip}