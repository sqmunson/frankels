<?php get_header(); ?>

	<main role="main" class="wrapper">
		<!-- section -->
		<section class="wrapper">

			<div class="menu-link">
			    <a href="<?php echo get_permalink( get_page_by_path( 'menu' ) )?>">MENU</a>
			</div>

			<div class="social">
			    <a href="https://www.instagram.com/frankelsdeli/" target="_blank"><span class="instagram"></span></a>
			    <a href="https://www.facebook.com/Frankels-Delicatessen-1079715952070742/" target="_blank"><span class="facebook"></span></a>
			</div>

			<div class="temp-logo"></div>

			<h1><?php // _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php // get_template_part('loop'); ?>

			<?php // get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
