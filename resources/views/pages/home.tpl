{strip}
  {nocache}
  {extends file="layouts/client.tpl"}
  {block name=title}Điện thoại, laptop, tablet, phụ kiện chính hãng{/block}
  {block name=head_tags}
    <link rel="stylesheet" href={asset("assets/css/home.min.css")} />
  {/block}
  {block name=main_content}
    <h1 hidden>Điện thoại, laptop, tablet, phụ kiện chính hãng | NHNdev110 Store</h1>

    <!-- Swiper -->
    <section class="slider mb-4">
      <div class="swiper swiper-2">
        <div class="swiper-wrapper">
          {for $i=1 to 10}
            <div class="swiper-slide">
              <img src="https://swiperjs.com/demos/images/nature-{$i}.jpg" />
            </div>
          {/for}
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <div thumbsSlider="" class="swiper swiper-1">
        <div class="swiper-wrapper">
          {for $i=1 to 10}
            <div class="swiper-slide">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. {$i}</p>
            </div>
          {/for}
        </div>
      </div>
    </section>

    <!-- Initialize Swiper -->
    <script>
      const swiper = new Swiper(".swiper-1", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
      });


      swiper.on('click', function() {
        this.slideTo(this.clickedIndex - 1, 500)
      })


      const swiper2 = new Swiper(".swiper-2", {
        spaceBetween: 10,
        centeredSlides: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        thumbs: {
          swiper: swiper,
        },
      });

      swiper2.on('slideChange', function() {
        swiper.slideTo(this.activeIndex - 1, 500)
      })
    </script>

    <!--  -->
    <section class="highlight-phones">
      <h2>ĐIỆN THOẠI NỔI BẬT NHẤT</h2>
      <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-2">
        <div class="col">
          <div class="card h-100 bg-white">
            <img class="bd-placeholder-img card-img-top p-4" src="https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/5/22/638203653824945690_xiaomi-redmi-note-12-pro-4g-dd-bh.jpg" alt="">
            <div class="card-body p-2">
              <h3 class="card-title mb-3 display-5">
                <a class="d-block" href="/">
                  iPhone 14 Pro Max 128GB | Chính hãng VN/A
                </a>
              </h3>
              <div class="d-flex flex-row flex-wrap mb-3">
                <span class="card-text fs-6 fw-semibold text-nowrap me-2">23.790.000</span>
                <small class="card-text fs-6 fw-semibold text-nowrap text-danger">
                  <s>23.790.000</s>
                </small>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <button class="w-75 btn btn-sm btn-primary">Mua Ngay</button>
                <button class="btn btn-sm btn-danger">
                  <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <circle cx="10.5" cy="19.5" r="1.5"></circle>
                    <circle cx="17.5" cy="19.5" r="1.5"></circle>
                    <path d="M13 13h2v-2.99h2.99v-2H15V5.03h-2v2.98h-2.99v2H13V13z"></path>
                    <path d="M10 17h8a1 1 0 0 0 .93-.64L21.76 9h-2.14l-2.31 6h-6.64L6.18 4.23A2 2 0 0 0 4.33 3H2v2h2.33l4.75 11.38A1 1 0 0 0 10 17z"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-white">
            <img class="bd-placeholder-img card-img-top p-4" src="https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/5/22/638203653824945690_xiaomi-redmi-note-12-pro-4g-dd-bh.jpg" alt="">
            <div class="card-body p-2">
              <h3 class="card-title mb-3 display-5">
                <a class="d-block" href="/">
                  iPhone 14 Pro Max 128GB | Chính hãng VN/A
                </a>
              </h3>
              <div class="d-flex flex-row flex-wrap mb-3">
                <span class="card-text fs-6 fw-semibold text-nowrap me-2">23.790.000</span>
                <small class="card-text fs-6 fw-semibold text-nowrap text-danger">
                  <s>23.790.000</s>
                </small>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <button class="w-75 btn btn-sm btn-primary">Mua Ngay</button>
                <button class="btn btn-sm btn-danger">
                  <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <circle cx="10.5" cy="19.5" r="1.5"></circle>
                    <circle cx="17.5" cy="19.5" r="1.5"></circle>
                    <path d="M13 13h2v-2.99h2.99v-2H15V5.03h-2v2.98h-2.99v2H13V13z"></path>
                    <path d="M10 17h8a1 1 0 0 0 .93-.64L21.76 9h-2.14l-2.31 6h-6.64L6.18 4.23A2 2 0 0 0 4.33 3H2v2h2.33l4.75 11.38A1 1 0 0 0 10 17z"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-white">
            <img class="bd-placeholder-img card-img-top p-4" src="https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/5/22/638203653824945690_xiaomi-redmi-note-12-pro-4g-dd-bh.jpg" alt="">
            <div class="card-body p-2">
              <h3 class="card-title mb-3 display-5">
                <a class="d-block" href="/">
                  iPhone 14 Pro Max 128GB | Chính hãng VN/A
                </a>
              </h3>
              <div class="d-flex flex-row flex-wrap mb-3">
                <span class="card-text fs-6 fw-semibold text-nowrap me-2">23.790.000</span>
                <small class="card-text fs-6 fw-semibold text-nowrap text-danger">
                  <s>23.790.000</s>
                </small>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <button class="w-75 btn btn-sm btn-primary">Mua Ngay</button>
                <button class="btn btn-sm btn-danger">
                  <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <circle cx="10.5" cy="19.5" r="1.5"></circle>
                    <circle cx="17.5" cy="19.5" r="1.5"></circle>
                    <path d="M13 13h2v-2.99h2.99v-2H15V5.03h-2v2.98h-2.99v2H13V13z"></path>
                    <path d="M10 17h8a1 1 0 0 0 .93-.64L21.76 9h-2.14l-2.31 6h-6.64L6.18 4.23A2 2 0 0 0 4.33 3H2v2h2.33l4.75 11.38A1 1 0 0 0 10 17z"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-white">
            <img class="bd-placeholder-img card-img-top p-4" src="https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/5/22/638203653824945690_xiaomi-redmi-note-12-pro-4g-dd-bh.jpg" alt="">
            <div class="card-body p-2">
              <h3 class="card-title mb-3 display-5">
                <a class="d-block" href="/">
                  iPhone 14 Pro Max 128GB | Chính hãng VN/A
                </a>
              </h3>
              <div class="d-flex flex-row flex-wrap mb-3">
                <span class="card-text fs-6 fw-semibold text-nowrap me-2">23.790.000</span>
                <small class="card-text fs-6 fw-semibold text-nowrap text-danger">
                  <s>23.790.000</s>
                </small>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <button class="w-75 btn btn-sm btn-primary">Mua Ngay</button>
                <button class="btn btn-sm btn-danger">
                  <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <circle cx="10.5" cy="19.5" r="1.5"></circle>
                    <circle cx="17.5" cy="19.5" r="1.5"></circle>
                    <path d="M13 13h2v-2.99h2.99v-2H15V5.03h-2v2.98h-2.99v2H13V13z"></path>
                    <path d="M10 17h8a1 1 0 0 0 .93-.64L21.76 9h-2.14l-2.31 6h-6.64L6.18 4.23A2 2 0 0 0 4.33 3H2v2h2.33l4.75 11.38A1 1 0 0 0 10 17z"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-white">
            <img class="bd-placeholder-img card-img-top p-4" src="https://images.fpt.shop/unsafe/fit-in/214x214/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2023/5/22/638203653824945690_xiaomi-redmi-note-12-pro-4g-dd-bh.jpg" alt="">
            <div class="card-body p-2">
              <h3 class="card-title mb-3 display-5">
                <a class="d-block" href="/">
                  iPhone 14 Pro Max 128GB | Chính hãng VN/A
                </a>
              </h3>
              <div class="d-flex flex-row flex-wrap mb-3">
                <span class="card-text fs-6 fw-semibold text-nowrap me-2">23.790.000</span>
                <small class="card-text fs-6 fw-semibold text-nowrap text-danger">
                  <s>23.790.000</s>
                </small>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <button class="w-75 btn btn-sm btn-primary">Mua Ngay</button>
                <button class="btn btn-sm btn-danger">
                  <svg style="fill: white;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <circle cx="10.5" cy="19.5" r="1.5"></circle>
                    <circle cx="17.5" cy="19.5" r="1.5"></circle>
                    <path d="M13 13h2v-2.99h2.99v-2H15V5.03h-2v2.98h-2.99v2H13V13z"></path>
                    <path d="M10 17h8a1 1 0 0 0 .93-.64L21.76 9h-2.14l-2.31 6h-6.64L6.18 4.23A2 2 0 0 0 4.33 3H2v2h2.33l4.75 11.38A1 1 0 0 0 10 17z"></path>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  {/block}
  {/nocache}
{/strip}