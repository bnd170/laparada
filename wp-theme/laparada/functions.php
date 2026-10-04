<?php
/**
 * Tema La Parada: configuración, scripts y helpers.
 *
 * @package laparada
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LP_VERSION', '1.0.4' );

require_once get_theme_file_path( 'inc/customizer.php' );
require_once get_theme_file_path( 'inc/nav.php' );
require_once get_theme_file_path( 'inc/images.php' );
require_once get_theme_file_path( 'inc/loader.php' );

add_action(
	'after_setup_theme',
	static function () {
		load_theme_textdomain( 'laparada', get_theme_file_path( 'languages' ) );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'woocommerce' );
		register_nav_menus(
			array(
				'primary' => __( 'Menú principal', 'laparada' ),
			)
		);
	}
);

/** URL de un archivo del directorio assets/ del tema. */
function lp_asset( string $file ): string {
	return get_theme_file_uri( 'assets/' . ltrim( $file, '/' ) );
}

/** Número de WhatsApp en formato internacional sin "+" (Personalizar > La Parada). */
function lp_wa_number(): string {
	return preg_replace( '/\D+/', '', (string) get_theme_mod( 'lp_whatsapp', '34610383953' ) );
}

function lp_wa_url(): string {
	return 'https://wa.me/' . lp_wa_number();
}

function lp_email(): string {
	$email = sanitize_email( (string) get_theme_mod( 'lp_email', 'info@laparadaonline.com' ) );
	return $email ? $email : 'info@laparadaonline.com';
}

add_action(
	'wp_enqueue_scripts',
	static function () {
		wp_enqueue_style(
			'laparada-fonts',
			'https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,600;0,700;0,800;1,800&family=Barlow:wght@400;500;600;700&display=swap',
			array(),
			null // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
		);
		wp_enqueue_style( 'laparada', get_stylesheet_uri(), array( 'laparada-fonts' ), LP_VERSION );

		if ( is_page_template( 'page-planes.php' ) || is_page( 'planes' ) ) {
			wp_enqueue_style( 'laparada-planes', get_theme_file_uri( 'css/planes.css' ), array( 'laparada' ), LP_VERSION );
		}

		wp_enqueue_script(
			'laparada',
			get_theme_file_uri( 'js/main.js' ),
			array(),
			LP_VERSION,
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);

		// "Uyyy" de estadio al entrar. Se puede desactivar en Personalizar > La Parada.
		if ( get_theme_mod( 'lp_uyyy', true ) ) {
			wp_enqueue_script(
				'laparada-uyyy',
				get_theme_file_uri( 'js/uyyy.js' ),
				array(),
				LP_VERSION,
				array(
					'in_footer' => true,
					'strategy'  => 'defer',
				)
			);
			wp_add_inline_script(
				'laparada-uyyy',
				'window.laParada=' . wp_json_encode( array( 'uyyyUrl' => lp_asset( 'uyyy.mp3' ) ) ) . ';',
				'before'
			);
		}
	}
);

// Preconnect a Google Fonts.
add_filter(
	'wp_resource_hints',
	static function ( array $urls, string $relation ) {
		if ( 'preconnect' === $relation ) {
			$urls[] = 'https://fonts.googleapis.com';
			$urls[] = array(
				'href'        => 'https://fonts.gstatic.com',
				'crossorigin' => 'anonymous',
			);
		}
		return $urls;
	},
	10,
	2
);

add_action(
	'wp_head',
	static function () {
		if ( is_front_page() ) {
			printf( '<link rel="preload" as="image" href="%s">' . "\n", esc_url( lp_asset( 'g13.webp' ) ) );
		}
		if ( ! has_site_icon() ) {
			printf( '<link rel="icon" href="%s">' . "\n", esc_url( lp_asset( 'logo.png' ) ) );
		}
		// Descripción por defecto solo si no hay plugin de SEO que ya la gestione.
		if ( is_front_page() && ! defined( 'WPSEO_VERSION' ) && ! defined( 'RANK_MATH_VERSION' ) ) {
			printf( '<meta name="description" content="%s">' . "\n", esc_attr( get_bloginfo( 'description' ) ) );
		}
	},
	1
);

// En la portada y en Planes el diseño no usa los estilos globales de bloques.
add_action(
	'wp_enqueue_scripts',
	static function () {
		if ( is_front_page() || is_page_template( 'page-planes.php' ) ) {
			wp_dequeue_style( 'wp-block-library' );
			wp_dequeue_style( 'wp-block-library-theme' );
			wp_dequeue_style( 'global-styles' );
			wp_dequeue_style( 'classic-theme-styles' );
		}
	},
	100
);

add_filter( 'excerpt_more', static fn() => '…' );
