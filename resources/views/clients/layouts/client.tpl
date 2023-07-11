{strip}
  {$url='https://nhndev110.lovestoblog.com/'}
  {$path_logo = '/resources/assets/client/images/logo.png'}
  {$title = 'Điện thoại, laptop, tablet, phụ kiện chính hãng | NHNdev110 Store'}
  {$description = 'Hệ thống 100 cửa hàng bán lẻ điện thoại, máy tính laptop, smartwatch, smarthome, thiết bị IT, phụ kiện chính hãng - Giá tốt, trả góp 0%, giao miễn phí.'}
  <!DOCTYPE html>
  <html lang="vi">

  <head>
    <title>{block name=title}{/block} | NHNdev110 Store</title>
    <!-- Main -->
    <meta
      name="title"
      content="{$title}"
    />
    <meta
      name="description"
      content="{$description}"
    />
    <meta
      name="keywords"
      content="NHNdev110 Store, dự án cá nhân, thương mại điện tử, điện thoại di dộng, máy tính bảng, điện thoại chính hãng, máy tính sách tay, laptop chính hãng, phụ kiện laptop, điện thoại"
    />
    <meta
      http-equiv="Content-Type"
      content="text/html; charset=utf-8"
    />
    <meta
      content="INDEX,FOLLOW"
      name="robots"
    />
    <meta
      name="revisit-after"
      content="1 days"
    />
    <meta
      http-equiv="content-language"
      content="vi"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1"
    />
    <meta
      http-equiv="X-UA-Compatible"
      content="IE=edge"
    />
    <meta
      name="url"
      content="{$url}"
    />
    <meta
      name="canonical"
      content="{$url}"
    />
    <meta
      name="author"
      content="Nhan Nguyen Hoang (NHNdev110)"
    />
    <!-- FB -->
    <meta
      property="og:site_name"
      content="{$title}"
    />
    <meta
      property="og:type"
      content="website"
    />
    <meta
      property="og:locale"
      content="vi_VN"
    />
    <meta
      property="og:title"
      content="{$title}"
    />
    <meta
      property="og:description"
      content="{$description}"
    />
    <meta
      property="og:url"
      content="{$url}"
    />
    <meta
      property="og:image"
      content="{$path_logo}"
    />
    <meta
      property="og:image:secure_url"
      content="{$path_logo}"
    />
    <meta
      property="og:image:type"
      content="image/png"
    />
    <meta
      property="og:image:width"
      content="400"
    />
    <meta
      property="og:image:height"
      content="300"
    />
    <!--  -->
    <meta
      itemprop="name"
      content="{$title}"
    />
    <meta
      itemprop="description"
      content="{$description}"
    />
    <meta
      itemprop="image"
      content="{$path_logo}"
    />
    <!--  -->
    <link
      rel="canonical"
      href="{$url}"
    />
    <link
      rel="shortcut icon"
      href="{$path_logo}"
      type="image/x-icon"
    />
    <!--  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js">
    </script>
    <link
      rel="stylesheet"
      href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css"
    >
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js">
    </script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link
      href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'
      rel='stylesheet'
    >
    <!--  -->
    <link
      rel="preconnect"
      href="https://fonts.googleapis.com"
    >
    <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin
    >
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    >
    {nocache}
    <link
      rel="stylesheet"
      href="/resources/assets/client/css/style.min.css?{time()}"
    />
    {/nocache}
    {block name=head_tags}{/block}
  </head>

  <body>
    <div id="wrapper">
      <header id="header">
        {include file="../components/header.tpl" title=$title}
      </header>
      <main
        id="main"
        class="container"
      >
        <aside id="sidebar">
          {block name=sidebar}{/block}
        </aside>
        <div id="main-content">
          {block name=main_content}{/block}
        </div>
      </main>
      <div id="container-footer">
        <footer class="container">
          {include file="../components/footer.tpl"}
        </footer>
      </div>
    </div>
  </body>

  </html>
{/strip}