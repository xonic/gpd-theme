<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 * @since GP Dolomiti 1.0
 */

get_header(); ?>


	<section class="not-found">
		<div class="grid">
			<h1>Oh no, something went wrong. Sorry about that.</h1>
			<a class="btn btn--huge btn--newsletter" href="<?php echo home_url(); ?>" title="Back to homepage">Let's start over!</a>
		</div>
	</section>

<? get_footer(); ?>