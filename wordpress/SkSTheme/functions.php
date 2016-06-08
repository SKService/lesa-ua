<?php 

// Localisation Support
load_theme_textdomain('sks', get_template_directory() . '/languages');
	
/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="leftBlock widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

function mytheme_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'mytheme_options', array(
		'title' => __( 'MyTheme Options', 'sks' ), //Visible title of section
		'priority' => 35, //Determines what order this appears in
		'capability' => 'edit_theme_options', //Capability needed to tweak
		'description' => __('Allows you to customize some example settings for MyTheme.', 'sks'), //Descriptive tooltip
	));
	
	$wp_customize->add_setting( 'header_textcolor' , array(
		'default'     => '#000000',
		'transport'   => 'refresh',
	));
}
add_action( 'customize_register', 'mytheme_customize_register' );


?>