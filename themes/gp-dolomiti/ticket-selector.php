<?php
/**
 * Template Name: Ticket Selector
 * The template for displaying the ticket selector
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 */

define('DONOTCACHEPAGE', true);

include("header.php"); ?>

		<div class="grid">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

		</div><!-- .grid -->

<?php include("footer--plain.php"); ?>