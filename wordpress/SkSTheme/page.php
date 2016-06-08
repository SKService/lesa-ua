<?php get_header(); ?>
<?php wp_nav_menu( array(
	'theme_location'  => '',
	'menu'            => 'Header', 
	'container'       => 'nav', 
	'container_class' => 'line filled', 
	'container_id'    => '',
	'menu_class'      => '', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => ''
)); ?>

<div id="wrapper" class="clearfix">
	<div id="maincol">
		<section>
			<h1><?php the_title(); ?></h1>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
					<br class="clear">
					<?php edit_post_link(); ?>
				</article>
				<!-- /article -->
			<?php endwhile; ?><?php else: ?>
				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->
			<?php endif; ?>
		</section>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>