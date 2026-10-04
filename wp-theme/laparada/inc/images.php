<?php
/**
 * Imágenes configurables: lectura de la opción y salida en las plantillas.
 *
 * Todo vive en UNA sola opción (`lp_images`, autoload) con IDs de la biblioteca de medios:
 *   array(
 *     'slots'   => array( 'hero_main' => 123, ... ),
 *     'gallery' => array( 45, 46, ... ),   // si no existe la clave, se usan las imágenes del diseño
 *     'gear'    => array( ... ),
 *   )
 * Sin configurar nada, la web se ve con los archivos de assets/.
 *
 * @package laparada
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_theme_file_path( 'inc/defaults.php' );

const LP_IMAGES_OPTION = 'lp_images';

/** Opción ya leída; precarga en una sola consulta los adjuntos usados. */
function lp_images_option(): array {
	static $opt = null;
	if ( null !== $opt ) {
		return $opt;
	}
	$opt = get_option( LP_IMAGES_OPTION, array() );
	$opt = is_array( $opt ) ? $opt : array();

	$ids = array_map( 'absint', (array) ( $opt['slots'] ?? array() ) );
	foreach ( array( 'gallery', 'gear' ) as $list ) {
		$ids = array_merge( $ids, array_map( 'absint', (array) ( $opt[ $list ] ?? array() ) ) );
	}
	$ids = array_values( array_unique( array_filter( $ids ) ) );
	if ( $ids ) {
		_prime_post_caches( $ids, false, true );
	}
	return $opt;
}

/** HTML de <img> con los archivos del diseño (cuando no hay imagen configurada). */
function lp_default_img( array $def, array $attr = array() ): string {
	$attr = array_merge(
		array(
			'src'      => lp_asset( $def['file'] ),
			'alt'      => $def['alt'],
			'width'    => $def['w'],
			'height'   => $def['h'],
			'decoding' => 'async',
		),
		$attr
	);
	$html = '<img';
	foreach ( $attr as $name => $value ) {
		if ( false === $value || null === $value ) {
			continue;
		}
		$html .= sprintf( ' %s="%s"', esc_attr( $name ), esc_attr( (string) $value ) );
	}
	return $html . '>';
}

/**
 * HTML de <img> para un adjunto. El alt sale de la biblioteca de medios; si está vacío se usa el del diseño.
 * Con $decorative = true el alt se deja vacío siempre (logo, fondos).
 */
function lp_attachment_img( int $id, string $size, string $fallback_alt, bool $decorative, array $attr = array() ): string {
	if ( ! $id || ! wp_attachment_is_image( $id ) ) {
		return '';
	}
	$alt = $decorative ? '' : trim( (string) get_post_meta( $id, '_wp_attachment_image_alt', true ) );
	if ( ! $decorative && '' === $alt ) {
		$alt = $fallback_alt;
	}
	return wp_get_attachment_image( $id, $size, false, array_merge( array( 'alt' => $alt ), $attr ) );
}

/** Imagen de un hueco del diseño. */
function lp_get_image( string $key, array $attr = array(), ?string $size = null ): string {
	$slots = lp_image_slots();
	if ( ! isset( $slots[ $key ] ) ) {
		return '';
	}
	$def  = $slots[ $key ];
	$opt  = lp_images_option();
	$html = lp_attachment_img( (int) ( $opt['slots'][ $key ] ?? 0 ), $size ?? $def['size'], $def['alt'], '' === $def['alt'], $attr );
	return $html ? $html : lp_default_img( $def, $attr );
}

function lp_image( string $key, array $attr = array(), ?string $size = null ): void {
	echo lp_get_image( $key, $attr, $size ); // phpcs:ignore WordPress.Security.EscapeOutput -- HTML generado por WordPress/escapado arriba.
}

/**
 * Elementos de una lista (galería o guantes).
 *
 * @return array<int,array{html:string,full:string,w:int,h:int,alt:string}>
 */
function lp_list_items( string $list ): array {
	$lists = lp_image_lists();
	if ( ! isset( $lists[ $list ] ) ) {
		return array();
	}
	$def   = $lists[ $list ];
	$opt   = lp_images_option();
	$items = array();

	if ( 'gallery' === $list ) {
		lp_enqueue_lightbox();
	}

	if ( isset( $opt[ $list ] ) && is_array( $opt[ $list ] ) ) {
		foreach ( array_map( 'absint', $opt[ $list ] ) as $id ) {
			if ( ! $id || ! wp_attachment_is_image( $id ) ) {
				continue;
			}
			$alt  = trim( (string) get_post_meta( $id, '_wp_attachment_image_alt', true ) );
			$full = wp_get_attachment_image_src( $id, 'full' );
			$items[] = array(
				'html' => lp_attachment_img( $id, $def['size'], '', false, array( 'loading' => 'lazy' ) ),
				'full' => $full ? $full[0] : '',
				'w'    => $full ? (int) $full[1] : 0,
				'h'    => $full ? (int) $full[2] : 0,
				'alt'  => $alt,
			);
		}
		return $items;
	}

	foreach ( $def['items'] as $it ) {
		$items[] = array(
			'html' => lp_default_img( $it, array( 'loading' => 'lazy' ) ),
			'full' => lp_asset( $it['file'] ),
			'w'    => $it['w'],
			'h'    => $it['h'],
			'alt'  => $it['alt'],
		);
	}
	return $items;
}

/** Script y estilos del visor de galería (solo donde hay galería). */
function lp_enqueue_lightbox(): void {
	wp_enqueue_script(
		'laparada-lightbox',
		get_theme_file_uri( 'js/lightbox.js' ),
		array(),
		LP_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
	wp_localize_script(
		'laparada-lightbox',
		'laParadaLb',
		array(
			'close' => __( 'Cerrar', 'laparada' ),
			'prev'  => __( 'Imagen anterior', 'laparada' ),
			'next'  => __( 'Imagen siguiente', 'laparada' ),
			'label' => __( 'Galería de imágenes', 'laparada' ),
		)
	);
}

if ( is_admin() ) {
	require_once get_theme_file_path( 'inc/admin-images.php' );
}
