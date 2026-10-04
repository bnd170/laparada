<?php
/**
 * Listados (blog, archivos, búsqueda).
 *
 * @package laparada
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();

if ( is_search() ) {
	/* translators: %s: search term */
	$lp_title = sprintf( __( 'Resultados para «%s»', 'laparada' ), get_search_query() );
} elseif ( is_archive() ) {
	$lp_title = wp_strip_all_tags( get_the_archive_title() );
} else {
	$lp_title = __( 'Novedades', 'laparada' );
}
?>
<section class="page-hero plain" aria-labelledby="page-title">
  <div class="container">
    <h1 id="page-title" class="h-xl" style="font-size:clamp(2.6rem,6vw,5rem)"><?php echo esc_html( $lp_title ); ?></h1>
  </div>
</section>
<section class="section">
  <div class="container">
	<?php if ( have_posts() ) : ?>
    <div class="posts">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
      <article <?php post_class( 'post-card' ); ?>>
			<?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"><?php the_post_thumbnail( 'medium_large' ); ?></a>
			<?php endif; ?>
        <div class="post-card-body">
          <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 28 ) ); ?></p>
        </div>
      </article>
		<?php endwhile; ?>
    </div>
		<?php
		the_posts_pagination(
			array(
				'prev_text' => '←',
				'next_text' => '→',
			)
		);
		?>
	<?php else : ?>
    <div class="entry">
      <p><?php esc_html_e( 'No hay nada que mostrar aquí todavía.', 'laparada' ); ?></p>
		<?php get_search_form(); ?>
    </div>
	<?php endif; ?>
  </div>
</section>
<?php
get_footer();
