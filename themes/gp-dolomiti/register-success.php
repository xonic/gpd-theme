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
			<? _e("<!--:en-->Great to have you with us<!--:--><!--:de-->Schön, Sie dabei zu haben<!--:--><!--:it-->Registrazione completa<!--:--><!--:fr-->Enregistrement complet<!--:-->") ?>
		</h1>
		<? while ( have_posts() ) : the_post(); ?>

			<? the_content(); ?>

		<? endwhile; // end of the loop. ?>
	</div>
</section>

<?php get_footer(); ?>