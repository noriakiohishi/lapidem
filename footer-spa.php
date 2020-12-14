<!-- instagram API 表示 -->
<section class="common_insta-area">
<h2 class="common_title_insta-area">Instagram</h2>
<div id="insta-window" class="iswd-base" data-iswd='{"username":"lapidem_tokyo","wrapperWidth":"","showIcon":false,"showBiography":false,"showFollowBtn":false,"showUsername":false}'></div>
<script src="https://insta-window-tool.web.app/v3/insta-window.js"></script>
</section>

<footer>
	<div class="footer_in">
		<div class="footer_top">
			<div class="footer_sns">
				<ul>
					<li><a href="https://twitter.com/lapidemtokyo" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_twitter.png" alt="Twitter"></a></li>
					<li><a href="https://www.facebook.com/lapidemtokyoitem/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_facebook.png" alt="Facebook"></a></li>
                    <li><a href="https://www.instagram.com/lapidem_tokyo/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_instagram.png" alt="Instagram"></a></li>
					<li><a href="https://www.pinterest.jp/gazzaradesign/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_pintarest.png" alt="Pinterest"></a></li>
                    <li><a href="https://www.youtube.com/channel/UCjO3lzDl26XQsY4N1ZK6Pog" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/icon_youtube.png" alt="Youtube"></a></li>
				</ul>
			</div>
		</div>
		<div class="footer_nav">
			<nav class="footer_nav_top">
				<ul>
					<li class="disp_pc"><a href="/point_stage/">
						<span class="en">Point stage</span>
						<span class="ja">ポイントステージ</span></a></li>
					<li class="disp_sp"><a href="/point_stage/">ポイントステージ</a></li>
					<!--<li class="disp_pc"><a href="/30days_trial/">
						<span class="en">30days trial</span>
						<span class="ja">30日間返品保証</span></a></li>
					<li class="disp_sp"><a href="/30days_trial/">30日間返品保証</a></li>-->
					<!--<li class="disp_pc" class="disp_pc"><a href="/invitation/">
						<span class="en">Invitation</span>
						<span class="ja">友達紹介</span></a></li>
					<li class="disp_sp"><a href="/invitation/">友達紹介</a></li>-->

					<li class="disp_sp"><a href="/artist_program/">アーティストプログラム</a></li>
					<li class="disp_pc"><a href="/artist_program/">
						<span class="en">Artist program</span>
						<span class="ja">アーティストプログラム</span></a></li>
				 </ul>   
			</nav>
			<nav class="footer_nav_bottom">
				<ul>
					<!--<li><a href="/product/shop_all/">
                        <span class="en">Shop all</span><span class="ja">製品一覧</span></a></li>-->
					<li><a href="/product/"><span class="en">Product</span><span class="ja">製品</span></a></li>
					<li><a href="/spa/"><span class="en">Spa</span><span class="ja">スパ</span></a></li>
					<li><a href="/professional/"><span class="en">Professional</span><span class="ja">プロフェッショナル</span></a></li>
					<li><a href="https://b.lapidem.co.jp/"><span class="en">Online Store</span><span class="ja">業務用ストア</span></a></li>
					<li><a href="https://online-school.lapidem.co.jp/"><span class="en">Online Salon</span><span class="ja">オンラインサロン</span></a></li>
					<li><a href="/about-us/"><span class="en">About us</span><span class="ja">私達について</span></a></li>
					<li><a href="https://lapidem.co.jp/lapiholi/"><span class="en">Magazine</span><span class="ja">マガジン</span></a></li>
					<li><a href="/ingredient/"><span class="en">Ingredient</span><span class="ja">成分</span></a></li>
					<li><a href="/factory/"><span class="en">Factory</span><span class="ja">工場</span></a></li>
					<li><a href="/about-us/#our_team"><span class="en">Our team</span><span class="ja">私達のチーム</span></a></li>
					<li><a href="/faq/"><span class="en">FAQ</span><span class="ja">よくあるご質問</span></a></li>
					<li><a href="/contact/"><span class="en">Contact</span><span class="ja">お問い合わせ</span></a></li>
					<li><a href="/press/"><span class="en">Press</span><span class="ja">メディア掲載</span></a></li>
					<li><a href="/privacy/"><span class="en">Privacy policy</span><span class="ja">プライバシポリシー</span></a></li>
					<li><a href="/company/"><span class="en">Company</span><span class="ja">会社概要</span></a></li>
					<li><a href="/law/"><span class="en">Law</span><span class="ja" style="line-height:1.6;">特定商取引に関する法律に基づく表示</span></a></li>
					<li><a href="/news/luxury-travel-guide-awards/"><span class="en">News</span><span class="ja">新着情報</span></a></li>
					<li><a href="/awards/"><span class="en">Award</span><span class="ja">受賞歴</span></a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="copy">&copy; 2019 Lapidem tokyo.<br class="disp_sp">All rights reserved.</div>
</footer>

<!-- build:js /js/lib.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/grid.js"></script>
<!-- endbuild -->
<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/hiraku.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/config.js"></script>
<script>
			$(function() {
				Grid.init();
			});
		</script>
<?php wp_footer(); ?>
    <!-- ptengine --><script type="text/javascript">
        window._pt_lt = new Date().getTime();
        window._pt_sp_2 = [];
        _pt_sp_2.push('setAccount,4212132e');
        var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        (function() {
            var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
            atag.src = _protocol + 'js.ptengine.jp/pta.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(atag, s);
        })();
</script><!-- /ptengine -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLXTM46"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTTQNJF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>
