<?php

/**
 * Añade todos los scripts y estilos necesarios para el funcionamiento del tema.
 */
function galacticblum_enqueue_scripts() {
	/* Menu toggle */
	wp_enqueue_script( 'menu-toggle', get_template_directory_uri() . '/assets/js/menu-toggle.js', [ 'jquery' ] );

	wp_enqueue_style( 'galacticblum-style', get_stylesheet_uri() );
	if ( is_rtl() ) {
		wp_enqueue_style( 'galacticblum-style-rtl', get_template_directory_uri() . '/style.rtl.css', [ 'galacticblum-style' ] );
	}

	if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_post_type_archive( 'proyecto' ) || is_tax( 'tipo_de_proyecto' ) ) {
		wp_enqueue_script( 'scrollify', get_template_directory_uri() . '/assets/js/scrollify.js', [ 'jquery' ] );
		wp_enqueue_script( 'galacticblum-init', get_template_directory_uri() . '/assets/js/init.js', [ 'jquery', 'scrollify' ] );
	}

}
add_action( 'wp_enqueue_scripts', 'galacticblum_enqueue_scripts' );
