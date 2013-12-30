<?php
/**
 * Template Name: Event Registration Success
 * Description: The page template for the event registration
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 */

get_header(); ?>

<section class="success">
	<div class="grid">
		<h1 class="section__title section__title--emphasized">
			Great to have you with us
			<? //_e("pre__rules__title", "gp-dolomiti"); ?>
		</h1>
		<? while ( have_posts() ) : the_post(); ?>

			<? the_content(); ?>

		<? endwhile; // end of the loop. ?>
	</div>
</section>

<?php get_footer(); ?>