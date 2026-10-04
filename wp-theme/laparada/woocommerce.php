<?php
/**
 * Envoltorio de WooCommerce (tienda, producto, carrito, cuenta).
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
    <h1 id="page-title" class="h-xl" style="font-size:clamp(2.6rem,6vw,5rem)"><?php echo esc_html( is_shop() || is_product() ? get_the_title( wc_get_page_id( 'shop' ) ) : get_the_title() ); ?></h1>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="entry" style="max-width:none"><?php woocommerce_content(); ?></div>
  </div>
</section>
<?php
get_footer();
