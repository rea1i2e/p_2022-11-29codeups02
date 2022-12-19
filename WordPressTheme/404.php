<?php get_header(); ?>
<main class="massage">
	<div class="massage__l-inner l-inner">
		<p class="massage__404">404 Not Found</p>
		<h1 class="massage__title">お探しのページは<br class="u-mobile">見つかりませんでした。</h1>
		<a href="<?php echo esc_url(home_url('/')); ?>" class="btn contact__btn">TOPへ</a>
	</div>
</main>
<?php get_footer(); ?>