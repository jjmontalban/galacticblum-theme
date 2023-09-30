<?php

/**
 * Registra las áreas de widgets
 */
function galacticblum_setup_widgets() {
	register_sidebar(
		[
			'id'            => 'sidebar-widgets',
			'name'          => __( 'Sidebar widgets', 'galacticblum' ),
			'description'   => __( 'Drag widgets to this sidebar container.', 'galacticblum' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title h5">',
			'after_title'   => '</h4>',
		]
	);

	register_sidebar(
		[
			'id'            => 'footer-widgets',
			'name'          => __( 'Footer widgets', 'galacticblum' ),
			'description'   => __( 'Drag widgets to this footer container', 'galacticblum' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title h5">',
			'after_title'   => '</h4>',
		]
	);
}

add_action( 'widgets_init', 'galacticblum_setup_widgets' );
