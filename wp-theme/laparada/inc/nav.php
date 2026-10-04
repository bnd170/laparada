<?php
/**
 * Menú principal: enlaces sueltos (sin <ul>) como en el diseño.
 *
 * @package laparada
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Walker que imprime solo <a>, que es lo que espera el CSS de .nav. */
class LP_Walker_Nav extends Walker_Nav_Menu {
	public function start_lvl( &$output, $depth = 0, $args = null ) {} // phpcs:ignore
	public function end_lvl( &$output, $depth = 0, $args = null ) {} // phpcs:ignore
	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {} // phpcs:ignore

	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) { // phpcs:ignore
		if ( $depth > 0 ) {
			return; // El diseño no tiene submenús.
		}
		$current = in_array( 'current-menu-item', (array) $data_object->classes, true );
		$output .= sprintf(
			'<a href="%s"%s>%s</a>',
			esc_url( $data_object->url ),
			$current ? ' aria-current="page" style="color:var(--on-dark)"' : '',
			esc_html( $data_object->title )
		);
	}
}

function lp_primary_nav(): void {
	if ( has_nav_menu( 'primary' ) ) {
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'container'      => false,
				'items_wrap'     => '%3$s',
				'walker'         => new LP_Walker_Nav(),
				'depth'          => 1,
			)
		);
		return;
	}

	$items = array(
		array( __( 'Portero moderno', 'laparada' ), home_url( '/#portero-moderno' ), false ),
		array( __( 'Método', 'laparada' ), home_url( '/#metodo' ), false ),
		array( __( 'Proceso', 'laparada' ), home_url( '/#proceso' ), false ),
		array( __( 'Campus', 'laparada' ), home_url( '/#campus' ), false ),
		array( __( 'Planes', 'laparada' ), home_url( '/planes/' ), is_page( 'planes' ) || is_page_template( 'page-planes.php' ) ),
		array( __( 'Tienda', 'laparada' ), home_url( '/mi-cuenta/tiendaonline' ), false ),
	);
	foreach ( $items as $item ) {
		printf(
			'<a href="%s"%s>%s</a>',
			esc_url( $item[1] ),
			$item[2] ? ' aria-current="page" style="color:var(--on-dark)"' : '',
			esc_html( $item[0] )
		);
	}
}
