<?php

/**
 * Configuración básica del tema
 */
function galacticblum_setup_theme() {
	// HTML5 para los formularios de búsqueda, comentarios, galerías...
	$supports = [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	];
	add_theme_support( 'html5', $supports );

	// Soporte para etiqueta <title> dentro de <head>
	add_theme_support( 'title-tag' );

	// Soporte para imágenes destacadas
	add_theme_support( 'post-thumbnails' );

	// Soporte para Feed automático para posts y comentarios
	add_theme_support( 'automatic-feed-links' );

	// Anchura del contenido. Sirve especialmente para vídeos embebidos.
	$GLOBALS['content_width'] = 1130;

	// Soporte para internacionalización
	load_theme_textdomain( 'galacticblum', get_template_directory() . '/languages' );

	// Registro de tamaños de imágenes
	add_image_size( 'featured-medium', 870, 500, true );
	add_image_size( 'featured-page', 1920, 400, true );

	// Cabecera personalizada
	$header_defaults = [
		'width'       => 1500,
		'height'      => 350,
		'flex-height' => false,
		'flex-width'  => false,
		'header-text' => false,
	];
	add_theme_support( 'custom-header', $header_defaults );

	// Logotipo personalizado
	$logo_defaults = [
		'height'      => 150,
		'width'       => 150,
		'flex-height' => false,
		'flex-width'  => false,
		'header-text' => [ 'site-title', 'site-description' ],
	];
	add_theme_support( 'custom-logo', $logo_defaults );

	// Fondo personalizado
	$background_defaults = [
		'default-color'    => '#fefefe',
	];
	add_theme_support( 'custom-background', $background_defaults );
}
add_action( 'after_setup_theme', 'galacticblum_setup_theme' );

require 'inc/menus.php';

require 'inc/widgets.php';

require 'inc/templates.php';

require 'inc/scripts.php';

require 'inc/customizer.php';

require 'inc/editor.php';




/**
 * Soporte para svg
 */
function add_file_types_to_uploads($file_types)
{
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');




/**
 * Definir fuente Montserrat
 */
function enqueue_child_theme_styles() {
    // Enlazar la fuente Montserrat desde Google Fonts
    wp_enqueue_style('montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
    
    // Enqueue estilo del child theme
    wp_enqueue_style('child-theme-style', get_stylesheet_uri(), array('montserrat-font'));
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');