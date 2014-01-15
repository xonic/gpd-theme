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
		<h1 class="section__title section__title--emphasized">
			<? _e("<!--:en-->Packages<!--:--><!--:de-->Pakete<!--:--><!--:it-->Pacchetti Partecipazione<!--:--><!--:fr-->Forfaits<!--:-->"); ?>
		</h1>

		<?
			$today = getdate();

			if(do_shortcode('[ATTENDEE_NUMBERS event_id="1" type="num_attendees"]') < 20 && $today[mon] <= 2 && $today[year] === 2014) { ?>
				
				<div class="msg msg--success msg--has-icon space-lover">
					<div class="msg__title"><i class="fa fa-fw fa-thumbs-o-up"></i>Early Bird</div>
					<div class="msg__bd">
						<div><? _e('<!--:en-->The first few participants of the Gran Premio Dolomiti will receive a little surprise at the event<!--:--><!--:de-->Die ersten wenigen Teilnehmer des Gran Premio Dolomiti erhalten von uns eine kleine Überraschung<!--:--><!--:it-->I primi pochi iscritti al Gran Premio Dolomiti verranno premiati con una piccola sorpresa<!--:--><!--:fr-->La première quelques inscrits au Grand Prix Dolomites seront attribués avec une petite surprise<!--:-->'); ?>.</div>
					</div>
				</div>
		<? } ?>


		<section class="subsection">
			<h2 class="subsection__title"><? _e("<!--:en-->Premium Package<!--:--><!--:de-->Premium Paket<!--:--><!--:it-->Pacchetto Premium<!--:--><!--:fr-->Forfait Premium<!--:-->"); ?></h2>
			<div class="l-package__description">
				<p class="package__description">
					<? _e("package__premium__description", "gp-dolomiti"); ?>
				</p>
				<a href="<? echo get_site_url(); _e('<!--:en-->/contact/?lang=en<!--:--><!--:de-->/contact/?lang=de<!--:--><!--:it-->/contact/?lang=it<!--:--><!--:fr-->/contact/?lang=fr<!--:-->'); ?>" title="<? _e("<!--:en-->Contact us<!--:--><!--:de-->Kontaktieren Sie uns<!--:--><!--:it-->Contattaci<!--:--><!--:fr-->Contactez-nous<!--:-->"); ?>"><? _e("<!--:en-->Got questions?<!--:--><!--:de-->Noch Fragen?<!--:--><!--:it-->Avete delle domande?<!--:--><!--:fr-->Des questions?<!--:-->"); ?></a>
			</div>
			<div class="l-package__summary">
				<ul class="package__summary">
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Participation<!--:--><!--:de-->Teilnahme<!--:--><!--:it-->Partecipazione<!--:--><!--:fr-->Participation<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Accomodation<!--:--><!--:de-->Unterkunft<!--:--><!--:it-->Albergo<!--:--><!--:fr-->Hébergement<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Catering<!--:--><!--:de-->Verpflegung<!--:--><!--:it-->Sostenimento<!--:--><!--:fr-->Restauration<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Official clothing<!--:--><!--:de-->Offizielle Bekleidung<!--:--><!--:it-->Abbigliamento ufficiale<!--:--><!--:fr-->Vêtements officiels<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Safe parking<!--:--><!--:de-->Sicher parken<!--:--><!--:it-->Parcheggio sicuro<!--:--><!--:fr-->Parking sécurisé<!--:-->"); ?></div></li>
				</ul>
			</div>
			<div class="package__price">&euro; 4.850,00</div>
			<div class="l-package__action">
				<a class="package__action btn btn--newsletter" href="<? echo get_site_url(); _e('<!--:en-->/register/?lang=en<!--:--><!--:de-->/register/?lang=de<!--:--><!--:it-->/register/?lang=it<!--:--><!--:fr-->/register/?lang=fr<!--:-->'); ?>"><? _e("<!--:en-->Order Premium<!--:--><!--:de-->Premium anmelden<!--:--><!--:it-->Iscrizione Premium<!--:--><!--:fr-->Inscription Premium<!--:-->"); ?></a>
			</div>
			<ul class="package__features">
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title"><? _e("<!--:en-->Digital Roadbook<!--:--><!--:de-->Digitales Roadbook<!--:--><!--:it-->Roadbook Digitale<!--:--><!--:fr-->Roadbook numérique<!--:-->"); ?></h3>
						<div class="feature__img"><i class="fa fa-tablet fa-5x"></i></div>
						<p class="feature__description">
							<? _e("package__roadbook", "gp-dolomiti"); ?>
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title"><? _e("<!--:en-->Premium Hotel<!--:--><!--:de-->Premium Hotel<!--:--><!--:it-->Premium Hotel<!--:--><!--:fr-->Premium Hôtel<!--:-->"); ?></h3>
						<div class="feature__img"><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i> <span class="feature__icon-text">S</span></div>
						<p class="feature__description">
							<? _e("package__hotel", "gp-dolomiti"); ?>
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title"><? _e("<!--:en-->Delicious Catering<!--:--><!--:de-->Köstliche Verpflegung<!--:--><!--:it-->Catering Delizioso<!--:--><!--:fr-->Restauration<!--:-->"); ?></h3>
						<div class="feature__img"><i class="fa fa-cutlery fa-4x"></i></div>
						<p class="feature__description">
							<? _e("package__food", "gp-dolomiti"); ?>
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title"><? _e("<!--:en-->Safe Parking<!--:--><!--:de-->Bewachtes Parken<!--:--><!--:it-->Parcheggio custodito<!--:--><!--:fr-->Parking Surveillé<!--:-->"); ?></h3>
						<div class="feature__img"><i class="fa fa-lock fa-5x"></i></div>
						<p class="feature__description">
							<? _e("package__parking", "gp-dolomiti"); ?>
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title"><? _e("<!--:en-->Official Clothing<!--:--><!--:de-->Offizielle Bekleidung<!--:--><!--:it-->Abbigliamento Ufficiale<!--:--><!--:fr-->Tenue Officielle<!--:-->"); ?></h3>
						<div class="feature__img"><i class="fa fa-user fa-5x"></i></div>
						<p class="feature__description">
							<? _e("package__clothing", "gp-dolomiti"); ?>
						</p>
					</div>
				</li>
				<li class="l-feature">
					<div class="feature">
						<h3 class="feature__title"><? _e("<!--:en-->Concert<!--:--><!--:de-->Konzert<!--:--><!--:it-->Concerto<!--:--><!--:fr-->Concert<!--:-->"); ?></h3>
						<div class="feature__img"><i class="fa fa-music fa-5x"></i></div>
						<p class="feature__description">
							<? _e("package__concert", "gp-dolomiti"); ?>
						</p>
					</div>
				</li>
			</ul>
		</section>

		<section class="subsection">
			<h2 class="subsection__title"><? _e("<!--:en-->Platinum Package<!--:--><!--:de-->Platinum Paket<!--:--><!--:it-->Pacchetto Platinum<!--:--><!--:fr-->Forfait Platinum<!--:-->"); ?></h2>
			<div class="l-package__description">
				<p class="package__description">
					<? _e("package__platinum__description", "gp-dolomiti"); ?>
				</p>

				<p class="space-lover">
					<a href="<? echo get_site_url() . '/' . qtrans_getLanguage(); ?>/contact" title="Kontaktieren Sie uns"><? _e("<!--:en-->Got questions?<!--:--><!--:de-->Noch Fragen?<!--:--><!--:it-->Avete delle domande?<!--:--><!--:fr-->Des questions?<!--:-->"); ?></a>
				</p>

				<a class="subsection__detail" href="#ottmangut-description" data-collapse-target-group="ottmangut"><? _e("<!--:en-->Details<!--:--><!--:de-->Details<!--:--><!--:it-->Dettagli<!--:--><!--:fr-->Détails<!--:-->"); ?></a>

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

				<a class="subsection__detail" href="#rubein-description" data-collapse-target-group="rubein"><? _e("<!--:en-->Details<!--:--><!--:de-->Details<!--:--><!--:it-->Dettagli<!--:--><!--:fr-->Détails<!--:-->"); ?></a>

				<h2 class="subsection__heading"><a href="http://rubein.com" title="<? _e("<!--:en-->View Hotel Page<!--:--><!--:de-->Seite des Hotels ansehen<!--:--><!--:it-->Mostra la pagina dell' albergo<!--:--><!--:fr-->Voir l'hôtel<!--:-->"); ?>">Hotel Rubein Suite</a></h2>

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

				<a class="subsection__detail" href="#plantitscher-description" data-collapse-target-group="plantitscher"><? _e("<!--:en-->Details<!--:--><!--:de-->Details<!--:--><!--:it-->Dettagli<!--:--><!--:fr-->Détails<!--:-->"); ?></a>

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
			</div>
			<div class="l-package__summary">
				<ul class="package__summary">
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Participation<!--:--><!--:de-->Teilnahme<!--:--><!--:it-->Partecipazione<!--:--><!--:fr-->Participation<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Platinum Suite<!--:--><!--:de-->Platinum Suite<!--:--><!--:it-->Platinum Suite<!--:--><!--:fr-->Platinum Suite<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Catering<!--:--><!--:de-->Verpflegung<!--:--><!--:it-->Sostenimento<!--:--><!--:fr-->Restauration<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Official clothing<!--:--><!--:de-->Offizielle Bekleidung<!--:--><!--:it-->Abbigliamento ufficiale<!--:--><!--:fr-->Vêtements officiels<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Safe parking<!--:--><!--:de-->Sicher parken<!--:--><!--:it-->Parcheggio sicuro<!--:--><!--:fr-->Parking sécurisé<!--:-->"); ?></div></li>
				</ul>
			</div>
			<div class="package__price">&euro; 5.350,00</div>
			<div class="l-package__action">
				<a class="package__action btn btn--newsletter" href="<? echo get_site_url(); _e('<!--:en-->/register/?lang=en&package=Platinum<!--:--><!--:de-->/register/?lang=de&package=Platinum<!--:--><!--:it-->/register/?lang=it&package=Platinum<!--:--><!--:fr-->/register/?lang=fr&package=Platinum<!--:-->'); ?>"><? _e("<!--:en-->Order Platinum<!--:--><!--:de-->Platinum anmelden<!--:--><!--:it-->Iscrizione Platinum<!--:--><!--:fr-->Inscription Platinum<!--:-->"); ?></a>
			</div>
		</section>
		<section class="subsection">
			<h2 class="subsection__title"><? _e("<!--:en-->Superior Package<!--:--><!--:de-->Superior Paket<!--:--><!--:it-->Pacchetto Superior <!--:--><!--:fr-->Forfait Superior<!--:-->"); ?></h2>
			<div class="l-package__description">
				<p class="package__description">
					<? _e("package__platinum--superior__description", "gp-dolomiti"); ?>
				</p>

				<p class="space-lover">
					<a href="<? echo get_site_url() . '/' . qtrans_getLanguage(); ?>/contact" title="Kontaktieren Sie uns"><? _e("<!--:en-->Got questions?<!--:--><!--:de-->Noch Fragen?<!--:--><!--:it-->Avete delle domande?<!--:--><!--:fr-->Des questions?<!--:-->"); ?></a>
				</p>

				<a class="subsection__detail" href="#imperialart-description" data-collapse-target-group="imperialart"><? _e("<!--:en-->Details<!--:--><!--:de-->Details<!--:--><!--:it-->Dettagli<!--:--><!--:fr-->Détails<!--:-->"); ?></a>

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

				<a class="subsection__detail" href="#mignon-description" data-collapse-target-group="mignon"><? _e("<!--:en-->Details<!--:--><!--:de-->Details<!--:--><!--:it-->Dettagli<!--:--><!--:fr-->Détails<!--:-->"); ?></a>

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

				<a class="subsection__detail" href="#pergola-description" data-collapse-target-group="pergola"><? _e("<!--:en-->Details<!--:--><!--:de-->Details<!--:--><!--:it-->Dettagli<!--:--><!--:fr-->Détails<!--:-->"); ?></a>

				<h2 class="subsection__heading"><a href="http://pergola-residence.de" title="<? _e("<!--:en-->View Hotel Page<!--:--><!--:de-->Seite des Hotels ansehen<!--:--><!--:it-->Mostra la pagina dell' albergo<!--:--><!--:fr-->Voir l'hôtel<!--:-->"); ?>">Hotel Pergola Suite</a></h2>

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
				<div id="pergola-description" class="collapse-bd" data-collapse-group="pergola">
					<div class="collapse-inner">
						<p class="package__description space-lover">
							<? _e("package__pergola__description", "gp-dolomiti"); ?>
						</p>
					</div>
				</div>
			</div>
			<div class="l-package__summary">
				<ul class="package__summary">
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Participation<!--:--><!--:de-->Teilnahme<!--:--><!--:it-->Partecipazione<!--:--><!--:fr-->Participation<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Superior Suite<!--:--><!--:de-->Superior Suite<!--:--><!--:it-->Superior Suite<!--:--><!--:fr-->Superior Suite<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Catering<!--:--><!--:de-->Verpflegung<!--:--><!--:it-->Sostenimento<!--:--><!--:fr-->Restauration<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Official clothing<!--:--><!--:de-->Offizielle Bekleidung<!--:--><!--:it-->Abbigliamento ufficiale<!--:--><!--:fr-->Vêtements officiels<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Safe parking<!--:--><!--:de-->Sicher parken<!--:--><!--:it-->Parcheggio sicuro<!--:--><!--:fr-->Parking sécurisé<!--:-->"); ?></div></li>
				</ul>
			</div>
			<div class="package__price">&euro; 5.550,00</div>
			<div class="l-package__action">
				<a class="package__action btn btn--newsletter" href="<? echo get_site_url(); _e('<!--:en-->/register/?lang=en&package=Superior<!--:--><!--:de-->/register/?lang=de&package=Superior<!--:--><!--:it-->/register/?lang=it&package=Superior<!--:--><!--:fr-->/register/?lang=fr&package=Superior<!--:-->'); ?>"><? _e("<!--:en-->Order Superior<!--:--><!--:de-->Superior anmelden<!--:--><!--:it-->Iscrizione Superior<!--:--><!--:fr-->Inscription Superior<!--:-->"); ?></a>
			</div>
		</section>
		<section class="subsection">
			<h2 class="subsection__title"><? _e("<!--:en-->Appartments<!--:--><!--:de-->Appartements<!--:--><!--:it-->Appartatmenti<!--:--><!--:fr-->Appartements<!--:-->"); ?></h2>
			<div class="l-package__description">
				<p class="package__description">
					<? _e("package__platinum--appartment__description", "gp-dolomiti"); ?>
				</p>
			</div>
			<div class="l-package__summary">
				<ul class="package__summary">
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Participation<!--:--><!--:de-->Teilnahme<!--:--><!--:it-->Partecipazione<!--:--><!--:fr-->Participation<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Exclusive appartment<!--:--><!--:de-->Exklusives Appartement<!--:--><!--:it-->Appartamento esclusivo<!--:--><!--:fr-->Exclusive appartment<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Catering<!--:--><!--:de-->Verpflegung<!--:--><!--:it-->Sostenimento<!--:--><!--:fr-->Restauration<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Official clothing<!--:--><!--:de-->Offizielle Bekleidung<!--:--><!--:it-->Abbigliamento ufficiale<!--:--><!--:fr-->Vêtements officiels<!--:-->"); ?></div></li>
					<li class="media"><div class="media__img"><i class="fa fa-check"></i></div><div class="media__bd"><? _e("<!--:en-->Safe parking<!--:--><!--:de-->Sicher parken<!--:--><!--:it-->Parcheggio sicuro<!--:--><!--:fr-->Parking sécurisé<!--:-->"); ?></div></li>
				</ul>
			</div>
			<div class="package__price package__price--on-demand less-important"><? _e("<!--:en-->Price on request<!--:--><!--:de-->Preis auf Anfrage<!--:--><!--:it-->Prezzo su richiesta<!--:--><!--:fr-->Prix sur demande<!--:-->"); ?></div>
			<div class="l-package__action">
				<a class="btn btn--newsletter" href="<? echo get_site_url(); _e('<!--:en-->/contact/?lang=en<!--:--><!--:de-->/contact/?lang=de<!--:--><!--:it-->/contact/?lang=it<!--:--><!--:fr-->/contact/?lang=fr<!--:-->'); ?>"><? _e("<!--:en-->Request<!--:--><!--:de-->Anfragen<!--:--><!--:it-->Richiesta<!--:--><!--:fr-->Demande<!--:-->"); ?></a>
			</div>
		</section>
	</div>
</section>

<?php get_footer(); ?>