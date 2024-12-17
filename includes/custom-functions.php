<?php 

/**
 * H1 Title
 *
 * Get the H1 title from the ACF field or the post title
 * 
 * @param $id boolean
 * @param $echo boolean
 *
 * @return boolean or $title string
 */
function h1_title( $id = false, $echo = true ) {
	global $post;
	$title = '';

	if ($id) {
		$title = get_field('h1_title', $id) ? get_field('h1_title', $id) : get_the_title($id);
	} else {
		$title = get_field('h1_title', $post->ID) ? get_field('h1_title', $post->ID) : get_the_title($post->ID);
	}

	if ($title != '') {
		if ($echo) {
			echo $title;
		} else {
			return $title;
		}
	} else {
		return false;
	}
}


/**
 * Dynamic Year Shortcode
 * (Used for the copyright year in the footer.)
 */
function dynamic_year() {
	ob_start();
	echo date('Y');
	return ob_get_clean();
}
add_shortcode('year', 'dynamic_year');