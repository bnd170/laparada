<?php
/**
 * Página no encontrada.
 *
 * @package laparada
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>
<section class="page-hero plain" aria-labelledby="page-title">
  <div class="container">
    <p class="eyebrow">404</p>
    <h1 id="page-title" class="h-xl" style="margin-top:18px;font-size:clamp(2.6rem,6vw,5rem)"><?php esc_html_e( 'Esta', 'laparada' ); ?> <span class="accent"><?php esc_html_e( 'parada no existe.', 'laparada' ); ?></span></h1>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="entry">
      <p><?php esc_html_e( 'La página que buscas no está aquí. Prueba a buscar o vuelve al inicio.', 'laparada' ); ?></p>
		<?php get_search_form(); ?>
      <p><a class="btn btn-wa" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Volver al inicio', 'laparada' ); ?></a></p>
    </div>
  </div>
</section>
<?php
get_footer();
