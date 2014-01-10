<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 * @since GP Dolomiti 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<h1 class="section__title section__title--emphasized"><?php the_title(); ?></h1>

		<div class="form-wrapper">
			
			<?php the_content(); ?>

		</div>

	</article><!-- #post-<?php the_ID(); ?> -->
