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
 * Allow SVG file upload to Media Library based on user role
 * Must also add this to the wp-config file: define('ALLOW_UNFILTERED_UPLOADS', true);
 */
$user = wp_get_current_user();
if (in_array('administrator', (array) $user->roles)) { // Only allow SVG upload to admins

	// Add SVG to allowed file types
	function add_file_types_for_uploads($file_types)
	{
		$add_filetypes = array();
		$add_filetypes['svg'] = 'image/svg+xml';
		$file_types = array_merge($file_types, $add_filetypes);

		return $file_types;
	}

	add_filter('upload_mimes', 'add_file_types_for_uploads');
}