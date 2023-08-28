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
    <link rel="icon" href="{$path_logo}" type="image/png" />
    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" integrity="sha256-2TnSHycBDAm2wpZmgdi0z81kykGPJAkiUY+Wf97RbvY=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10.2.0/swiper-bundle.min.css" integrity="sha256-VKTOFh4rb/lZu9Rktyy6vmg79KTu/kFrOTgSWFLJmOU=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" integrity="sha256-2IJPcGfN/qOK/sfp/68HISUmaCQgbWnvHxEtchU6UF4=" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha256-0upsHgyryiDRjpJLJaHNAYfDi6fDP2CrBuGwQCubzbU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10.2.0/swiper-bundle.min.js" integrity="sha256-W1EevMnQZKpkTdbA7fyzCVlU8ZMk+xDZoU+kfQHd70M=" crossorigin="anonymous"></script>
  </body>

  </html>
{/strip}