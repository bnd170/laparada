<?php
/**
 * Páginas genéricas.
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
    <h1 id="page-title" class="h-xl" style="font-size:clamp(2.6rem,6vw,5rem)"><?php the_title(); ?></h1>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="entry"><?php the_content(); ?></div>
  </div>
</section>
	<?php
endwhile;
get_footer();
