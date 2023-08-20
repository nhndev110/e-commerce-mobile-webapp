{strip}
  {$url = APP_URL}
  {$path_logo = asset("assets/images/logo-icon.png")}
  {$title = 'Điện thoại, laptop, tablet, phụ kiện chính hãng | NHNdev110 Store'}
  {$description = 'Hệ thống 100 cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, smarthome, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.'}
  <!DOCTYPE html>
  <html lang="vi">

  <head>
    <title>{block name=title}{/block} | NHNdev110 Store</title>
    <!-- Main -->
    <meta name="title" content="{$title}" />
    <meta name="description" content="{$description}" />
    <meta name="keywords" content="NHN Store, dự án cá nhân, thương mại điện tử, điện thoại di dộng, máy tính bảng, điện thoại chính hãng, máy tính sách tay, laptop chính hãng, phụ kiện laptop, điện thoại" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="INDEX,FOLLOW" name="robots" />
    <meta name="revisit-after" content="1 days" />
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="url" content="{$url}" />
    <meta name="canonical" content="{$url}" />
    <meta name="author" content="Nhan Nguyen Hoang (NHNdev110)" />
    <!-- FB -->
    <meta property="og:site_name" content="{$title}" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:title" content="{$title}" />
    <meta property="og:description" content="{$description}" />
    <meta property="og:url" content="{$url}" />
    <meta property="og:image" content="{$path_logo}" />
    <meta property="og:image:secure_url" content="{$path_logo}" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <!--  -->
    <meta itemprop="name" content="{$title}" />
    <meta itemprop="description" content="{$description}" />
    <meta itemprop="image" content="{$path_logo}" />
    <!--  -->
    <link rel="canonical" href="{$url}" />
    <link rel="shortcut icon" href="{$path_logo}" type="image/x-icon" />
    <!--  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.min.css" integrity="sha512-s6khMl5GDS1HbQ5/SwL1wzMayPwHXPjKoBN5kHUTDqKEPkkGyEZWKyH2lQ3YO2q3dxueG3rE0NHjRawMHd2b6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.2.0/swiper-bundle.min.js" integrity="sha512-QwpsxtdZRih55GaU/Ce2Baqoy2tEv9GltjAG8yuTy2k9lHqK7VHHp3wWWe+yITYKZlsT3AaCj49ZxMYPp46iJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    {nocache}
    <link rel="stylesheet" href={asset("assets/css/style.min.css")} />
    {/nocache}
    {block name=head_tags}{/block}
  </head>

  <body>
    <div id="wrapper">
      {include file="blocks/header.tpl"}
      <main class="main">
        <div class="container">
          <aside id="sidebar">
            {block name=sidebar}{/block}
          </aside>
          <div id="main-content">
            {block name=main_content}{/block}
          </div>
        </div>
      </main>
      {include file="blocks/footer.tpl"}
    </div>
  </body>

  </html>
{/strip}