<?php

function galacticblum_setup_editor() {
	$editor_color_palette = [
		[
			'name' => __( 'Orange', 'galacticblum' ),
			'slug' => 'galacticblum-orange',
			'color' => '#f47a29',
		],
		[
			'name' => __( 'Black', 'galacticblum' ),
			'slug' => 'galacticblum-black',
			'color' => '#333',
		],
		[
			'name' => __( 'Light Gray', 'galacticblum' ),
			'slug' => 'galacticblum-light-gray',
			'color' => '#e6e6e6',
		],
		[
			'name' => __( 'Dark Gray', 'galacticblum' ),
			'slug' => 'galacticblum-dark-gray',
			'color' => '#8a8a8a',
		],
		[
			'name' => __( 'White', 'galacticblum' ),
			'slug' => 'galacticblum-white',
			'color' => '#fefefe',
		],
	];
	add_theme_support( 'editor-color-palette', $editor_color_palette );

	$editor_font_sizes = [
		[
			'name' => __( 'Small', 'galacticblum' ),
			'slug' => 'galacticblum-small',
			'size' => 15.2,
		],
		[
			'name' => __( 'Normal', 'galacticblum' ),
			'slug' => 'galacticblum-normal',
			'size' => 19,
		],
		[
			'name' => __( 'Large', 'galacticblum' ),
			'slug' => 'galacticblum-large',
			'size' => 35,
		],
		[
			'name' => __( 'Huge', 'galacticblum' ),
			'slug' => 'galacticblum-huge',
			'size' => 50,
		],
	];
	add_theme_support( 'editor-font-sizes', $editor_font_sizes );

	// Estilos del Editor de WP (Gutenberg)
	add_theme_support('editor-styles');
	add_editor_style( 'style-editor.css' );

}

add_action( 'after_setup_theme', 'galacticblum_setup_editor' );
