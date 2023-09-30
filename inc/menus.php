<?php

/**
 * Registra los menús de navegación
 */
function galacticblum_register_menus() {
	register_nav_menu( 'main-menu', __( 'Main menu', 'galacticblum' ) );
	register_nav_menu( 'mobile-menu', __( 'Mobile menu', 'galacticblum' ) );
}
add_action( 'after_setup_theme', 'galacticblum_register_menus' );
