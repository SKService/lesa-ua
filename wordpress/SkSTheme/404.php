<?php get_header(); ?>
	
<nav class="line filled">
	<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
</nav>
<div id="wrapper" class="clearfix">
	<div id="maincol">
		<!-- section -->
		<section>
			<!-- article -->
			<article id="post-404">
				<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>
			</article>
			<!-- /article -->
		</section>
		<!-- /section -->
	</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>