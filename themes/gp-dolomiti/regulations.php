<?php
/**
 * Template Name: Regulations
 * Description: The page template for the entry regulations.
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 */

get_header(); ?>

<section class="regulations">
	<div class="grid">
		<h1 class="section__title section__title--emphasized">
			<? _e("pre__rules__title", "gp-dolomiti"); ?>
		</h1>


		<h2><? _e('<!--:en-->Participants &amp; Vehicles<!--:--><!--:de-->Teilnehmer &amp; Fahrzeuge<!--:--><!--:it-->Partecipanti &amp; veicoli<!--:--><!--:fr-->Concurrents &amp; véhicules<!--:-->'); ?></h2>
		<p class="space-lover">
			<? _e("rules__participants__year", "gp-dolomiti"); ?>
			<? _e("rules__participants__codex", "gp-dolomiti"); ?>
		</p>
		

		<h2><? _e('<!--:en-->Vehicle Categories<!--:--><!--:de-->Fahrzeugklassen<!--:--><!--:it-->Categorie autovetture<!--:--><!--:fr-->Catégories de véhicules<!--:-->'); ?></h2>
		<p class="space-lover"><? _e("rules__vehicles__categories", "gp-dolomiti"); ?></p>
		

		<h2><? _e('<!--:en-->Classification<!--:--><!--:de-->Wertung<!--:--><!--:it-->Classifiche<!--:--><!--:fr-->Classements<!--:-->'); ?></h2>
		<p class="space-lover"><? _e("rules__classification", "gp-dolomiti"); ?></p>
		

		<h2><? _e('<!--:en-->Activity Gran Premio Dolomiti<!--:--><!--:de-->Ablauf Gran Premio Dolomiti<!--:--><!--:it-->Svolgimento Gran Premio Dolomiti<!--:--><!--:fr-->Déroulement Gran Premio Dolomiti<!--:-->'); ?></h2>
		<p class="space-lover"><? _e("rules__activity", "gp-dolomiti"); ?></p>
		

		<h2><? _e('<!--:en-->Race Regulation<!--:--><!--:de-->Rennbestimmungen<!--:--><!--:it-->Norme di gara<!--:--><!--:fr-->Règles de course<!--:-->'); ?></h2>
		<p class="space-lover"><? _e("rules__race", "gp-dolomiti"); ?></p>
		

		<h2><? _e('<!--:en-->Technical Control<!--:--><!--:de-->Technische Überprüfung<!--:--><!--:it-->Verifiche techniche<!--:--><!--:fr-->Controles techniques<!--:-->'); ?></h2>
		<p class="space-lover"><? _e("rules__control", "gp-dolomiti"); ?></p>
		

		<h2><? _e('<!--:en-->Reclamation<!--:--><!--:de-->Einspruch<!--:--><!--:it-->Reclami<!--:--><!--:fr-->Rèclamations<!--:-->'); ?></h2>
		<p class="space-lover"><? _e("rules__reclamation", "gp-dolomiti"); ?></p>
		

		<h2><? _e('<!--:en-->Disclaimer<!--:--><!--:de-->Haftungsausschluss<!--:--><!--:it-->Rinuncia di responsibilità<!--:--><!--:fr-->Renonciation de responsabilité<!--:-->'); ?></h2>
		<p class="space-lover"><? _e("rules__disclaimer", "gp-dolomiti"); ?></p>
		

		<h2><? _e('<!--:en-->Privacy<!--:--><!--:de-->Datenschutz<!--:--><!--:it-->Privacy<!--:--><!--:fr-->Vie privée<!--:-->'); ?></h2>
		<p class="space-lover"><? _e("rules__privacy", "gp-dolomiti"); ?></p>
		

		<h2><? _e('<!--:en-->Cancellation Fee<!--:--><!--:de-->Stornobedingungen<!--:--><!--:it-->Condizioni annullamento<!--:--><!--:fr-->Conditions d\'annulation<!--:-->'); ?></h2>
		<p><? _e("rules__cancellation", "gp-dolomiti"); ?></p>
		<ul class="space-lover">
			<li><? _e('<!--:en-->Until 60 days before event: no cancellation fee<!--:--><!--:de-->Bis 60 Tage vor Anreise: keine Stornogebühr<!--:--><!--:it-->Fino a 60 giorni prima del evento: senza penalità<!--:--><!--:fr-->60 jours avant l\'arrivée: pas de frais d\'annulation<!--:-->'); ?></li>
			<li><? _e('<!--:en-->Until 30 days before event: 50%<!--:--><!--:de-->Bis 30 Tage vor Anreise: 50%<!--:--><!--:it-->Fino a 30 giorni prima del evento: 50%<!--:--><!--:fr-->30 jours avant l\'arrivée: 50%<!--:-->'); ?></li>
			<li><? _e('<!--:en-->Until 10 days before event: 80%<!--:--><!--:de-->Bis 10 Tage vor Anreise: 80%<!--:--><!--:it-->Fino a 10 giorni prima del evento: 80%<!--:--><!--:fr-->10 jours avant l\'arrivée: 80%<!--:-->'); ?></li>
			<li><? _e('<!--:en-->Less than 10 days before event: 100%<!--:--><!--:de-->Weniger als 10 Tage vor Anreise: 100%<!--:--><!--:it-->Meno di 10 giorni prima del evento: 100%<!--:--><!--:fr-->Moins que 60 jours avant l\'arrivée: 100%<!--:-->'); ?></li>
		</ul>
		

		<h2><? _e('<!--:en-->Other<!--:--><!--:de-->Verschiedenes<!--:--><!--:it-->Varie<!--:--><!--:fr-->Divers<!--:-->'); ?></h2>
		<p class="space-lover"><? _e("rules__other", "gp-dolomiti"); ?></p>
	</div>
</section>

<?php get_footer(); ?>