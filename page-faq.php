<?php get_header(); ?>
	<main>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<article class="faq">
			<div class="faq_head">
			    <h2 class="common_title_insta-area">FAQ<span>よくあるご質問</span></h2>
				<!--<h1><img src="/wp-content/themes/lapidem/img/head_faq.svg" alt="FAQ"><span>よくあるご質問</span></h1>-->
			</div>
			<nav class="faq_nav">
				<ul class="container">
					<li><a href="#product">商品</a></li>
					<li><a href="#payment">支払い</a></li>
					<li><a href="#return">返品交換</a></li>
					<li><a href="#delivery">配送</a></li>
					<li><a href="#mailmag">メルマガ</a></li>
					<li><a href="#mypage">マイページ</a></li>
					<!--<li><a href="#fiend">友達紹介</a></li>-->
					<li><a href="#thirty-days">30日間無料返品保証</a></li>
					<li><a href="#pointstage">ポイントステージプログラム</a></li>
					<!--<li><a href="#artist">アーティストプログラム</a></li>-->
				</ul>
			</nav>
			<section class="faq_body container">
				<div class="faq_body_in">
					<h2 id="product">商品</h2>
					<dl>
					<?php if(get_field('faq_payment')): ?>
						<?php while(the_repeater_field('faq_product')): ?>
						<dt><?php the_sub_field('faq_product_question'); ?></dt>
						<dd><?php the_sub_field('faq_product_answer'); ?></dd>
						<?php endwhile; ?>
					<?php endif; ?>
					</dl>
					<h2 id="payment">支払い</h2>
					<dl>
					<?php if(get_field('faq_payment')): ?>
						<?php while(the_repeater_field('faq_payment')): ?>
						<dt><?php the_sub_field('faq_payment_question'); ?></dt>
						<dd><?php the_sub_field('faq_payment_answer'); ?></dd>
						<?php endwhile; ?>
					<?php endif; ?>
					</dl>
					<h2 id="return">返品交換</h2>
					<dl>
						<?php if(get_field('faq_return')): ?>
						<?php while(the_repeater_field('faq_return')): ?>
						<dt><?php the_sub_field('faq_return_question'); ?></dt>
						<dd><?php the_sub_field('faq_return_answer'); ?></dd>
						<?php endwhile; ?>
					<?php endif; ?>
					</dl>
					<h2 id="delivery">配送</h2>
					<dl>
						<?php if(get_field('faq_delivery')): ?>
						<?php while(the_repeater_field('faq_delivery')): ?>
						<dt><?php the_sub_field('faq_delivery_question'); ?></dt>
						<dd><?php the_sub_field('faq_delivery_answer'); ?></dd>
						<?php endwhile; ?>
					<?php endif; ?>
					</dl>
					<h2 id="mailmag">メルマガ</h2>
					<dl>
						<?php if(get_field('faq_mailmag')): ?>
						<?php while(the_repeater_field('faq_mailmag')): ?>
						<dt><?php the_sub_field('faq_maimag_question'); ?></dt>
						<dd><?php the_sub_field('faq_maimag_answer'); ?></dd>
						<?php endwhile; ?>
					<?php endif; ?>
					</dl>
					<h2 id="mypage">マイページ</h2>
					<dl>
						<?php if(get_field('faq_mypage')): ?>
						<?php while(the_repeater_field('faq_mypage')): ?>
						<dt><?php the_sub_field('faq_mypage_question'); ?></dt>
						<dd><?php the_sub_field('faq_mypage_answer'); ?></dd>
						<?php endwhile; ?>
					<?php endif; ?>
					</dl>
					<!--<h2 id="fiend">友達紹介</h2>
					<dl>
						<?php if(get_field('faq_friend')): ?>
						<?php while(the_repeater_field('faq_friend')): ?>
						<dt><?php the_sub_field('faq_friend_question'); ?></dt>
						<dd><?php the_sub_field('faq_friend_answer'); ?></dd>
						<?php endwhile; ?>
					<?php endif; ?>
					</dl>-->
					<h2 id="thirty-days">30日間無料返品保証</h2>
					<dl>
						<?php if(get_field('faq_trial')): ?>
						<?php while(the_repeater_field('faq_trial')): ?>
						<dt><?php the_sub_field('faq_trial_question'); ?></dt>
						<dd><?php the_sub_field('faq_trial_answer'); ?></dd>
						<?php endwhile; ?>
					<?php endif; ?>
					</dl>
					<h2 id="pointstage">ポイントステージプログラム</h2>
					<dl>
						<?php if(get_field('faq_pointstage')): ?>
						<?php while(the_repeater_field('faq_pointstage')): ?>
						<dt><?php the_sub_field('faq_pointstage_question'); ?></dt>
						<dd><?php the_sub_field('faq_pointstage_answer'); ?></dd>
						<?php endwhile; ?>
					<?php endif; ?>
					</dl>
					<!--<h2 id="artist">アーティストプログラム</h2>
					<dl>
						<?php if(get_field('faq_artist')): ?>
						<?php while(the_repeater_field('faq_artist')): ?>
						<dt><?php the_sub_field('faq_artist_question'); ?></dt>
						<dd><?php the_sub_field('faq_artist_answer'); ?></dd>
						<?php endwhile; ?>
					<?php endif; ?>
					</dl>-->
				</div>

			</section>
		</article>
		<?php endwhile; ?>
		<?php else: ?>
			<!-- article -->
			<article>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			</article>
			<!-- /article -->
		<?php endif; ?>
	</main>
<?php get_footer(); ?>