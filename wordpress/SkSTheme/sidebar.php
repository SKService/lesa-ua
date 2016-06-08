<div id="leftcol">
<div class="leftBlock filled">
	<?php wp_nav_menu( array(
	'theme_location'  => '',
	'menu'            => 'Header', 
	'container'       => 'nav', 
	'container_class' => '', 
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
</div>
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1')) ?>
</div>