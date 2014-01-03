<?php
/**
 * Template Name: About
 * Description: The page template for the timetable including routes and events.
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 */

get_header(); ?>
	

		<section class="program">
			<div class="grid">
				<section class="info">
					<? //echo qtrans_getLanguage(); ?>
					<h1 class="section__title section__title--smaller">
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

					<p class="info__paragraph">
						<? _e("pre__info__p1", "gp-dolomiti"); ?>
					</p>
					<p class="info__paragraph">
						<? _e("pre__info__p2", "gp-dolomiti"); ?>
					</p>
				</section>
				<section class="experience">
					<h1 class="section__title section__title--emphasized">
						<? _e("<!--:en-->Experience<!--:--><!--:de-->Das Erlebnis<!--:--><!--:it-->L'esperienza<!--:--><!--:fr-->Expérience<!--:-->"); ?>
					</h1>
					<ul class="features--about cf">
						<li class="l-feature">
							<div class="feature">
								<h3 class="feature__title">4</h3>
								<p class="feature__description">
									<? _e("<!--:en-->Day routes<!--:--><!--:de-->Tagesrouten<br>erkunden<!--:--><!--:it-->Percorsi<!--:--><!--:fr-->Routes<!--:-->"); ?>
								</p>
							</div>
						</li>
						<li class="l-feature">
							<div class="feature">
								<h3 class="feature__title">9</h3>
								<p class="feature__description">
									<? _e("<!--:en-->Passes<!--:--><!--:de-->Bergpässe<br>erobern<!--:--><!--:it-->Passi<!--:--><!--:fr-->Passes<!--:-->"); ?>
								</p>
							</div>
						</li>
						<li class="l-feature">
							<div class="feature">
								<h3 class="feature__title">750</h3>
								<p class="feature__description">
									<? _e("<!--:en-->Kilometers<!--:--><!--:de-->Kilometer<br>fahren<!--:--><!--:it-->Chilometri<!--:--><!--:fr-->Kilomètres<!--:-->"); ?>
								</p>
							</div>
						</li>
						<li class="l-feature">
							<div class="feature">
								<h3 class="feature__title">20.000</h3>
								<p class="feature__description">
									<? _e("<!--:en-->Meters altitude<!--:--><!--:de-->Höhenmeter<br>bezwingen<!--:--><!--:it-->Metri d'altezza<!--:--><!--:fr-->Mètres altitudines<!--:-->"); ?>
								</p>
							</div>
						</li>
					</ul>
				</section>
			</div>
		</section>

<?php get_footer(); ?>