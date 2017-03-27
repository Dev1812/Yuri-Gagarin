<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>
<head>

<head>
  <title><?=$param['title'];?></title>
  <meta charset="UTF-8">
  <meta name="description" content="Сайт о первом космонавте">
  <meta name="keywords" content="Юрий Гагарин,первый космонавт,Америка,космос">
  <meta name="author" content="Исаев Тимур">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/css/common.css?1">
  <script type="text/javascript" src="/js/common.js?1"></script>
    <?php
    if(!empty($param['css']) || is_array($param['css'])) {
      foreach ($param['css'] as $v) {
        echo '<link rel="stylesheet" type="text/css" href="/css/'.$v.'.css?1">';
      }
    }
    if(!empty($param['js']) || is_array($param['js'])) {
      foreach ($param['js'] as $v) {
        echo '<script type="text/javascript" src="/js/'.$v.'.js?1"></script>';
      }
    } 
  ?>
</head>
<body>
<div id="wrap1">

<div class="head">
  <a class="head_link" href="/">Юрий Гагарин</a>
  <div class="float_r">
    <a class="head_link" href="/tests">Тесты</a>
    <a class="head_link" href="/quotes">Цитаты</a>
    <a class="head_link" href="/photos">Фото</a>
    <a class="head_link" href="/questbook" id="head_questbook">Гостевая книга</a>
  </div>
</div>

<div class="content">
  <?php
    include SITE_ROOT.'application/views/'.$content_view;
  ?>
  <div class="clear"></div>
</div>

<div class="footer">
  <div class="banner_wrap" style="position:absolute;right:20px;">
    <a href="//digitalwind.ru/" target="_blank">
      <img src="http://digitalwind.ru/images/ru_logo_17.jpg" title="www.digitalwind.ru" border="0" alt="www.digitalwind.ru" width="143" height="56">
    </a>
  </div>
  <a class="footer_link" href="/about">О сайте</a>
  <a class="footer_link" href="/quotes">Цитаты</a>
  <a class="footer_link" href="/photos">Фото</a>
  <a class="footer_link" href="/questbook">Гостевая книга</a>
  <div style="padding-top:6px;">Юрий Гагарин © <?=date('Y');?></div>
</div>

</div>
<?php
  if($data['photo_layer'] === true) {
    include SITE_ROOT.'application/views/photo_layer.php';
  }
?>
</body>
</html>