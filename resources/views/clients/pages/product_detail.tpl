{strip}
  {$product_name = $data['name']}
  {extends file="../layouts/client.tpl"}
  {block name=title}{$product_name}{/block}
  {block name=head_tags}
    <link
      rel="stylesheet"
      href="/resources/assets/client/css/product_detail.css?{time()}"
    >
  {/block}
  {block name=main_content}
    <section class="block-detail-product">
      <div class="container">
        <div class="box-detail-product row">
          <div class="box-detail-product__box-left col col-2">
            <div class="box-gallery">
              <div class="gallery-product-detail">
                <div class="img-content">
                  <img
                    src="/resources/assets/client/image_products/{$data['image']}"
                    alt="{$product_name}"
                    title="{$product_name}"
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="box-detail-product__box-right col col-2">
            <div class="box-header">
              <div class="box-product-name">
                <h1>{$product_name}</h1>
              </div>
            </div>
            <hr>
            <div class="block-box-price">
              <div class="box-info__box-price">
                <p class="product__price--show">
                  {number_format($data['price'], 0, ",", ".")}&nbsp;₫
                </p>
                <p class="product__price--through">
                  {number_format($data['price'], 0, ",", ".")}&nbsp;₫
                </p>
              </div>
            </div>
            <div class="box-linked">
              <h3 class="mb-8">Chọn dung lượng:</h3>
              <div class="list-linked row">
                {for $i = 1 to 4 step 1}
                  <div class="col col-4 mb-8">
                    <label
                      for="configuration-{$i}"
                      class="item-linked"
                    >
                      <div>
                        <input
                          type="radio"
                          name="select-configuration"
                          id="configuration-{$i}"
                        >
                        <strong>8GB - 256GB</strong>
                      </div>
                      <span>
                        {number_format($data['price'], 0, ",", ".")}&nbsp;₫
                      </span>
                    </label>
                  </div>
                {/for}
              </div>
            </div>
            <div class="box-color">
              <h3 class="mb-8">Chọn màu:</h3>
              <div class="list-color row">
                {for $i = 1 to 4 step 1}
                  <div class="col col-5 mb-8">
                    <label
                      for="color-{$i}"
                      class="item-color"
                    >
                      <input
                        type="radio"
                        name="select-color"
                        id="color-{$i}"
                      >
                      <span>
                        <strong>Hồng</strong>
                      </span>
                    </label>
                  </div>
                {/for}
              </div>
            </div>
            <div class="box-btn">
              <button
                class="btn btn-dark"
                type="button"
              >
                Mua Ngay
              </button>
              <button
                class="btn-add-to-cart btn btn-dark"
                data-id="{$data['id']}"
                type="button"
              >
                Thêm Giỏ Hàng
              </button>
            </div>
          </div>
        </div>
        <section class="block-info-product">
          <div class="container">
            <div class="row">
              <div class="box-description-product col col-2">
                <p class="mt-8">
                  {nl2br($data['description'])}
                </p>
              </div>
              <div class="box-configuration-product col col-2">
                <table>
                  <thead>
                    <th></th>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
  {/block}
{/strip}