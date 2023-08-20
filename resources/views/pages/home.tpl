{strip}
  {nocache}
  {extends file="layouts/client.tpl"}
  {block name=title}Điện thoại, laptop, tablet, phụ kiện chính hãng{/block}
  {block name=head_tags}
    <link rel="stylesheet" href={asset("assets/css/home.css")} />
  {/block}
  {block name=main_content}
    <h1 hidden>Điện thoại, laptop, tablet, phụ kiện chính hãng | NHNdev110 Store</h1>
    <!-- Swiper -->
    <section class="slider">
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
      var swiper = new Swiper(".swiper-1", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
      });

      var swiper2 = new Swiper(".swiper-2", {
        spaceBetween: 10,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
    </script>
  {/block}
  {/nocache}
{/strip}