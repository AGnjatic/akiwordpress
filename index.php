<?php
get_header();
if ( have_posts() ) {
	while ( have_posts() ) {

		the_post();
    echo '<article class="post">';
		$title = get_the_title();
		$link = get_permalink();
	  echo '<h1><a href="'.$link.'">'.$title.'</a></h1><br/>';
		the_content();
		echo '<br/></article>';
		//
		// Post Content here
		//
	} // end while
} // end if
get_footer();
?>
