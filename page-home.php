<?php
/**
Template Name: Home page
**/
get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		the_content();
		dynamic_sidebar('sidebar-1');


		//
		// Post Content here
		//
	} // end while
} // end if
get_footer();
?>
