<?php
/**
 * Administración de imágenes: página «La Parada» en el menú lateral.
 *
 * @package laparada
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

const LP_IMAGES_PAGE = 'laparada-images';

add_action(
	'admin_menu',
	static function () {
		add_menu_page(
			__( 'Imágenes de La Parada', 'laparada' ),
			__( 'La Parada', 'laparada' ),
			'edit_theme_options',
			LP_IMAGES_PAGE,
			'lp_render_images_page',
			'dashicons-format-gallery',
			59
		);
	}
);

add_action(
	'admin_init',
	static function () {
		register_setting(
			'lp_images_group',
			LP_IMAGES_OPTION,
			array(
				'type'              => 'array',
				'sanitize_callback' => 'lp_sanitize_images',
				'default'           => array(),
			)
		);
	}
);

/** Solo IDs de imágenes reales de la biblioteca. */
function lp_clean_ids( $ids ): array {
	$out = array();
	foreach ( (array) $ids as $id ) {
		$id = absint( $id );
		if ( $id && wp_attachment_is_image( $id ) ) {
			$out[] = $id;
		}
	}
	return array_values( array_unique( $out ) );
}

function lp_sanitize_images( $input ): array {
	$input = is_array( $input ) ? $input : array();
	$old   = get_option( LP_IMAGES_OPTION, array() );
	$out   = is_array( $old ) ? $old : array();

	$out['slots'] = array();
	foreach ( array_keys( lp_image_slots() ) as $key ) {
		$ids = lp_clean_ids( array( $input['slots'][ $key ] ?? 0 ) );
		if ( $ids ) {
			$out['slots'][ $key ] = $ids[0];
		}
	}
	foreach ( array_keys( lp_image_lists() ) as $list ) {
		if ( isset( $input[ $list ] ) && is_array( $input[ $list ] ) ) {
			$out[ $list ] = lp_clean_ids( $input[ $list ] );
		}
	}
	return $out;
}

add_action(
	'admin_enqueue_scripts',
	static function ( string $hook ) {
		if ( 'toplevel_page_' . LP_IMAGES_PAGE !== $hook ) {
			return;
		}
		wp_enqueue_media();
		wp_enqueue_style( 'laparada-admin', get_theme_file_uri( 'css/admin-images.css' ), array(), LP_VERSION );
		wp_enqueue_script( 'laparada-admin', get_theme_file_uri( 'js/admin-images.js' ), array( 'jquery', 'jquery-ui-sortable' ), LP_VERSION, true );
		wp_localize_script(
			'laparada-admin',
			'lpAdmin',
			array(
				'choose'    => __( 'Elegir imagen', 'laparada' ),
				'use'       => __( 'Usar esta imagen', 'laparada' ),
				'addTitle'  => __( 'Añadir imágenes', 'laparada' ),
				'original'  => __( 'Original del diseño', 'laparada' ),
				'remove'    => __( 'Quitar', 'laparada' ),
				'removeAlt' => __( 'Quitar imagen', 'laparada' ),
			)
		);
	}
);

/** Miniatura (URL) de un adjunto, o cadena vacía. */
function lp_thumb_url( int $id ): string {
	$src = $id ? wp_get_attachment_image_src( $id, 'medium' ) : false;
	return $src ? $src[0] : '';
}

function lp_render_images_page(): void {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}
	$opt      = lp_images_option();
	$imported = isset( $opt['gallery'], $opt['gear'] );
	$groups   = lp_image_groups();
	$slots    = lp_image_slots();
	$lists    = lp_image_lists();
	?>
	<div class="wrap lp-admin">
		<h1><?php esc_html_e( 'Imágenes de La Parada', 'laparada' ); ?></h1>
		<p class="description"><?php esc_html_e( 'Cambia aquí las fotos de la web. Los textos se editan en las plantillas del tema. Usa fotos ya optimizadas (WebP o JPG de calidad media): pesan menos y la web carga antes.', 'laparada' ); ?></p>

		<?php if ( isset( $_GET['lp_imported'] ) ) : // phpcs:ignore WordPress.Security.NonceVerification ?>
			<div class="notice notice-success is-dismissible"><p>
				<?php
				printf(
					/* translators: %d: number of images */
					esc_html__( 'Imágenes del diseño importadas a la biblioteca de medios (%d).', 'laparada' ),
					absint( $_GET['lp_imported'] ) // phpcs:ignore WordPress.Security.NonceVerification
				);
				?>
			</p></div>
		<?php endif; ?>

		<?php if ( ! $imported ) : ?>
			<div class="notice notice-info lp-import">
				<p><strong><?php esc_html_e( 'Aún se usan los archivos incluidos en el tema.', 'laparada' ); ?></strong>
				<?php esc_html_e( 'Importa las imágenes del diseño a la biblioteca de medios para poder reordenar la galería y los guantes, y sustituir cualquiera. Se hace una vez y puede tardar un minuto.', 'laparada' ); ?></p>
				<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
					<input type="hidden" name="action" value="lp_import_defaults">
					<?php wp_nonce_field( 'lp_import_defaults' ); ?>
					<?php submit_button( __( 'Importar imágenes del diseño', 'laparada' ), 'primary', 'submit', false ); ?>
				</form>
			</div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'lp_images_group' ); ?>

			<nav class="lp-toc" aria-label="<?php esc_attr_e( 'Secciones', 'laparada' ); ?>">
				<?php foreach ( $groups as $gkey => $glabel ) : ?>
					<a href="#lp-<?php echo esc_attr( $gkey ); ?>"><?php echo esc_html( $glabel ); ?></a>
				<?php endforeach; ?>
				<?php foreach ( $lists as $lkey => $ldef ) : ?>
					<a href="#lp-<?php echo esc_attr( $lkey ); ?>"><?php echo esc_html( $ldef['label'] ); ?></a>
				<?php endforeach; ?>
			</nav>

			<?php foreach ( $groups as $gkey => $glabel ) : ?>
				<section class="lp-card" id="lp-<?php echo esc_attr( $gkey ); ?>">
					<h2><?php echo esc_html( $glabel ); ?></h2>
					<div class="lp-slots">
					<?php
					foreach ( $slots as $key => $def ) :
						if ( $def['group'] !== $gkey ) {
							continue;
						}
						$id    = (int) ( $opt['slots'][ $key ] ?? 0 );
						$thumb = lp_thumb_url( $id );
						$deflt = lp_asset( $def['file'] );
						?>
						<div class="lp-slot" data-default="<?php echo esc_url( $deflt ); ?>">
							<div class="lp-thumb"><img src="<?php echo esc_url( $thumb ? $thumb : $deflt ); ?>" alt=""></div>
							<div class="lp-slot-body">
								<strong><?php echo esc_html( $def['label'] ); ?></strong>
								<span class="lp-state"><?php echo $thumb ? '' : esc_html__( 'Original del diseño', 'laparada' ); ?></span>
								<p class="description"><?php echo esc_html( $def['hint'] ); ?></p>
								<input type="hidden" name="lp_images[slots][<?php echo esc_attr( $key ); ?>]" value="<?php echo esc_attr( $id ? $id : '' ); ?>">
								<button type="button" class="button lp-pick"><?php esc_html_e( 'Elegir imagen', 'laparada' ); ?></button>
								<button type="button" class="button-link lp-clear"<?php echo $thumb ? '' : ' hidden'; ?>><?php esc_html_e( 'Volver al original', 'laparada' ); ?></button>
							</div>
						</div>
					<?php endforeach; ?>
					</div>
				</section>
			<?php endforeach; ?>

			<?php foreach ( $lists as $lkey => $ldef ) : ?>
				<section class="lp-card" id="lp-<?php echo esc_attr( $lkey ); ?>">
					<h2><?php echo esc_html( $ldef['label'] ); ?></h2>
					<p class="description"><?php echo esc_html( $ldef['hint'] ); ?></p>
					<?php if ( $imported ) : ?>
						<div class="lp-list" data-name="lp_images[<?php echo esc_attr( $lkey ); ?>][]">
							<input type="hidden" name="lp_images[<?php echo esc_attr( $lkey ); ?>][]" value="">
							<ul class="lp-items">
								<?php foreach ( (array) $opt[ $lkey ] as $id ) : ?>
									<?php $thumb = lp_thumb_url( (int) $id ); ?>
									<?php if ( ! $thumb ) { continue; } ?>
									<li data-id="<?php echo esc_attr( $id ); ?>">
										<img src="<?php echo esc_url( $thumb ); ?>" alt="">
										<input type="hidden" name="lp_images[<?php echo esc_attr( $lkey ); ?>][]" value="<?php echo esc_attr( $id ); ?>">
										<button type="button" class="lp-remove" aria-label="<?php esc_attr_e( 'Quitar imagen', 'laparada' ); ?>">&times;</button>
									</li>
								<?php endforeach; ?>
							</ul>
							<p><button type="button" class="button lp-add"><?php esc_html_e( 'Añadir imágenes', 'laparada' ); ?></button>
							<span class="description"><?php esc_html_e( 'Arrastra para cambiar el orden.', 'laparada' ); ?></span></p>
						</div>
					<?php else : ?>
						<p><em><?php esc_html_e( 'Importa primero las imágenes del diseño (aviso de arriba) para editar esta lista.', 'laparada' ); ?></em></p>
					<?php endif; ?>
				</section>
			<?php endforeach; ?>

			<?php submit_button( __( 'Guardar imágenes', 'laparada' ) ); ?>
		</form>
	</div>
	<?php
}

/** Importa un archivo del tema a la biblioteca (una sola vez por archivo). */
function lp_import_file( string $file, string $alt ): int {
	$existing = get_posts(
		array(
			'post_type'      => 'attachment',
			'post_status'    => 'inherit',
			'meta_key'       => '_lp_default_file', // phpcs:ignore WordPress.DB.SlowDBQuery
			'meta_value'     => $file, // phpcs:ignore WordPress.DB.SlowDBQuery
			'fields'         => 'ids',
			'posts_per_page' => 1,
		)
	);
	if ( $existing ) {
		return (int) $existing[0];
	}

	$src = get_theme_file_path( 'assets/' . $file );
	$tmp = wp_tempnam( $file );
	if ( ! is_readable( $src ) || ! $tmp || ! copy( $src, $tmp ) ) {
		return 0;
	}
	$id = media_handle_sideload(
		array(
			'name'     => $file,
			'tmp_name' => $tmp,
		),
		0
	);
	if ( is_wp_error( $id ) ) {
		@unlink( $tmp ); // phpcs:ignore WordPress.PHP.NoSilencedErrors, WordPress.WP.AlternativeFunctions
		return 0;
	}
	update_post_meta( $id, '_lp_default_file', $file );
	if ( '' !== $alt ) {
		update_post_meta( $id, '_wp_attachment_image_alt', $alt );
	}
	return (int) $id;
}

add_action(
	'admin_post_lp_import_defaults',
	static function () {
		if ( ! current_user_can( 'upload_files' ) || ! current_user_can( 'edit_theme_options' ) ) {
			wp_die( esc_html__( 'No tienes permiso para hacer esto.', 'laparada' ), 403 );
		}
		check_admin_referer( 'lp_import_defaults' );

		require_once ABSPATH . 'wp-admin/includes/file.php';
		require_once ABSPATH . 'wp-admin/includes/media.php';
		require_once ABSPATH . 'wp-admin/includes/image.php';
		wp_raise_memory_limit( 'image' );
		set_time_limit( 600 ); // phpcs:ignore Squiz.PHP.DiscouragedFunctions

		$opt = get_option( LP_IMAGES_OPTION, array() );
		$opt = is_array( $opt ) ? $opt : array();
		$n   = 0;

		foreach ( lp_image_slots() as $key => $def ) {
			if ( ! empty( $opt['slots'][ $key ] ) ) {
				continue; // No pisar lo que ya se haya elegido.
			}
			$id = lp_import_file( $def['file'], $def['alt'] );
			if ( $id ) {
				$opt['slots'][ $key ] = $id;
				++$n;
			}
		}
		foreach ( lp_image_lists() as $list => $ldef ) {
			if ( isset( $opt[ $list ] ) ) {
				continue;
			}
			$ids = array();
			foreach ( $ldef['items'] as $it ) {
				$id = lp_import_file( $it['file'], $it['alt'] );
				if ( $id ) {
					$ids[] = $id;
					++$n;
				}
			}
			$opt[ $list ] = $ids;
		}

		update_option( LP_IMAGES_OPTION, $opt );
		wp_safe_redirect( add_query_arg( array( 'page' => LP_IMAGES_PAGE, 'lp_imported' => $n ), admin_url( 'admin.php' ) ) );
		exit;
	}
);
