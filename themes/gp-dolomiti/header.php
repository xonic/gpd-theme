<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 * @since GP Dolomiti 1.0
 */
	// Get the current page name for use in JS/CSS paths
	$currentTemplate = basename(get_page_template());
	$pos = strpos($currentTemplate, ".php");
	$currentPage = substr($currentTemplate, 0, $pos);
	if($currentPage == "") $currentPage = "page";
	$currentLang = qtrans_getLanguage();

?><!DOCTYPE html>
<!--[if IE 7]>
<html id="ie7" class="no-mq" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="no-mq" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<!-- basename -->
<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>
<!-- $currentPage -->
<?php echo '<!-- ' . $currentPage . ' -->'; ?>
<!-- page ID -->
<?php echo '<!-- ' . get_the_ID() . ' -->'; ?>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0" />
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			global $page, $paged;

			wp_title( '|', true, 'right' );

			// Add the blog name.
			bloginfo( 'name' );

			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";

			// Add a page number if necessary:
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

			?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri() . '/css/' . $currentPage . '.css' ?>" />
		<!--[if IE 7]>
			<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/font-awesome-ie7.min.css' ?>">
		<![endif]-->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/font-awesome.min.css' ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<!-- TypeKit -->
		<script type="text/javascript" src="//use.typekit.net/wkm4uha.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiah6D-8-DEO6lAtyEXFvPkeohKQdhjKU&amp;sensor=false"></script>-->


		<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/imports/selectivizr-min.js" type="text/javascript"></script>
		<![endif]-->
		<?php

			/* Always have wp_head() just before the closing </head>
			 * tag of your theme, or you will break many plugins, which
			 * generally use this hook to add elements to <head> such
			 * as styles, scripts, and meta tags.
			 */
			wp_head();
		?>
	</head>

	<body <?php body_class(); ?>>
			<div class="flyout">
				<div class="grid cf">
					<!--[if lte IE 8]>
					<img class="mountains" src="<?php echo get_template_directory_uri(); ?>/images/gpd-logo--on-dark--ie.png" alt="Gran Premio Dolomiti Logo">
					<![endif]-->
					<a href="/" title="<? _e('<!--:en-->Back to<!--:--><!--:de-->Zurück zu<!--:--><!--:it-->Ritorna a<!--:--><!--:fr-->Retour à<!--:-->'); ?> Gran Premio Dolomiti">
						<div class="nav-logo">
							<img class="nav-logo__mountains" src="<?php echo get_template_directory_uri(); ?>/images/gpd-logo--mountains--dark.svg" alt="Gran Premio Dolomiti Logo"	>
							<img class="nav-logo__text" src="<?php echo get_template_directory_uri(); ?>/images/gpd-logo--text.svg" alt="Gran Premio Dolomiti Logo"	>
						</div>
					</a>
					<a class="flyout__toggle js-flyout__toggle" href="javascript:void(0)"><i class="fa fa-bars"></i><i class="fa fa-times"></i></a>
					<nav class="nav-main">
						<? wp_nav_menu( array( 'theme_location' => 'nav-main' ) ); ?>
					</nav>
					<div class="lang">
						<?php echo qtrans_generateLanguageSelectCode('text'); ?>
					</div>
				</div>
			</div>
			<div class="content">
				<header id="js-branding" class="branding" role="banner">
					<div class="branding__wrapper">
						<a id="js-logo" class="branding__logo" href="/" title="<? _e('<!--:en-->Back to<!--:--><!--:de-->Zurück zu<!--:--><!--:it-->Ritorna a<!--:--><!--:fr-->Retour à<!--:-->'); ?> Gran Premio Dolomiti">
							<h1 class="a11y">
								Gran Premio Dolomiti
							</h1>
						</a>
					</div>
				</header>

				<div class="content__inner">
