<?php
function scripts_enqueue() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

 }
 add_action( 'wp_enqueue_scripts', 'scripts_enqueue' );

register_nav_menus(array(
  'primary' => __('Primay menu')
));
