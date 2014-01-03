<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 * @since GP Dolomiti 1.0
 */
?>

		
			<footer class="impressum section--dark">
				<div class="grid">
					<section class="newsletter">
						<div class="container">
							<h1 class="section__title section__title--emphasized">
								<? _e("pre__newsletter__title", "gp-dolomiti"); ?>
							</h1>
							<h2>
								<? _e("pre__newsletter__subtitle", "gp-dolomiti"); ?>
							</h2>
							<?
								if(qtrans_getLanguage() == "en") { echo '<a class="btn btn--huge btn--newsletter" href="http://eepurl.com/xOMaz">Subscribe to our newsletter</a>'; }

								if(qtrans_getLanguage() == "fr") { echo '<a class="btn btn--huge btn--newsletter" href="http://eepurl.com/xOMaz">Abonner à la newsletter</a>'; }

								if(qtrans_getLanguage() == "de") { echo '<a class="btn btn--huge btn--newsletter" href="http://eepurl.com/xOMaz">Zum Newsletter anmelden</a>'; }

								if(qtrans_getLanguage() == "it") { echo '<a class="btn btn--huge btn--newsletter" href="http://eepurl.com/xOMaz">Iscriversi alla newsletter</a>'; }

							?>
						</div>
					</section>

					<section class="container">
						<p>&copy; Gran Premio Dolomiti 2014</p>

						<div class="l-organizer">
							<div class="polaroid">
								<img src="<? echo get_template_directory_uri() . '/images/rentor.jpg' ?>" alt="Rentor KG Logo">
							</div>
						</div>

						<div class="l-organizer">
							<div class="polaroid">
								<img src="<? echo get_template_directory_uri() . '/images/smt.jpg' ?>" alt="SMT Consulting Logo">
							</div>
						</div>

						<div class="l-organizer">
							<div class="polaroid">
								<img src="<? echo get_template_directory_uri() . '/images/veteran.jpg' ?>" alt="Veteran Car Team Logo">
							</div>
						</div>

						<address class="vcard">
							<!-- WAT?! -->
							<span class="fn n">
								<span class="given-name"></span>
							</span>
						 	<div class="org">SMT Consulting</div>
						 	<div class="email">
						 		<a class="value" href="mailto:hannes@granpremiodolomiti.com">hannes@granpremiodolomiti.com</a>
						 	</div>
						 	<div class="tel">
								<span class="value">+39 0473 201 253</span>
						 	</div>
						 	<div class="adr">
						  		<span class="street-address">Gampenstraße 99i</span><br/>
						  		<span class="postal-code">39012</span>
						  		<span class="locality">Meran</span><br/>
						  		<span class="country-name">Italien</span>
						 	</div>
						</address>
					</section>
				</div>
			</footer>
		</div><!-- .content__inner -->
	</div><!-- .content -->

	<?  $jsDir = get_template_directory_uri();
		$jsDir = $jsDir . "/js/";

		// Get the current page name for use in JS/CSS paths
		$currentTemplate = basename(get_page_template());
		$pos = strpos($currentTemplate, ".php");
		$currentPage = substr($currentTemplate, 0, $pos);
	?>
	<!-- RequireJS -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/require.js"></script>

	<script type="text/javascript">

		requirejs.config(
		{
			baseUrl:'<? echo get_template_directory_uri(); ?>',
			paths:
			{
				'jquery'			: 'js/imports/jquery-1.9.1',
				'modernizr'			: 'js/imports/modernizr',
				'selectivizr'		: 'js/imports/selectivizr',
				'nav'				: 'js/imports/NavController',
				'translator'		: 'js/imports/Translator',
				'hotelselection'	: 'js/imports/HotelSelection',
				'collapse'			: 'js/imports/collapse'
			},

			shim:
			{
				'modernizr': {
					exports: 'Modernizr'
				}
			}
		});

		// Load common code that includes config,
		// then load the app logic for this page.
		require(['<?php echo get_template_directory_uri(); ?>/js/common.js']);
		// // Load common code that includes config,
		// // then load the app logic for this page.
		// require(['<?php echo get_template_directory_uri(); ?>/js/common.js'], function (common)
		// {
		// 	// Load app logic for this page
		// 	require(['<? echo $jsDir . $currentPage . ".js" ?>']);
		// });
	</script>
	

<?php wp_footer(); ?>

</body>
</html>