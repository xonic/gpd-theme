<?php
/**
 * Template Name: Contact
 * Description: The template for the contact page.
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 */

	get_header();
	
	// if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
	// 	wpcf7_enqueue_scripts();
	// 	wpcf7_enqueue_styles();
	// }
?>

<section class="contact">
	<div class="grid">
		<h1 class="section__title section__title--emphasized">
			<? _e("pre__contact__title", "gp-dolomiti"); ?>
		</h1>
		<h2>
			<? _e("pre__content__subtitle", "gp-dolomiti"); ?>
		</h2>
		<div class='contact-form'>
			<?
				// TODO: change ids to match those on http://granpremiodolomiti.com
				if(qtrans_getLanguage() == "en") { echo do_shortcode( '[contact-form-7 id="8" title="contact-EN"]' ); }

				if(qtrans_getLanguage() == "fr") { echo do_shortcode( '[contact-form-7 id="8" title="contact-FR"]' ); }

				if(qtrans_getLanguage() == "de") { echo do_shortcode( '[contact-form-7 id="8" title="contact-DE"]' ); }

				if(qtrans_getLanguage() == "it") { echo do_shortcode( '[contact-form-7 id="8" title="contact-IT"]' ); }
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>