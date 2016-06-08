<?php get_header(); ?>
	
<nav class="line filled">
	<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
</nav>
<div id="wrapper" class="clearfix">
	<div id="maincol">
		<!-- section -->
		<section>
			<h1><?php echo sprintf( __( '%s Search Results for ', 'sks' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
			<?php get_template_part('loop'); ?>
			<?php get_template_part('pagination'); ?>
		</section>
		<!-- /section -->
	</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>