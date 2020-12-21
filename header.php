    <!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<meta name="keywords" content="スパコンサル,スパコンサルティング,Spa Consulting,スパ導入,spa introduction,ウェルネス,スキンケア,コスメ,ストア,通販,化粧品,ヘアケア,ボディケア,ラピデム,トウキョウ,トーキョー,lapidem,tokyo,東京,スパコンサル,nearest,spa,赤坂,akasaka,六本木,Roppongi,業務量,ホテル,アメニティ,ホテル向けアメニティー卸売,ラピデムトウキョウ,トーキョー,スパコンサルティング,ミッドタウン,midtown">

<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sanitize.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/component.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hiraku.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css"><!-- 180717 統合前追記 -->
<link href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
<scripttype="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- cart-Recovery -->
<script>
(function(w,d,s,c,i){w[c]=w[c]||{};w[c].trackingId=i;
var f=d.getElementsByTagName(s)[0],j=d.createElement(s);j.async=true;
j.src='//cdn.contx.net/collect.js';f.parentNode.insertBefore(j,f);
})(window,document,'script','contx','CTX-x-gMN4INww');
</script>
<!-- End cart-Recovery -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KLXTM46');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MTTQNJF');</script>
<!-- End Google Tag Manager -->

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
<!--* 180810 フォーム maxlength入力で次項目に自動移動のサンプル*-->
<script type="text/javascript">
(function nextfeild(str){
if (str.value.length >= str.maxLength) {
for (var i = 0, elm = str.form.elements; i < elm.length; i++) {
if (elm[i] == str) {
(elm[i + 1] || elm[0]).focus();
break;}}}
return(str);})();
</script>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.min.js"></script>

<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<?php echo do_shortcode('[google-translator]'); ?>
<div id="header_bk">
<header>
<div class="header_in">
<nav class="header_left">
<ul>
<!--<li><a href="/product/shop_all/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_shopall.svg" alt=""><p class="disp_sp sp_menu_shopall">製品一覧</p></a></li>-->
<li><a href="/product/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_product.svg" alt="" class="assenda"><p class="disp_sp sp_menu_product">製品</p></a></li>
<li><a href="/spa/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_spa.svg" alt=""><p class="disp_sp sp_menu_spa">スパ</p></a></li>
<li><a href="/professional/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_professional.svg" alt="" class="assenda"><p class="disp_sp sp_menu_professional">プロフェッショナル</p></a></li>
<li><a href="/about-us/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_aboutus.svg" alt="About us" class="assenda"><p class="disp_sp sp_menu_aboutus">私たちについて</p></a></li>
<li><a href="/work/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_works.svg" alt="About us" class="assenda"><p class="disp_sp sp_menu_aboutus">実績</p></a></li>
<!--<li><a href="/Ingredient/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_ingredient.svg" alt=""><p class="disp_sp sp_menu_ingredient">成分</p></a></li>-->
<!--<li><a href="/factory/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_factory.svg" alt="" ><p class="disp_sp sp_menu_factory">工場</p></a></li>-->
<li><a href="/awards/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_award.svg" alt="" class="assenda"><p class="disp_sp sp_menu_awards">受賞歴</p></a></li>
<li><a href="https://lapidem.co.jp/lapiholi/"><img src="<?php echo get_template_directory_uri(); ?>/img/magazine.svg" alt=""><p class="disp_sp sp_menu_awards">マガジン</p></a></li>
</ul>
</nav>

<!-- .sp_nav START -->
<nav class="sp_nav">
<dl>
<dt><span></span><span></span><span></span></dt>
<dd>
<ul id="mdropmenu">
    <!-- オンラインショップ START -->
    <li>
        <table style="background: #ebeff0;">
        <tr height="55">
        <td class="mlist-left"><!--<a href="https://lapidem.co.jp/product/shop_all/">--><img src="<?php echo get_template_directory_uri(); ?>/img/head_online_store.svg" alt="" class="assenda"><!--</a>--></td>
        <td class="mlist-center"><!--<a href="https://lapidem.co.jp/product/shop_all/">-->オンラインショップ<!--</a>--></td>
        <td class="mlist-right"> <span><i class="fas fa-plus"></i></span></td>
        </tr>
        </table>
        <ul>
            <li style="border-bottom: 0 !important;">
                <div  class="nav_product">
                    <ul style="display: block !important;">
                        <li><a href="https://lapidem.co.jp/product/"><img src="<?php echo get_template_directory_uri(); ?>/img/sp_product_all.svg" alt="製品一覧"></a>
                        </li>
                        <li><a href="https://lapidem.co.jp/product/skincare/"><img src="<?php echo get_template_directory_uri(); ?>/img/sp_product_skin.svg" alt="スキンケア商品"></a>
                        </li>
                        <li><a href="https://lapidem.co.jp/product/bodycare/"><img src="<?php echo get_template_directory_uri(); ?>/img/sp_product_body.svg" alt="ボディケア商品"></a>
                        </li>
                        <li><a href="https://lapidem.co.jp/product/haircare/"><img src="<?php echo get_template_directory_uri(); ?>/img/sp_product_hair.svg" alt="ヘアケア商品"></a>
                        </li>
                        <li><a href="https://lapidem.co.jp/product/hot-stone/"><img src="<?php echo get_template_directory_uri(); ?>/img/sp_product_hot-stone.svg" alt="ホットストーン"></a>
                        </li>
                        <li><a href="https://lapidem.co.jp/product/#set"><img src="<?php echo get_template_directory_uri(); ?>/img/sp_product_set.svg" alt="セット商品"></a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- オンライショップ sub_menu START -->
            <li>
                <table>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/product/">・製品一覧</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/product/skincare/">・スキンケア商品</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/product/bodycare/">・ボディケア商品</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/product/haircare/">・ヘアケア商品</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/product/hot-stone/">・ホットストーン</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/product/#set">・セット商品</a></td></tr>
                <!--<tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/30days_trial/">・特別なプログラム</a></td></tr>-->
                <!--<tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="#">・⾃分に合うスキンケアを⾒つける</a></td></tr>-->
                </table>
            </li>
        </ul>
    </li>
    <!-- スパ START -->
    <li>
        <table style="background: #ebeff0;">
            <tr height="55">
            <td class="mlist-left"><!--<a href="https://lapidem.co.jp/spa/">--><img src="<?php echo get_template_directory_uri(); ?>/img/head_spa.svg" alt="" class="assenda" style="height: 17px !important;"><!--</a>--></td>
            <td class="mlist-center"><!--<a href="https://lapidem.co.jp/spa/">-->スパ<!--</a>--></td>
            <td class="mlist-right"> <span><i class="fas fa-plus"></i></span></td>
            </tr>
        </table>
        <ul>
            <li>
                <table>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/spa/">・Lapidem tokyo Spaとは</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/spa-reservation/">・Spa予約</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/wp-content/themes/lapidem/pdf/1903_spamenu.pdf" target="_blank">・トリートメントメニュー</a></td></tr>
                </table>
            </li>
        </ul>
    </li>
    <!-- プロフェッショナル START -->
    <li>
        <table style="background: #ebeff0;">
            <tr height="55">
            <td class="mlist-left"><!--<a href="https://lapidem.co.jp/professional/">--><img src="<?php echo get_template_directory_uri(); ?>/img/head_professional.svg" alt="" class="assenda"><!--</a>--></td>
            <td class="mlist-center"><!--<a href="https://lapidem.co.jp/professional/">-->プロフェッショナルの⽅へ<!--</a>--></td>
            <td class="mlist-right"> <span><i class="fas fa-plus"></i></span></td>
            </tr>
        </table>
        <ul>
            <li>
                <table>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/professional/">・プロフェッショナルの皆様へ</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/the-story-of-lapidem/">・私たちの物語</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/spa-consulting/">・スパコンサルティング事業</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/product-development/">・美容商材／アメニティ開発 製造 販売事業</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://b.lapidem.co.jp/" target="_blank">・プロフェッショナル専用オンラインストア</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://online-school.lapidem.co.jp/" target="_blank">・Lapidem オンラインスクール</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/inquiry_professional/">・プロフェッショナル専⽤お問い合わせ</a></td></tr>
                </table>
            </li>
        </ul>
    </li>
    <!-- 私たちについて START -->
    <li>
        <table style="background: #ebeff0;">
            <tr height="55">
            <td class="mlist-left"><!--<a href="https://lapidem.co.jp/about-us/">--><img src="<?php echo get_template_directory_uri(); ?>/img/head_aboutus.svg" alt="" class="assenda"><!--</a>--></td>
            <td class="mlist-center"><!--<a href="https://lapidem.co.jp/about-us/">-->私たちについて<!--</a>--></td>
            <td class="mlist-right"> <span><i class="fas fa-plus"></i></span></td>
            </tr>
        </table>
        <ul>
            <li>
            <table>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/about-us/">・私たちについて</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/about-us/#values">・私たちの価値</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/awards/">・受賞歴</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/Ingredient/">・成分について</a></td></tr>
                <tr style="border-top: 1px solid #0b132f;"><td class="mlist-left mleft-second"><a href="https://lapidem.co.jp/factory/">・⼯場について</a></td></tr>
            </table>
            </li>
        </ul>
    </li>
    <!-- プロジェクト実績 START -->
    <li class="p0">
        <table style="background: #ebeff0;">
            <tr height="55">
            <td class="mlist-left_last"><a href="https://lapidem.co.jp/work/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_works.svg" alt="" class="assenda"></a></td>
            <td class="mlist-center"><a href="https://lapidem.co.jp/work/">実績</a></td>
            </tr>
        </table>
    </li>
    <li>
        <table style="background: #ebeff0;">
        <tr height="55">
        <td class="mlist-left_last"><a href="https://lapidem.co.jp/lapiholi/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_magazine.svg" alt="" class="magazine" style="height: 16px !important; margin-left: -4px;"></a></td>
        <td class="mlist-center"><a href="https://lapidem.co.jp/lapiholi/">マガジン</a></td>
        </tr>
        </table>
    </li>
    <!-- お問い合わせ　START -->
    <li class="p0">
        <table style="background: #ebeff0;">
        <tr height="55">
        <td class="mlist-left_last"><a href="https://lapidem.co.jp/contact/"><img src="<?php echo get_template_directory_uri(); ?>/img/head_contact.svg" alt="" class="assenda"></a></td>
        <td class="mlist-center"><a href="https://lapidem.co.jp/contact/">お問い合わせ</a></td>
        </tr>
        </table>
    </li>
</ul>

<!-- table_bnr START -->
<!--<table>
    <tr height="55" style="border-bottom: 2px solid #0b132f; border-top: 2px solid #0b132f">
    <td class="mlist-left_banner"><a href="https://b.lapidem.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/menu_Bcart.png" alt="" class="assenda"></a></td>
    </tr>
    <tr height="55" style="border-bottom: 2px solid #0b132f;">
    <td class="mlist-left_banner"><a href="https://online-school.lapidem.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/menu_online_school.png" alt="" class="assenda"></a></td>
    </tr>
    <tr height="55" style="border-bottom: 2px solid #0b132f;">
    <td class="mlist-left_banner"><a href="https://lapidem.co.jp/lapiholi/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/menu_lapihori.png" alt="" class="assenda"></a></td>
    </tr>
    <tr height="55" style="border-bottom: 2px solid #0b132f;">
    <td class="mlist-left_banner"><a href="https://cafesansnomakasaka.storeinfo.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/menu_cafe_sans_nom.png" alt="" class="assenda"></a></td>
    </tr>
</table>-->
</dd>
</dl>
</nav>


   <script>
     $(function(){
        $("#mdropmenu").find(".mlist-right").on("click", function() {

          if($(this).find('i').is('.fa-minus')){

           $(this).find('i')
           .removeClass()
           .addClass('fas fa-plus');
           }else{

           $(this).find('i')
           .removeClass()
           .addClass('fa fa-minus');
            }

          $(this).parent().parent().parent().next().slideToggle();

            });
         });
    </script>


<h1><a href="<?php echo home_url(); ?>">
<picture>
<source media="(max-width: 567px)" srcset="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
<source media="(min-width: 568px)" srcset="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="ラピデムトウキョウは、国内外のラグジュアリーホテル、リゾートホテルなどのホテル・旅館・商業施設へのスパ、デイスパなどスパコンサルティングをメインにオープニング企画、メニュー施策開発から、セラピストへの技術、メンタル面の育成などをプロデュースします。フラッグシップショップ「ラピデムトウキョウスパ」も赤坂と六本木に近い店舗も運営。英語、中国語も対応スタッフが所属していますので、お気軽にご相談ください。Spa Consulting,Spa Introduction,Spa MENU,Professional,English&Chinese OK">
</picture>
</a></h1>
<nav class="header_right">
<ul>
<li><a href="https://lapidem.co.jp/fs/lapidem/Login.html"><img src="<?php echo get_template_directory_uri(); ?>/img/head_login.svg" alt=""></a></li>
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
</div>
