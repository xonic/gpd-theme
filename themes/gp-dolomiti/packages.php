<?php
/**
 * Template Name: Packages
 * Description: The page template for the available packages and pricing.
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 */

	$contactUrl = get_site_url() . '/contact';

	if(function_exists('qtrans_convertURL'))
	{
		$contactUrl = qtrans_convertURL($contactUrl);
	}


get_header(); ?>

<section class="packages">
	<div class="grid">
		<section class="subsection">
	
			<h1 class="section__title section__title--emphasized">
				<? _e("<!--:en-->Packages<!--:--><!--:de-->Pakete<!--:--><!--:it-->Pacchetti Partecipazione<!--:--><!--:fr-->Forfaits<!--:-->"); ?>
			</h1>

			<h2 class="section__subtitle"><? _e("<!--:en-->All packages are valid for<!--:--><!--:de-->Alle Pakete gelten für<!--:--><!--:it-->Tutti i pacchetti valgono per<!--:--><!--:fr-->Tous les forfaits sont valables pour<!--:-->"); ?></h2>

			<div class="l-feature">

				<div class="feature media">

					<div class="media__img feature__text--monstrous">1</div>

					<div class="media__bd">
						<div class="feature__title"><? _e("<!--:en-->vehicle<!--:--><!--:de-->Fahrzeug<!--:--><!--:it-->veicolo<!--:--><!--:fr-->voiture<!--:-->"); ?></div>
						<div class="feature__img"><i class="fa fa-car fa-4x"></i></div>
					</div>

				</div>

			</div>

			<div class="l-feature">

				<div class="feature media">

					<div class="media__img feature__text--monstrous">2</div>

					<div class="media__bd">
						<div class="feature__title"><? _e("<!--:en-->persons<!--:--><!--:de-->Personen<!--:--><!--:it-->persone<!--:--><!--:fr-->personnes<!--:-->"); ?></div>
						<div class="feature__img"><i class="fa fa-user fa-4x"></i></div>
					</div>

				</div>

			</div>

			<h2 class="section__subtitle"><? _e("<!--:en-->they include<!--:--><!--:de-->sie beinhalten<!--:--><!--:it-->contengono<!--:--><!--:fr-->ils comprennent<!--:-->"); ?></h2>

			<div class="l-package__summary">
				<ul class="package__summary cf">
					<li class="media"><div class="media__img"><i class="fa fa-fw fa-2x fa-road"></i></div><div class="media__bd"><? _e("<!--:en-->Race participation<!--:--><!--:de-->Die Teilnahme am Rennen<!--:--><!--:it-->La partecipazione alla gara<!--:--><!--:fr-->Participation<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-fw fa-2x fa-moon-o"></i></div><div class="media__bd"><? _e("<!--:en-->A double room<!--:--><!--:de-->Ein Doppelzimmer<!--:--><!--:it-->Una camera doppia<!--:--><!--:fr-->Hébergement<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-fw fa-2x fa-cutlery"></i></div><div class="media__bd"><? _e("<!--:en-->Lunch catering<!--:--><!--:de-->Mittagsverpflegung<!--:--><!--:it-->Sostenimento<!--:--><!--:fr-->Restauration<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-fw fa-2x fa-glass"></i></div><div class="media__bd"><? _e("<!--:en-->5 Dinner events<!--:--><!--:de-->5 Dinner Events<!--:--><!--:it-->5 Dinner Events<!--:--><!--:fr-->5 Dinner Events<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-fw fa-2x fa-tags"></i></div><div class="media__bd"><? _e("<!--:en-->Official clothing<!--:--><!--:de-->Offizielle Bekleidung<!--:--><!--:it-->Abbigliamento ufficiale<!--:--><!--:fr-->Vêtements officiels<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-fw fa-2x fa-lock"></i></div><div class="media__bd"><? _e("<!--:en-->A safe parking lot<!--:--><!--:de-->Einen sicheren Parkplatz<!--:--><!--:it-->Un parcheggio sicuro<!--:--><!--:fr-->Parking sécurisé<!--:-->"); ?></div></li>
				</ul>
			</div>

			<h2 class="section__subtitle"><? _e("<!--:en-->and offer different hotels<!--:--><!--:de-->und bieten unterschiedliche Hotels<!--:--><!--:it-->ed offrono alberghi differenti<!--:--><!--:fr-->et divers hôtels<!--:-->"); ?></h2>

			<div class="text--centered">
				<a class="package__action btn btn--primary btn--register" href="<? echo get_site_url(); _e('<!--:en-->/register/?lang=en<!--:--><!--:de-->/register/?lang=de<!--:--><!--:it-->/register/?lang=it<!--:--><!--:fr-->/register/?lang=fr<!--:-->'); ?>"><? _e("<!--:en-->Register Premium Now<!--:--><!--:de-->Jetzt Premium anmelden<!--:--><!--:it-->Vai alla registrazione Premium<!--:--><!--:fr-->Inscrivez-vous maintenant<!--:-->"); ?></a>
				<div class="text--small"><? _e("<!--:en-->Premium hotels<!--:--><!--:de-->Premium Hotels<!--:--><!--:it-->Alberghi Premium<!--:--><!--:fr-->Hôtel Premium<!--:-->"); ?>: <a href="http://hoteltermemerano.com" title="Hotel Terme">Hotel Terme Merano</a>, <a href="http://meranerhof.it" title="Meranerhof">Meranerhof</a></div>
			</div>

		</section>

		<h1 class="section__title section__title--emphasized">
			<? _e("<!--:en-->Platinum Hotels<!--:--><!--:de-->Platinum Hotels<!--:--><!--:it-->Alberghi Platinum<!--:--><!--:fr-->Platinum Hotel<!--:-->"); ?>
		</h1>

		<section class="subsection">

			<h2 class="subsection__heading"><a href="http://ottmanngut.it" title="<? _e("<!--:en-->View Hotel Page<!--:--><!--:de-->Seite des Hotels ansehen<!--:--><!--:it-->Mostra la pagina dell' albergo<!--:--><!--:fr-->Voir l'hôtel<!--:-->"); ?>">Hotel Ottmangut Suite</a></h2>

			<section class="slider slider--row-fixed">
				<ul class="slider__slides slider__slides--contains-3">
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--1"></div>
							</div>
						</div>
					</li>
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--2"></div>
							</div>
						</div>
					</li>
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--3"></div>
							</div>
						</div>
					</li>
				</ul>
			</section>

			<div id="ottmangut-description" class="collapse-bd" data-collapse-group="ottmangut">
				<div class="collapse-inner">
					<p class="package__description space-lover">
						<? _e("package__ottmangut__description", "gp-dolomiti"); ?>
					</p>
				</div>
			</div>

			<h2 class="subsection__heading"><a href="http://rubein.com" title="<? _e("<!--:en-->View Hotel Page<!--:--><!--:de-->Seite des Hotels ansehen<!--:--><!--:it-->Mostra la pagina dell' albergo<!--:--><!--:fr-->Voir l'hôtel<!--:-->"); ?>"><? _e("<!--:en-->Castle<!--:--><!--:de-->Schloss<!--:--><!--:it-->Castello<!--:--><!--:fr-->Château<!--:-->"); ?> Rubein Suite</a></h2>

			<section class="slider slider--row-fixed">
				<ul class="slider__slides slider__slides--contains-3">
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--4"></div>
							</div>
						</div>
					</li>
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--5"></div>
							</div>
						</div>
					</li>
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--6"></div>
							</div>
						</div>
					</li>
				</ul>
			</section>

			<div id="rubein-description" class="collapse-bd" data-collapse-group="rubein">
				<div class="collapse-inner">
					<p class="package__description space-lover">
						<? _e("package__rubein__description", "gp-dolomiti"); ?>
					</p>
				</div>
			</div>

			<h2 class="subsection__heading"><a href="http://plantitscherhof.com" title="<? _e("<!--:en-->View Hotel Page<!--:--><!--:de-->Seite des Hotels ansehen<!--:--><!--:it-->Mostra la pagina dell' albergo<!--:--><!--:fr-->Voir l'hôtel<!--:-->"); ?>">Hotel Plantitscher Suite</a></h2>

			<section class="slider slider--row-fixed">
				<ul class="slider__slides slider__slides--contains-3">
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--7"></div>
							</div>
						</div>
					</li>
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--8"></div>
							</div>
						</div>
					</li>
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--9"></div>
							</div>
						</div>
					</li>
				</ul>
			</section>

			<div id="plantitscher-description" class="collapse-bd" data-collapse-group="plantitscher">
				<div class="collapse-inner">
					<p class="package__description space-lover">
						<? _e("package__plantitscher__description", "gp-dolomiti"); ?>
					</p>
				</div>
			</div>

			<div class="text--centered">
				<a class="package__action btn btn--primary btn--register" href="<? echo get_site_url(); _e('<!--:en-->/register/?lang=en<!--:--><!--:de-->/register/?lang=de<!--:--><!--:it-->/register/?lang=it<!--:--><!--:fr-->/register/?lang=fr<!--:-->'); ?>"><? _e("<!--:en-->Register Platinum Now<!--:--><!--:de-->Jetzt Platinum anmelden<!--:--><!--:it-->Vai alla registrazione Platinum<!--:--><!--:fr-->Inscrivez-vous maintenant<!--:-->"); ?></a>
			</div>

		</section>

		<h1 class="section__title section__title--emphasized">
			<? _e("<!--:en-->Superior Hotels<!--:--><!--:de-->Superior Hotels<!--:--><!--:it-->Alberghi Superior<!--:--><!--:fr-->Superior Hotel<!--:-->"); ?>
		</h1>

		<section class="subsection">
			
			<h2 class="subsection__heading"><a href="http://imperialart.it" title="<? _e("<!--:en-->View Hotel Page<!--:--><!--:de-->Seite des Hotels ansehen<!--:--><!--:it-->Mostra la pagina dell' albergo<!--:--><!--:fr-->Voir l'hôtel<!--:-->"); ?>">Hotel Imperialart Suite</a></h2>
			<section class="slider slider--row-fixed">
				<ul class="slider__slides slider__slides--contains-3">
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--10"></div>
							</div>
						</div>
					</li>
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--11"></div>
							</div>
						</div>
					</li>
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--12"></div>
							</div>
						</div>
					</li>
				</ul>
			</section>
			<div id="imperialart-description" class="collapse-bd" data-collapse-group="imperialart">
				<div class="collapse-inner">
					<p class="package__description space-lover">
						<? _e("package__imperialart__description", "gp-dolomiti"); ?>
					</p>
				</div>
			</div>
			<h2 class="subsection__heading"><a href="http://hotelmignon.com" title="<? _e("<!--:en-->View Hotel Page<!--:--><!--:de-->Seite des Hotels ansehen<!--:--><!--:it-->Mostra la pagina dell' albergo<!--:--><!--:fr-->Voir l'hôtel<!--:-->"); ?>">Hotel Mignon Suite</a></h2>
			<section class="slider slider--row-fixed">
				<ul class="slider__slides slider__slides--contains-3">
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--13"></div>
							</div>
						</div>
					</li>
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--14"></div>
							</div>
						</div>
					</li>
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--15"></div>
							</div>
						</div>
					</li>
				</ul>
			</section>
			<div id="mignon-description" class="collapse-bd" data-collapse-group="mignon">
				<div class="collapse-inner">
					<p class="package__description space-lover">
						<? _e("package__mignon__description", "gp-dolomiti"); ?>
					</p>
				</div>
			</div>
			<h2 class="subsection__heading"><a href="http://pergola-residence.de" title="<? _e("<!--:en-->View Hotel Page<!--:--><!--:de-->Seite des Hotels ansehen<!--:--><!--:it-->Mostra la pagina dell' albergo<!--:--><!--:fr-->Voir l'hôtel<!--:-->"); ?>">Hotel Pergola Suite</a></h2>
			<section class="slider slider--row-fixed">
				<ul class="slider__slides slider__slides--contains-3">
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--16"></div>
							</div>
						</div>
					</li>
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--17"></div>
							</div>
						</div>
					</li>
					<li class="slider__slide">
						<div class="polaroid">
							<div class="tile">
								<div class="tile__helper"></div>
								<div class="tile__content hotel-img hotel-img--18"></div>
							</div>
						</div>
					</li>
				</ul>
			</section>
			<div id="pergola-description" class="collapse-bd" data-collapse-group="pergola">
				<div class="collapse-inner">
					<p class="package__description space-lover">
						<? _e("package__pergola__description", "gp-dolomiti"); ?>
					</p>
				</div>
			</div>

			<div class="text--centered">
				<a class="package__action btn btn--primary btn--register" href="<? echo get_site_url(); _e('<!--:en-->/register/?lang=en<!--:--><!--:de-->/register/?lang=de<!--:--><!--:it-->/register/?lang=it<!--:--><!--:fr-->/register/?lang=fr<!--:-->'); ?>"><? _e("<!--:en-->Register Superior Now<!--:--><!--:de-->Jetzt Superior anmelden<!--:--><!--:it-->Vai alla registrazione Superior<!--:--><!--:fr-->Inscrivez-vous maintenant<!--:-->"); ?></a>
			</div>
		</section>
	</div>
</section>

<?php get_footer(); ?>