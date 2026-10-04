<?php
/**
 * Entrada del blog.
 *
 * @package laparada
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
while ( have_posts() ) :
	the_post();
	?>
<section class="page-hero plain" aria-labelledby="page-title">
  <div class="container">
    <h1 id="page-title" class="h-xl" style="font-size:clamp(2.4rem,5.5vw,4.4rem)"><?php the_title(); ?></h1>
    <p class="entry-meta"><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time></p>
  </div>
</section>
<section class="section">
  <div class="container">
    <article <?php post_class( 'entry' ); ?>>
		<?php
		if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'large' );
		}
		the_content();
		wp_link_pages();
		?>
    </article>
	<?php if ( comments_open() || get_comments_number() ) : ?>
    <div class="entry" style="margin-top:56px"><?php comments_template(); ?></div>
	<?php endif; ?>
  </div>
</section>
	<?php
endwhile;
get_footer();
