<?php
/**
 * Template Name: Sneak Preview Template
 * Description: A Page Template that is initially used to provide basic information about the GP Dolomiti Event
 *
 * @package WordPress
 * @subpackage GP-Dolomiti
 * @since Gran Premio Dolomiti 1.0
 */
?>

<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );


	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />
<!--[if IE 7]>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-ie7.min.css">
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/screen.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- TypeKit -->
<script type="text/javascript" src="//use.typekit.net/wkm4uha.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiah6D-8-DEO6lAtyEXFvPkeohKQdhjKU&amp;sensor=false"></script>

<!-- RequireJS -->
<script data-main="<?php echo get_template_directory_uri(); ?>/js/main" src="<?php echo get_template_directory_uri(); ?>/js/require.js"></script>

<!--[if lte IE 8]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->

<!--[if lte IE 9]>
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" />
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

	<header class="branding">
		<div class="container">
			<div class="lang">
				<?php echo qtrans_generateLanguageSelectCode('text'); ?>
			</div>
			<h1 class="event-name">
				<small class="event-name__gp">Gran Premio</small>
				Dolomiti
			</h1>
		</div>
	</header>

	<section class="info">
		<? //echo qtrans_getLanguage(); ?>
		<div class="container">
			<h1 class="section__title">
				<? _e("pre__info__title", "gp-dolomiti"); ?>
			</h1>
			<h2 class="info__date">
				<time datetime="2014-07-23">
					<? _e("pre__info__start-date", "gp-dolomiti"); ?>
				</time> 
				<? _e("pre__info__to", "gp-dolomiti"); ?>
				<time datetime="2014-07-27">
					<? _e("pre__info__end-date", "gp-dolomiti"); ?>
				</time>
			</h2>

			<p>
				<? _e("pre__info__p1", "gp-dolomiti"); ?>
			</p>
			<p>
				<? _e("pre__info__p2", "gp-dolomiti"); ?>
			</p>
		</div>
	</section>

	<section class="program section--dark">
		<div class="container">
			<h1 class="section__title section__title--emphasized">
				<? _e("pre__program__title", "gp-dolomiti"); ?>
			</h1>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-22">
						<? _e("pre__day1", "gp-dolomiti"); ?>
					</time>
				</h1>
				<ol class="space-lover">
					<li class="media">
						<div class="media__img"><i class="icon-group"></i></div>
						<div class="media__bd">
							<? _e("pre__arrival", "gp-dolomiti"); ?>
						</div>
					</li>
					<li class="media">
						<div class="media__img"><i class="icon-dashboard"></i></div>
						<div class="media__bd">
							<? _e("pre__inspection", "gp-dolomiti"); ?>
						</div>
					</li>
					<li class="media">
						<div class="media__img"><i class="icon-briefcase"></i></div>
						<div class="media__bd">
							<? _e("pre__check-in", "gp-dolomiti"); ?>
						</div>
					</li>
					<li class="media">
						<div class="media__img"><i class="icon-food"></i></div>
						<div class="media__bd">
							<? _e("pre__day1__dinner", "gp-dolomiti"); ?>
						</div>
					</li>
				</ol>
			</section>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-23">
							<? _e("pre__day2", "gp-dolomiti"); ?>
						</time>
				</h1>

				<table class="day__route">
					<thead>
						<tr>
							<th class="route__icon"></th>
							<th class="route__location">
								<? _e("pre__location", "gp-dolomiti"); ?>
							</th>
							<th class="route__altitude">
								<? _e("pre__altitude", "gp-dolomiti"); ?>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="route__icon"><i class="icon-flag-alt"></i></td>
							<td class="route__location">
							<? _e("pre__meran", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__jaufen", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__jaufen__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__sterzing", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__sterzing__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__penser", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__penser__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__bozen", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__mendel", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__mendel__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__fondo", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__fondo__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__gampen", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__gampen__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-flag-checkered"></i></td>
							<td class="route__location">
								<? _e("pre__meran", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="day__dinner media">
					<div class="media__img"><i class="icon-food"></i></div>
					<div class="media__bd">
						<p>
							<? _e("pre__day2__dinner", "gp-dolomiti"); ?>
						</p>
					</div>
				</div>

				<a class="map-link" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Jaufenpass,+St.+Leonhard+in+Passeier,+S%C3%BCdtirol,+Italien+to:Sterzing,+S%C3%BCdtirol,+Italien+to:Penser+Joch,+Sarntal,+S%C3%BCdtirol,+Italien+to:Bozen,+S%C3%BCdtirol,+Italien+to:Mendelpass,+Mendola,+Trient,+Italien+to:Fondo,+Trient,+Italien+to:Gampenpass,+Unsere+Liebe+Frau+im+Walde-St.+Felix,+S%C3%BCdtirol,+Italien+to:Meran,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.65415,11.299438&amp;sspn=0.945449,1.141205&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFbWeygIdu62sAClnVbN9b7KCRzEgTnEuiAkHHQ%3BFYCGywIdk3auACntTyuRQFOdRzH5_NYp3pHP7A%3BFZtdygIddXWuACn_HvJzkquCRzFQTnEuiAkHHQ%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ%3BFTBExAIdNgKrACkZljiUJoWCRzFATnEuiAkHHQ%3BFcKQxAIdKfypACmxF1oGJ5CCRzFXqmBhJJ6ZoQ%3BFfz_xQIdHo-pACl5PXXqppaCRzH_Wz3I4d1znw%3BFb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg&amp;oq=meran&amp;mra=ls&amp;t=m&amp;z=10">
					<div class="map-container space-lover">
						<div id="map-day-one" class="map-canvas"></div>
					</div>
				</a>
			</section>

			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-24">
						<? _e("pre__day3", "gp-dolomiti"); ?>
					</time>
				</h1>

				<table class="day__route">
					<thead>
						<tr>
							<th class="route__icon"></th>
							<th class="route__location">
								<? _e("pre__location", "gp-dolomiti"); ?>
							</th>
							<th class="route__altitude">
								<? _e("pre__altitude", "gp-dolomiti"); ?>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="route__icon"><i class="icon-flag-alt"></i></td>
							<td class="route__location">
								<? _e("pre__bozen", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__ortisei", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__ortisei__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__wolkenstein", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__wolkenstein__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__groedner", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__groedner__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__corvara", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__corvara__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__campolungo", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__campolungo__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__pordoi", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__pordoi__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__sella", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__sella__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__ortisei", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__ortisei__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-flag-checkered"></i></td>
							<td class="route__location">
								<? _e("pre__bozen", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="day__dinner media">
					<div class="media__img"><i class="icon-food"></i></div>
					<div class="media__bd">
						<p>
							<? _e("pre__day3__dinner", "gp-dolomiti"); ?>
						</p>
					</div>
				</div>
				
				<a class="map-link" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Bozen,+S%C3%BCdtirol,+Italien&amp;daddr=V%C3%B6ls+am+Schlern,+S%C3%BCdtirol,+Italien+to:Corvara,+S%C3%BCdtirol,+Italien+to:Passo+Campolongo,+Livinallongo+del+Col+di+Lana,+Provinz+Belluno,+Italien+to:Pordoijoch,+Livinallongo+del+Col+di+Lana,+Provinz+Belluno,+Italien+to:Sellajoch,+Canazei,+Trient,+Italien+to:Ortisei-St+Ulrich,+Italien+to:46.5713068,11.5813223+to:Bozen,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.537137,11.621475&amp;sspn=0.473277,1.056747&amp;geocode=FfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ%3BFTKixQId5aWvACmNN9M8gHN4RzE2QTtdJm7-aw%3BFQ5WxgId4i-1ACmfprHjBj94RzEkeMnpGUOq3A%3BFbvJxQIdKxK1ACmZG28WmUB4RzFwTnEuiAkHHQ%3BFYVHxQId2060ACnROCyBNEB4RzGA64MuiAkHHQ%3BFaCIxQIdcEqzAClFDDg06Gp4RzGQ64MuiAkHHQ%3BFXunxgIdWyKyACm524Cn-RJ4RzE7oJYosjXYOg%3BFSqfxgIdirewAClpFHQ3GQ14RzF_8Yl01LNn5Q%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ&amp;oq=boz&amp;mra=pr&amp;via=7&amp;t=m&amp;z=11">
					<div class="map-container space-lover">
						<div id="map-day-two" class="map-canvas"></div>
					</div>
				</a>
			</section>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-25">
						<? _e("pre__day4", "gp-dolomiti"); ?>
					</time>
				</h1>

				<table class="day__route">
					<thead>
						<tr>
							<th class="route__icon"></th>
							<th class="route__location">
								<? _e("pre__location", "gp-dolomiti"); ?>
							</th>
							<th class="route__altitude">
								<? _e("pre__altitude", "gp-dolomiti"); ?>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="route__icon"><i class="icon-flag-alt"></i></td>
							<td class="route__location">
								<? _e("pre__meran", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__glurns", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__glurns__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__stilfs", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__stilfs__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-flag-checkered"></i></td>
							<td class="route__location">
								<? _e("pre__meran", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="day__dinner media">
					<div class="media__img"><i class="icon-food"></i></div>
					<div class="media__bd">
						<p>
							<? _e("pre__day4__dinner", "gp-dolomiti"); ?>
						</p>
					</div>
				</div>
				<a class="map-link" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Glurns,+S%C3%BCdtirol,+Italien+to:Stilfserjoch,+Stelvio,+S%C3%BCdtirol,+Italien+to:Passo+Tonale,+Passo+del+Tonale,+Trient,+Italien+to:Meran,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;ll=46.444481,10.72403&amp;spn=0.949108,1.141205&amp;sll=46.444481,10.71579&amp;sspn=0.949108,1.141205&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFb_kxwIdq9SgACl5L6ITDiKDRzEwMpEVhwkHBA%3BFREJxgIdnsSfACEbbJ7SxU1d1inPjoL65BqDRzEbbJ7SxU1d1g%3BFU_iwQId5o6hACFx-bdxAzejBCnnyF5jClSCRzFx-bdxAzejBA%3BFb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg&amp;oq=meran&amp;mra=ls&amp;t=m&amp;z=10">
					<div class="map-container space-lover">
						<div id="map-day-three" class="map-canvas"></div>
					</div>
				</a>
			</section>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-26">
						<? _e("pre__day5", "gp-dolomiti"); ?>
					</time>
				</h1>

				<table class="day__route">
					<thead>
						<tr>
							<th class="route__icon"></th>
							<th class="route__location">
								<? _e("pre__location", "gp-dolomiti"); ?>
							</th>
							<th class="route__altitude">
								<? _e("pre__altitude", "gp-dolomiti"); ?>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="route__icon"><i class="icon-flag-alt"></i></td>
							<td class="route__location">
								<? _e("pre__meran", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__lana", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__lana__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__andrian", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__andrian__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__pauls", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__pauls__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__eppan", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__eppan__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__kaltern", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__kaltern__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-map-marker"></i></td>
							<td class="route__location">
								<? _e("pre__neumarkt", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__neumarkt__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
						<tr>
							<td class="route__icon"><i class="icon-flag-checkered"></i></td>
							<td class="route__location">
								<? _e("pre__bozen", "gp-dolomiti"); ?>
							</td>
							<td class="route__altitude">
								<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="day__dinner media">
					<div class="media__img"><i class="icon-food"></i></div>
					<div class="media__bd">
						<p>
							<? _e("pre__day5__dinner", "gp-dolomiti"); ?>
						</p>
					</div>
				</div>

				<a class="map-link" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Lana,+S%C3%BCdtirol,+Italien+to:Andrian,+S%C3%BCdtirol,+Italien+to:St.+Pauls,+S%C3%BCdtirol,+Italien+to:Eppan,+S%C3%BCdtirol,+Italien+to:Kaltern,+S%C3%BCdtirol,+Italien+to:Neumarkt,+S%C3%BCdtirol,+Italien+to:Bozen,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.571425,11.20423&amp;sspn=0.236725,0.285301&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFYc8xwIdSlWqACmvbK1awr2CRzGMWIT3SGkYqQ%3BFavSxQIdl2mrACm96caqk5mCRzEh49uDGewsJQ%3BFWkZxQIdPtCrACkxGLhymJuCRzFtp_GuK0RRGA%3BFTolxQIdH6GrACkBkS3jCJuCRzEwMJEVhwkHBA%3BFW73wwIdZoqrACnj_C3kfoSCRzHgMJEVhwkHBA%3BFZxuwgIddhGsACkPypVuWYCCRzHAMZEVhwkHBA%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ&amp;oq=bozen&amp;mra=ls&amp;t=m&amp;z=11">
					<div class="map-container space-lover">
						<div id="map-day-four" class="map-canvas"></div>
					</div>
				</a>
			</section>
			<section class="day">
				<h1 class="day__date">
					<time datetime="2014-07-27">
						<? _e("pre__day6", "gp-dolomiti"); ?>
					</time>
				</h1>
				<div class="day__special media">
					<div class="media__img"><i class="icon-trophy"></i></div>
					<div class="media__bd">
						<p>
							<? _e("pre__day6__ceremony", "gp-dolomiti"); ?>
						</p>
					</div>
				</div>
			</section>
		</div>
	</section>

	<section class="rules">
		<div class="container">
			<h1 class="section__title section__title--emphasized">
				<? _e("pre__rules__title", "gp-dolomiti"); ?>
			</h1>
			<h2>
				<? _e("pre__rules__subtitle", "gp-dolomiti"); ?>
			</h2>
			<dl>
				<dt>
					<? _e("pre__rules__a", "gp-dolomiti"); ?>
				</dt>
				<dd>
					<? _e("pre__rules__a__year", "gp-dolomiti"); ?>
				</dd>
				<dt>
					<? _e("pre__rules__b", "gp-dolomiti"); ?>
				</dt>
				<dd>
					<? _e("pre__rules__b__year", "gp-dolomiti"); ?>
				</dd>
				<dt>
					<? _e("pre__rules__c", "gp-dolomiti"); ?>
				</dt>
				<dd>
					<? _e("pre__rules__c__year", "gp-dolomiti"); ?>
				</dd>
				<dt>
					<? _e("pre__rules__d", "gp-dolomiti"); ?>
				</dt>
				<dd>
					<? _e("pre__rules__d__year", "gp-dolomiti"); ?>
				</dd>
				<dt>
					<? _e("pre__rules__e", "gp-dolomiti"); ?>
				</dt>
				<dd>
					<? _e("pre__rules__e__year", "gp-dolomiti"); ?>
				</dd>
			</dl>
		</div>
	</section>

	<section class="newsletter section--dark">
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

	<section class="contact">
		<div class="container">
			<h1 class="section__title section__title--emphasized">
				<? _e("pre__contact__title", "gp-dolomiti"); ?>
			</h1>
			<h2>
				<? _e("pre__content__subtitle", "gp-dolomiti"); ?>
			</h2>
			<div class='contact-form'>
				<?
					// id="11" on http://granpremiodolomiti.com
					if(qtrans_getLanguage() == "en") { echo do_shortcode( '[contact-form-7 id="11" title="contact-EN"]' ); }

					if(qtrans_getLanguage() == "fr") { echo do_shortcode( '[contact-form-7 id="14" title="contact-FR"]' ); }

					if(qtrans_getLanguage() == "de") { echo do_shortcode( '[contact-form-7 id="12" title="contact-DE"]' ); }

					if(qtrans_getLanguage() == "it") { echo do_shortcode( '[contact-form-7 id="13" title="contact-IT"]' ); }
				?>
			</div>
		</div>
	</section>
	<footer class="impressum section--dark">
		<div class="container">
			<p>&copy; Gran Premio Dolomiti 2014</p>
			<address class="vcard">
				<!-- WAT?! -->
				<span class="fn n">
					<span class="given-name"></span>
				</span>
			 	<div class="org">Rentor KG des Biasi Gerhard</div>
			 	<div class="adr">
			  		<span class="street-address">Piavestr. 27</span><br/>
			  		<span class="postal-code">39012</span>
			  		<span class="locality">Meran</span><br/>
			  		<span class="country-name">Italien</span>
			 	</div>
			</address>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
