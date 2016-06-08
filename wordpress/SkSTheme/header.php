<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>"/>
		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" type="text/css"/>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="pagewidth">
			<div class="line filled">
				<p class="contacts left"><?php _e('Kharkiv, av. Nauki 40', 'sks');?></p>
				<p class="contacts right">+38 (050) 000 00 00, +38 (067) 000 00 00</p>
			</div>
			<header id="head">
				<div id="container">
				<div class="item left">
						<div id="logo" class="right">
							<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="SK Service Logo"/></a>
						</div>
					</div>
					<div class="item right">
						<ul id="desc">
							<li><?php _e('Scaffolding', 'sks'); ?></li>
							<li><?php _e('Mobile scaffolds (towers)', 'sks'); ?></li>
							<li><?php _e('Construction and repairs works', 'sks'); ?></li>
						</ul>
						<div id="searchBox">
							<label for="search">Search</label>
							<input type="text" id="search"/>
						</div>
					</div>
				</div>
			</header>