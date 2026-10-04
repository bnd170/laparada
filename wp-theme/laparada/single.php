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
    <p class="eyebrow"><?php echo esc_html( get_the_date() ); ?></p>
    <h1 id="page-title" class="h-xl" style="margin-top:18px;font-size:clamp(2.4rem,5.5vw,4.4rem)"><?php the_title(); ?></h1>
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
