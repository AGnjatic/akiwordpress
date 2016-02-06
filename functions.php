<?php
function scripts_enqueue() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

 }
 add_action( 'wp_enqueue_scripts', 'scripts_enqueue' );

register_nav_menus(array(
  'primary' => __('Primay menu')
));

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
