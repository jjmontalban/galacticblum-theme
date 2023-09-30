<?php

/**
 * Cambia el contenido del extracto por un botón
 *
 * @param $more
 *
 * @return string
 */
function galacticblum_excerpt_more( $more ) {
	return $more . ' <p class="read-more"><a class="button" href="' . get_permalink() . '">' . __( 'Read more', 'galacticblum' ) . '</a></p>';
}
add_filter( 'excerpt_more', 'galacticblum_excerpt_more' );


/**
 * Muestra  un extracto más corto para el CPT Proyecto
 *
 * @param $length
 *
 * @return int
 */
function galacticblum_excerpt_length( $length ) {
	if ( get_post_type() === 'proyecto' ) {
		return 10;
	}
	return $length;
}
add_filter( 'excerpt_length', 'galacticblum_excerpt_length' );
