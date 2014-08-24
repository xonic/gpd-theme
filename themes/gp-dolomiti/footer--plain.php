<?php
/**
 * The template for displaying the plain footer on registration pages.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 * @since GP Dolomiti 1.0
 */
?>

		
			<footer class="impressum section">
				<div class="grid">

					<section class="container">

						<div class="l-organizer">
							<div class="polaroid">
								<img src="<? echo get_template_directory_uri() . '/images/merano.jpg' ?>" alt="Meran Logo">
							</div>
						</div>

						<div class="l-organizer">
							<div class="polaroid">
								<img src="<? echo get_template_directory_uri() . '/images/veteran.jpg' ?>" alt="Veteran Car Team Logo">
							</div>
						</div>

						<div class="l-organizer">
							<div class="polaroid">
								<img src="<? echo get_template_directory_uri() . '/images/suedtirol.jpg' ?>" alt="Südtirol Logo">
							</div>
						</div>

					</section>

					<p>
						&copy; Gran Premio Dolomiti <?php echo date('Y'); ?>
						<br>
						<a href="mailto:hello@granpremiodolomiti.com" title="E-Mail">hello@granpremiodolomiti.com</a>
					</p>
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
				'scrollcontroller'	: 'js/imports/ScrollController',
				'collapse'			: 'js/imports/CollapsingController',
				'fx'				: 'js/imports/fx'
			},

			shim:
			{
				'modernizr': {
					exports: 'Modernizr'
				}
			}
		});
		
		require(['<?php echo get_template_directory_uri(); ?>/js/common.js']);
	</script>
	

<?php wp_footer(); ?>

</body>
</html>