{strip}
  {nocache}
  {extends file="layouts/client.tpl"}
  {block name=title}Tất cả sản phẩm{/block}
  {block name=head_tags}
    <link rel="stylesheet" href={asset("assets/css/products.css")} />
  {/block}
  {block name=sidebar}
    <ul>
      <li>
        <h3>Hãng Sản Xuất</h3>
        <ul>
          <li>
            <input type="checkbox" id="cb-all">
            <label for="cb-all">Tất Cả</label>
          </li>
          {if !empty($manufacturers_list)}
            {foreach from=$manufacturers_list item=$manufacturer}
              {$manufacturer_name = $manufacturer->getName()}
              <li>
                <input type="checkbox" id="cb-{$manufacturer_name}">
                <label for="cb-{$manufacturer_name}">{$manufacturer_name}</label>
              </li>
            {/foreach}
          {/if}
        </ul>
      </li>
    </ul>
  {/block}
  {block name=main_content}
    {$str_vietnamese = "ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễếệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ"}
    <h1 hidden>Tất cả sản phẩm | NHNdev110 Store</h1>
    <div id="block-product-list">
      <h2 id="title-products">TẤT CẢ SẢN PHẨM</h2>
      <div id="product-list">
        {if !empty($products_list)}
          {foreach from=$products_list item=$product}
            {$product_name = $product->getName()}
            <article class="product-info">
              <a class="product__link" title="{$product_name}" href="/products/{$product_name|regex_replace:"/[^-\w\d{$str_vietnamese}]+/" :"-"}-{$product->getId()}">
                <div class="product__image">
                  <img class="product__img" src={asset("assets/images/products/{$product->getImage()}")} alt="{$product_name}" title="{$product_name}" />
                </div>
                <div class="product__body">
                  <h3 class="product__name">
                    {$product_name}
                  </h3>
                  <div class="product__badge">
                    <p class="product__more-info__item">6.7 inches</p>
                    <p class="product__more-info__item">6 GB</p>
                    <p class="product__more-info__item">128 GB</p>
                  </div>
                  <div class="product__box-price">
                    <p class="product__price--show">
                      {number_format($product->getPrice(), 0, ",", ".")}&nbsp;₫
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
            </article>
          {/foreach}
        {/if}
      </div>
    </div>
  {/block}
  {/nocache}
{/strip}