<?php
get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
    the_date();
    the_content();
    $link = get_permalink();
    echo '<a href="'.$link.'">SAZNAJ VISE</a>';
		//
		// Post Content here
		//
	} // end while
} // end if
get_footer();
?>
