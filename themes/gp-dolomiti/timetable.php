<?php
/**
 * Template Name: Timetable
 * Description: The page template for the timetable including routes and events.
 *
 * @package WordPress
 * @subpackage GP Dolomiti
 */

get_header(); ?>

		<section class="program">
			<div class="grid">
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
							<div class="media__img program__icon"><i class="fa fa-users"></i></div>
							<div class="media__bd">
								<? _e("pre__arrival", "gp-dolomiti"); ?>
							</div>
						</li>
						<li class="media">
							<div class="media__img program__icon"><i class="fa fa-tachometer"></i></div>
							<div class="media__bd">
								<? _e("pre__inspection", "gp-dolomiti"); ?>
							</div>
						</li>
						<li class="media">
							<div class="media__img program__icon"><i class="fa fa-briefcase"></i></div>
							<div class="media__bd">
								<? _e("pre__check-in", "gp-dolomiti"); ?>
							</div>
						</li>
						<li class="media">
							<div class="media__img program__icon"><i class="fa fa-cutlery"></i></div>
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

					<h2 class="day__subheading"><i class="fa fa-road"></i>&nbsp;&nbsp;<? _e("<!--:en-->Day Route<!--:--><!--:de-->Tagesroute<!--:--><!--:it-->Percorso<!--:--><!--:fr-->Itinéraire<!--:-->"); ?></h2>
					
					<section class="slider">
						<ul class="slider__slides slider__slides--contains-4">
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<a class="tile__content map-link map-link--route-1" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Jaufenpass,+St.+Leonhard+in+Passeier,+S%C3%BCdtirol,+Italien+to:Sterzing,+S%C3%BCdtirol,+Italien+to:Penser+Joch,+Sarntal,+S%C3%BCdtirol,+Italien+to:Bozen,+S%C3%BCdtirol,+Italien+to:Mendelpass,+Mendola,+Trient,+Italien+to:Fondo,+Trient,+Italien+to:Gampenpass,+Unsere+Liebe+Frau+im+Walde-St.+Felix,+S%C3%BCdtirol,+Italien+to:Meran,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.65415,11.299438&amp;sspn=0.945449,1.141205&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFbWeygIdu62sAClnVbN9b7KCRzEgTnEuiAkHHQ%3BFYCGywIdk3auACntTyuRQFOdRzH5_NYp3pHP7A%3BFZtdygIddXWuACn_HvJzkquCRzFQTnEuiAkHHQ%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ%3BFTBExAIdNgKrACkZljiUJoWCRzFATnEuiAkHHQ%3BFcKQxAIdKfypACmxF1oGJ5CCRzFXqmBhJJ6ZoQ%3BFfz_xQIdHo-pACl5PXXqppaCRzH_Wz3I4d1znw%3BFb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg&amp;oq=meran&amp;mra=ls&amp;t=m&amp;z=10"></a>
									</div>
								</div>
							</li>
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<div class="tile__content route-img"></div>
									</div>
								</div>
							</li>
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<div class="tile__content route-img route-img--2"></div>
									</div>
								</div>
							</li>
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<div class="tile__content route-img route-img--3"></div>
									</div>
								</div>
							</li>
						</ul>
					</section>


					<!-- <a class="map-link" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Jaufenpass,+St.+Leonhard+in+Passeier,+S%C3%BCdtirol,+Italien+to:Sterzing,+S%C3%BCdtirol,+Italien+to:Penser+Joch,+Sarntal,+S%C3%BCdtirol,+Italien+to:Bozen,+S%C3%BCdtirol,+Italien+to:Mendelpass,+Mendola,+Trient,+Italien+to:Fondo,+Trient,+Italien+to:Gampenpass,+Unsere+Liebe+Frau+im+Walde-St.+Felix,+S%C3%BCdtirol,+Italien+to:Meran,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.65415,11.299438&amp;sspn=0.945449,1.141205&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFbWeygIdu62sAClnVbN9b7KCRzEgTnEuiAkHHQ%3BFYCGywIdk3auACntTyuRQFOdRzH5_NYp3pHP7A%3BFZtdygIddXWuACn_HvJzkquCRzFQTnEuiAkHHQ%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ%3BFTBExAIdNgKrACkZljiUJoWCRzFATnEuiAkHHQ%3BFcKQxAIdKfypACmxF1oGJ5CCRzFXqmBhJJ6ZoQ%3BFfz_xQIdHo-pACl5PXXqppaCRzH_Wz3I4d1znw%3BFb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg&amp;oq=meran&amp;mra=ls&amp;t=m&amp;z=10">
						<div class="map-container space-lover">
							<div id="map-day-one" class="map-canvas"></div>
						</div>
					</a> -->

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
								<td class="route__icon"><i class="fa fa-flag-o"></i></td>
								<td class="route__location">
								<? _e("pre__meran", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__jaufen", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__jaufen__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__sterzing", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__sterzing__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__penser", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__penser__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__bozen", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__mendel", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__mendel__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__fondo", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__fondo__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__gampen", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__gampen__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-flag-checkered"></i></td>
								<td class="route__location">
									<? _e("pre__meran", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="day__dinner cf">

						<h3 class="day__subheading"><i class="fa fa-cutlery"></i>&nbsp;&nbsp;La notte italiana</h3>
					
						<section class="slider slider--rev">
							<ul class="slider__slides slider__slides--contains-4">
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--italian-1"></div>
										</div>
									</div>
								</li>
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--italian-2"></div>
										</div>
									</div>
								</li>
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--italian-3"></div>
										</div>
									</div>
								</li>
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--italian-4"></div>
										</div>
									</div>
								</li>
							</ul>
						</section>

						<div class="dinner__description dinner__description--rev">
							<p>
								<? _e("program__day2__dinner", "gp-dolomiti"); ?>
							</p>
						</div>
					</div>

				</section>

				<section class="day">
					<h1 class="day__date">
						<time datetime="2014-07-24">
							<? _e("pre__day3", "gp-dolomiti"); ?>
						</time>
					</h1>

					<h2 class="day__subheading"><i class="fa fa-road"></i>&nbsp;&nbsp;<? _e("<!--:en-->Day Route<!--:--><!--:de-->Tagesroute<!--:--><!--:it-->Percorso<!--:--><!--:fr-->Itinéraire<!--:-->"); ?></h2>

					<section class="slider">
						<ul class="slider__slides slider__slides--contains-4">
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<a class="tile__content map-link map-link--route-2" title="Google Maps" target="_blank" href="https://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Naturns,+S%C3%BCdtirol,+Italien+to:Prad+am+Stilfserjoch,+S%C3%BCdtirol,+Italien+to:Stilfserjoch+to:Via+Umbrail,+Sta.+Maria+Val+M%C3%BCstair,+Schweiz+to:Via+Umbrail+to:Glurns,+S%C3%BCdtirol,+Italien+to:Meran,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;ll=46.588125,10.818787&amp;spn=0.477552,0.901566&amp;sll=46.611361,10.460358&amp;sspn=0.119337,0.225391&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFYLTxwIdcPinACkTK_-lAcGCRzH-wJMhBkKEtA%3BFeFTxwIdvJ6hACnjZ-oUCR-DRzFUwfqFMagebw%3BFdUKxgIdUHSfACkdHBhV5BqDRzFg64MuiAkHHQ%3BFRTqxgIdriufAClnGOCgVxeDRzF-XQBEpQfQcA%3BFWYSxwIdvhSfAA%3BFSUjyAIddAahACm1Kmm7IyKDRzGqfkGdrEfFQg%3BFb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg&amp;oq=via+umbrail&amp;mra=dme&amp;mrsp=5&amp;sz=13&amp;t=m&amp;z=11"></a>
									</div>
								</div>
							</li>
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<div class="tile__content route-img route-img--4"></div>
									</div>
								</div>
							</li>
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<div class="tile__content route-img route-img--5"></div>
									</div>
								</div>
							</li>
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<div class="tile__content route-img route-img--6"></div>
									</div>
								</div>
							</li>
						</ul>
					</section>
					<!-- <a class="map-link" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Bozen,+S%C3%BCdtirol,+Italien&amp;daddr=V%C3%B6ls+am+Schlern,+S%C3%BCdtirol,+Italien+to:Corvara,+S%C3%BCdtirol,+Italien+to:Passo+Campolongo,+Livinallongo+del+Col+di+Lana,+Provinz+Belluno,+Italien+to:Pordoijoch,+Livinallongo+del+Col+di+Lana,+Provinz+Belluno,+Italien+to:Sellajoch,+Canazei,+Trient,+Italien+to:Ortisei-St+Ulrich,+Italien+to:46.5713068,11.5813223+to:Bozen,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.537137,11.621475&amp;sspn=0.473277,1.056747&amp;geocode=FfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ%3BFTKixQId5aWvACmNN9M8gHN4RzE2QTtdJm7-aw%3BFQ5WxgId4i-1ACmfprHjBj94RzEkeMnpGUOq3A%3BFbvJxQIdKxK1ACmZG28WmUB4RzFwTnEuiAkHHQ%3BFYVHxQId2060ACnROCyBNEB4RzGA64MuiAkHHQ%3BFaCIxQIdcEqzAClFDDg06Gp4RzGQ64MuiAkHHQ%3BFXunxgIdWyKyACm524Cn-RJ4RzE7oJYosjXYOg%3BFSqfxgIdirewAClpFHQ3GQ14RzF_8Yl01LNn5Q%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ&amp;oq=boz&amp;mra=pr&amp;via=7&amp;t=m&amp;z=11">
						<div class="map-container space-lover">
							<div id="map-day-two" class="map-canvas"></div>
						</div>
					</a> -->

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
								<td class="route__icon"><i class="fa fa-flag-o"></i></td>
								<td class="route__location">
									<? _e("pre__meran", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__prad", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__prad__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__stilfs", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__stilfs__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__glurns", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__glurns__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-flag-checkered"></i></td>
								<td class="route__location">
									<? _e("pre__meran", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
						</tbody>
					</table>

					<div class="day__dinner cf">

						<h3 class="day__subheading"><i class="fa fa-cutlery"></i>&nbsp;&nbsp;Lounge Wandelhalle</h3>
					
						<section class="slider slider--rev">
							<ul class="slider__slides slider__slides--contains-4">
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--lounge-1"></div>
										</div>
									</div>
								</li>
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--lounge-2"></div>
										</div>
									</div>
								</li>
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--lounge-3"></div>
										</div>
									</div>
								</li>
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--lounge-4"></div>
										</div>
									</div>
								</li>
							</ul>
						</section>

						<div class="dinner__description dinner__description--rev">
							<p>
								<? _e("program__day3__dinner", "gp-dolomiti"); ?>
							</p>
						</div>
					</div>
					
				</section>
				<section class="day">
					<h1 class="day__date">
						<time datetime="2014-07-25">
							<? _e("pre__day4", "gp-dolomiti"); ?>
						</time>
					</h1>

					<h2 class="day__subheading"><i class="fa fa-road"></i>&nbsp;&nbsp;<? _e("<!--:en-->Day Route<!--:--><!--:de-->Tagesroute<!--:--><!--:it-->Percorso<!--:--><!--:fr-->Itinéraire<!--:-->"); ?></h2>

					<section class="slider">
						<ul class="slider__slides slider__slides--contains-4">
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<a class="tile__content map-link map-link--route-3" title="Google Maps" target="_blank" href="https://maps.google.de/maps?f=d&amp;source=s_d&amp;saddr=Bozen,+Südtirol,+Italien&amp;daddr=Siffianer-Weg+to:Barbian,+Südtirol,+Italien+to:Unbekannte+Straße+to:Klausen,+Südtirol,+Italien+to:46.5996331,11.57849+to:St.+Ulrich+in+Gröden,+Südtirol,+Italien+to:Gardena+Pass,+Wolkenstein+in+Gröden,+Südtirol,+Italien+to:Corvara,+Südtirol,+Italien+to:Passo+Campolongo,+Livinallongo+del+Col+di+Lana,+Belluno,+Italien+to:Arabba,+Belluno,+Italien+to:Passo+Pordoi+to:Passo+Sella+to:Selva+Gardena,+Südtirol,+Italien+to:Ortisei,+Südtirol,+Italien+to:Castelrotto,+Südtirol,+Italien+to:Bolzano&amp;hl=de&amp;geocode=FfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ%3BFSUOxgIdeteuAA%3BFfQSxwIdhMOvAClDSwO-kAt4RzEhR_bEPrjiZQ%3BFWo9xwIdcx-wAA%3BFXyrxwIdg3ywACkva3oyug54RzHaJI00ssW5OQ%3BFdENxwIdeqywACmltz6tTwx4RzGXp4O1SUwVaw%3BFUGrxgId8xeyACmRZ1p1-RJ4RzHTrM6CN4Jsvg%3BFfBLxgIdwA20ACmVw9jwZRV4RzFgTnEuiAkHHQ%3BFQ5WxgId4i-1ACmfprHjBj94RzEkeMnpGUOq3A%3BFbvJxQIdKxK1ACmZG28WmUB4RzFwTnEuiAkHHQ%3BFY99xQId7C21ACmRAuF_v0B4RzEx9HNbrS7K8A%3BFYVHxQId2060ACnROCyBNEB4RzGA64MuiAkHHQ%3BFaCIxQIdcEqzAClFDDg06Gp4RzGQ64MuiAkHHQ%3BFS5lxgIdoVyzACnpcxq15RR4RzE8gftNGubQGA%3BFXunxgIdWyKyACm524Cn-RJ4RzE7oJYosjXYOg%3BFceSxgIdvXOwACmVQi8ywwx4RzH83XEn_YXT0w%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ&amp;aq=t&amp;sll=46.557802,11.621362&amp;sspn=0.388109,0.679779&amp;vpsrc=0&amp;mra=dvme&amp;mrsp=5&amp;sz=11&amp;via=5&amp;ie=UTF8&amp;t=m&amp;z=11&amp;dirflg=d&amp;dg=feature"></a>
									</div>
								</div>
							</li>
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<div class="tile__content route-img route-img--7"></div>
									</div>
								</div>
							</li>
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<div class="tile__content route-img route-img--8"></div>
									</div>
								</div>
							</li>
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<div class="tile__content route-img route-img--9"></div>
									</div>
								</div>
							</li>
						</ul>
					</section>
					<!-- <a class="map-link" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Glurns,+S%C3%BCdtirol,+Italien+to:Stilfserjoch,+Stelvio,+S%C3%BCdtirol,+Italien+to:Passo+Tonale,+Passo+del+Tonale,+Trient,+Italien+to:Meran,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;ll=46.444481,10.72403&amp;spn=0.949108,1.141205&amp;sll=46.444481,10.71579&amp;sspn=0.949108,1.141205&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFb_kxwIdq9SgACl5L6ITDiKDRzEwMpEVhwkHBA%3BFREJxgIdnsSfACEbbJ7SxU1d1inPjoL65BqDRzEbbJ7SxU1d1g%3BFU_iwQId5o6hACFx-bdxAzejBCnnyF5jClSCRzFx-bdxAzejBA%3BFb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg&amp;oq=meran&amp;mra=ls&amp;t=m&amp;z=10">
						<div class="map-container space-lover">
							<div id="map-day-three" class="map-canvas"></div>
						</div>
					</a> -->

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
								<td class="route__icon"><i class="fa fa-flag-o"></i></td>
								<td class="route__location">
									<? _e("pre__bozen", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__klausen", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__klausen__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__ortisei", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__ortisei__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__groedner", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__groedner__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__corvara", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__corvara__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__campolungo", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__campolungo__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__pordoi", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__pordoi__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__sella", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__sella__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__wolkenstein", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__wolkenstein__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__castelrotto", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__castelrotto__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-flag-checkered"></i></td>
								<td class="route__location">
									<? _e("pre__bozen", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="day__dinner cf">
						
						<h3 class="day__subheading"><i class="fa fa-cutlery"></i>&nbsp;&nbsp;Genuss nach Wahl</h3>
					
						<section class="slider slider--rev">
							<ul class="slider__slides slider__slides--contains-4">
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--choice-1"></div>
										</div>
									</div>
								</li>
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--choice-2"></div>
										</div>
									</div>
								</li>
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--choice-3"></div>
										</div>
									</div>
								</li>
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--choice-4"></div>
										</div>
									</div>
								</li>
							</ul>
						</section>

						<div class="dinner__description dinner__description--rev">
							<p>
								<? _e("program__day4__dinner", "gp-dolomiti"); ?>
							</p>
						</div>
					</div>
					
				</section>
				<section class="day">
					<h1 class="day__date">
						<time datetime="2014-07-26">
							<? _e("pre__day5", "gp-dolomiti"); ?>
						</time>
					</h1>

					<h2 class="day__subheading"><i class="fa fa-road"></i>&nbsp;&nbsp;<? _e("<!--:en-->Day Route<!--:--><!--:de-->Tagesroute<!--:--><!--:it-->Percorso<!--:--><!--:fr-->Itinéraire<!--:-->"); ?></h2>

					<section class="slider">
						<ul class="slider__slides slider__slides--contains-4">
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<a class="tile__content map-link map-link--route-4" title="Google Maps" target="_blank" href="https://maps.google.de/maps?saddr=Meran,+Südtirol,+Italien&amp;daddr=Lana,+Südtirol,+Italien+to:Andrian,+Südtirol,+Italien+to:St.+Pauls,+Südtirol,+Italien+to:Eppan,+Südtirol,+Italien+to:Kaltern,+Südtirol,+Italien+to:Neumarkt,+Südtirol,+Italien+to:Bozen,+Südtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.571425,11.20423&amp;sspn=0.236725,0.285301&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFYc8xwIdSlWqACmvbK1awr2CRzGMWIT3SGkYqQ%3BFavSxQIdl2mrACm96caqk5mCRzEh49uDGewsJQ%3BFWkZxQIdPtCrACkxGLhymJuCRzFtp_GuK0RRGA%3BFTolxQIdH6GrACkBkS3jCJuCRzEwMJEVhwkHBA%3BFW73wwIdZoqrACnj_C3kfoSCRzHgMJEVhwkHBA%3BFZxuwgIddhGsACkPypVuWYCCRzHAMZEVhwkHBA%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ&amp;oq=bozen&amp;mra=ls&amp;t=m&amp;z=11&amp;dg=feature"></a>
									</div>
								</div>
							</li>
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<div class="tile__content route-img route-img--10"></div>
									</div>
								</div>
							</li>
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<div class="tile__content route-img route-img--11"></div>
									</div>
								</div>
							</li>
							<li class="slider__slide">
								<div class="polaroid">
									<div class="tile">
										<div class="tile__helper"></div>
										<div class="tile__content route-img route-img--12"></div>
									</div>
								</div>
							</li>
						</ul>
					</section>
					<!-- <a class="map-link" title="Google Maps" target="_blank" href="http://maps.google.de/maps?saddr=Meran,+S%C3%BCdtirol,+Italien&amp;daddr=Lana,+S%C3%BCdtirol,+Italien+to:Andrian,+S%C3%BCdtirol,+Italien+to:St.+Pauls,+S%C3%BCdtirol,+Italien+to:Eppan,+S%C3%BCdtirol,+Italien+to:Kaltern,+S%C3%BCdtirol,+Italien+to:Neumarkt,+S%C3%BCdtirol,+Italien+to:Bozen,+S%C3%BCdtirol,+Italien&amp;hl=de&amp;ie=UTF8&amp;sll=46.571425,11.20423&amp;sspn=0.236725,0.285301&amp;geocode=Fb4lyAIdhiyqACnbGvnPAbyCRzFZpNB1yimAgg%3BFYc8xwIdSlWqACmvbK1awr2CRzGMWIT3SGkYqQ%3BFavSxQIdl2mrACm96caqk5mCRzEh49uDGewsJQ%3BFWkZxQIdPtCrACkxGLhymJuCRzFtp_GuK0RRGA%3BFTolxQIdH6GrACkBkS3jCJuCRzEwMJEVhwkHBA%3BFW73wwIdZoqrACnj_C3kfoSCRzHgMJEVhwkHBA%3BFZxuwgIddhGsACkPypVuWYCCRzHAMZEVhwkHBA%3BFfeBxQIdhkKtAClJcJ5BK5yCRzEqQ4s0T2krZQ&amp;oq=bozen&amp;mra=ls&amp;t=m&amp;z=11">
						<div class="map-container space-lover">
							<div id="map-day-four" class="map-canvas"></div>
						</div>
					</a> -->

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
								<td class="route__icon"><i class="fa fa-flag-o"></i></td>
								<td class="route__location">
									<? _e("pre__meran", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__meran__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__lana", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__lana__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__andrian", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__andrian__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__pauls", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__pauls__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__eppan", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__eppan__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__kaltern", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__kaltern__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-map-marker"></i></td>
								<td class="route__location">
									<? _e("pre__neumarkt", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__neumarkt__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
							<tr>
								<td class="route__icon"><i class="fa fa-flag-checkered"></i></td>
								<td class="route__location">
									<? _e("pre__bozen", "gp-dolomiti"); ?>
								</td>
								<td class="route__altitude">
									<? _e("pre__bozen__altitude", "gp-dolomiti"); ?>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="day__dinner cf">

						<h3 class="day__subheading"><i class="fa fa-cutlery"></i>&nbsp;&nbsp;Gala Dinner</h3>
					
						<section class="slider slider--rev">
							<ul class="slider__slides slider__slides--contains-4">
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--kurhaus-1"></div>
										</div>
									</div>
								</li>
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--kurhaus-2"></div>
										</div>
									</div>
								</li>
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--kurhaus-3"></div>
										</div>
									</div>
								</li>
								<li class="slider__slide">
									<div class="polaroid">
										<div class="tile">
											<div class="tile__helper"></div>
											<div class="tile__content dinner dinner--kurhaus-4"></div>
										</div>
									</div>
								</li>
							</ul>
						</section>

						<div class="dinner__description dinner__description--rev">
							<p>
								<? _e("program__day5__dinner", "gp-dolomiti"); ?>
							</p>
						</div>
					</div>

				</section>
				<section class="day">
					<h1 class="day__date">
						<time datetime="2014-07-27">
							<? _e("pre__day6", "gp-dolomiti"); ?>
						</time>
					</h1>
					<div class="day__special media ceremony">
						<div class="media__img"><i class="fa fa-trophy"></i></div>
						<div class="media__bd">
							<p>
								<? _e("pre__day6__ceremony", "gp-dolomiti"); ?>
							</p>
						</div>
					</div>
				</section>
			</div>
		</section>

<?php get_footer(); ?>