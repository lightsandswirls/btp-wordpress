<?php 
/**
 * Register Custom Sidebars
 */

function custom_sidebars() {

	/* Footer Widget Area */
	register_sidebar(
		array(
			'id'            => 'footer-widget-area',
			'name'          => __( 'Footer Widgets' ),
			'description'   => __( 'This is the widget area used for the footer.' ),
			'before_widget' => '<div class="sidebar-item"><div id="%1$s" class="%2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="sidebar-title">',
			'after_title'   => '</div>',
		)
	);    

}

add_action( 'widgets_init', 'custom_sidebars' );