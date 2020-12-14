<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sanitize.css"> -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/component.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hiraku.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css"><!-- 180717 統合前追記 -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css">
		<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
<script type="text/javascript">
(function() {
  var didInit = false;
  function initMunchkin() {
    if(didInit === false) {
      didInit = true;
      Munchkin.init('626-AVC-079');
    }
  }
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  s.src = '//munchkin.marketo.net/munchkin.js';
  s.onreadystatechange = function() {
    if (this.readyState == 'complete' || this.readyState == 'loaded') {
      initMunchkin();
    }
  };
  s.onload = initMunchkin;
  document.getElementsByTagName('head')[0].appendChild(s);
})();
//スムーススクロール（#タグを自動的にスムーススクロールへ）
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^=#]').click(function() {
      // スクロールの速度
      var speed = 800;// ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href === "#" || href === "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top-135+"px";
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
</script>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
</head>
<body <?php body_class(); ?>>
<header>
	<div class="header_in">
		<button class="hiraku-open-btn" id="offcanvas-btn-left" data-toggle-offcanvas="#js-hiraku-offcanvas-1">
			<span class="hiraku-open-btn-line"></span>
		</button>
		<nav class="header_left">
			<ul class="offcanvas-left">
				<!--<li><a href="/product/shop_all/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_shopall.svg" alt=""></a></li>-->
				<li><a href="/product/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_product.svg" alt="" class="assenda"></a></li>
				<li><a href="/spa/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_spa.svg" alt=""></a></li>
				<li><a href="/professional/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_professional.svg" alt="" class="assenda"></a></li>
				<li><span><img src="<?php echo get_template_directory_uri(); ?>/img/head_aboutus.svg" alt="" class="assenda" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/img/head_aboutus_on.svg'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/img/head_aboutus.svg'"></span>
					<ul class="nest">
						<li><a href="/about-us/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_aboutus.svg" alt="About us" class="assenda"></a></li>
						<li><a href="/awards/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_award.svg" alt="" class="assenda"></a></li>
					</ul>
				</li>
				<!--<li><a href="/Ingredient/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_ingredient.svg" alt=""></a></li>-->
				<!--<li><a href="/factory/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_factory.svg" alt=""></a></li>-->

				<li><a href="/store-list/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_store_list.svg" alt=""></a></li>
				<li><a href="https://lapidem.co.jp/lapiholi/"><img src="<?php echo get_template_directory_uri(); ?>/img/magazine.svg" alt=""></a></li>
			</ul>
		</nav>
		<h1><a href="<?php echo home_url(); ?>">
			<picture>
				<source media="(max-width: 567px)" srcset="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
				<source media="(min-width: 568px)" srcset="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Lapidem Tokyo">
			</picture>
		</a></h1>
		<nav class="header_right">
			<ul>
				<li><a href="https://lapidem.co.jp/fs/lapidem/Login.html"><img src="<?php echo get_template_directory_uri(); ?>/img/head_login.svg" alt=""></a></li>
				<li><a href="https://lapidem.co.jp/fs/lapidem/ShoppingCart.html"><img src="<?php echo get_template_directory_uri(); ?>/img/head_cart.svg" alt="カート"></a></li>
				<li><a href="https://lapidem.co.jp/fs/lapidem/ShoppingCart.html">
					<picture>
						<source media="(max-width: 567px)" srcset="<?php echo get_template_directory_uri(); ?>/img/icon_cart.svg">
						<source media="(min-width: 568px)" srcset="<?php echo get_template_directory_uri(); ?>/img/icon_cart.svg">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icon_cart.svg" alt="カート" class="illust">
					</picture>
				</a></li>
			</ul>
		</nav>
	</div>
</header>
