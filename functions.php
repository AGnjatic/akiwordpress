<?php
function scripts_enqueue() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
 }
 add_action( 'wp_enqueue_scripts', 'scripts_enqueue' );
