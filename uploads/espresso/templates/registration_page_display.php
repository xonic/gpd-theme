<?php
//This is the registration form.
//This is a template file for displaying a registration form for an event on a page.
//There should be a copy of this file in your wp-content/uploads/espresso/ folder.
?>
<div id="espresso-event-id-<?php echo $event_id; ?>">

<?php
$ui_corner = 'ui-corner-all'; 
//This tells the system to hide the event title if we only need to display the registration form.
if ($reg_form_only == false) { 
?>
	
<?php 
	$ui_corner = 'ui-corner-bottom';
}
?>

 	<?php //Featured image
		echo apply_filters('filter_hook_espresso_display_featured_image', $event_id, !empty($event_meta['event_thumbnail_url']) ? $event_meta['event_thumbnail_url'] : '');?>

	<?php /* Venue details. Un-comment first and last lines & any venue details you wish to display or use the provided shortcodes. */ ?>
	<?php // echo '<div id="venue-details-display">'; ?>
	<?php // echo '<p class="section-title">' . __('Venue Details', 'event_espresso') . '</p>'; ?>
	<?php // echo $venue_title != ''?'<p id="event_venue_name-'.$event_id.'" class="event_venue_name">'.stripslashes_deep($venue_title).'</p>':''?>
	<?php // echo $venue_address != ''?'<p id="event_venue_address-'.$event_id.'" class="event_venue_address">'.stripslashes_deep($venue_address).'</p>':''?>
	<?php // echo $venue_address2 != ''?'<p id="event_venue_address2-'.$event_id.'" class="event_venue_address2">'.stripslashes_deep($venue_address2).'</p>':''?>
	<?php // echo $venue_city != ''?'<p id="event_venue_city-'.$event_id.'" class="event_venue_city">'.stripslashes_deep($venue_city).'</p>':''?>
	<?php // echo $venue_state != ''?'<p id="event_venue_state-'.$event_id.'" class="event_venue_state">'.stripslashes_deep($venue_state).'</p>':''?>
	<?php // echo $venue_zip != ''?'<p id="event_venue_zip-'.$event_id.'" class="event_venue_zip">'.stripslashes_deep($venue_zip).'</p>':''?>
	<?php // echo $venue_country != ''?'<p id="event_venue_country-'.$event_id.'" class="event_venue_country">'.stripslashes_deep($venue_country).'</p>':''?>
	<?php // echo '</div>'; ?>
	<?php /* end venue details block */ ?>

	<?php if ($display_desc == "Y") { //Show the description or not ?>
	<p class="section-title">
		<?php _e('Description:', 'event_espresso') ?>
	</p>
	<div class="event_description clearfix">
		<?php echo espresso_format_content($event_desc); //Code to show the actual description. The Wordpress function "wpautop" adds formatting to your description.   ?>
		
	</div>
	<?php
	}//End display description

	switch ($is_active['status']) {
	
		case 'EXPIRED': 
		
			//only show the event description.
			echo '<h3 class="expired_event">' . __('This event has passed.', 'event_espresso') . '</h3>';
			break;

		case 'REGISTRATION_CLOSED': 
		
			//only show the event description.
			// if todays date is after $reg_end_date
?>
		<p class="event_full">
			<strong>
				<?php _e('We are sorry but registration for this event is now closed.', 'event_espresso'); ?>
			</strong>
		</p>
		<p class="event_full">
			<strong>
				<?php  _e('Please ', 'event_espresso');?><a href="contact" title="<?php  _e('contact us ', 'event_espresso');?>"><?php  _e('contact us ', 'event_espresso');?></a><?php  _e('if you would like to know if spaces are still available.', 'event_espresso'); ?>
			</strong>
		</p>
<?php
			break;

		case 'REGISTRATION_NOT_OPEN': 
			//only show the event description.
			// if todays date is after $reg_end_date
			// if todays date is prior to $reg_start_date
?>
			<div class="msg msg--info msg--has-icon space-lover">
				<div class="msg__title"><i class="fa fa-fw fa-info-circle"></i><? _e('<!--:en-->Currently Closed<!--:--><!--:de-->Derzeit geschlossen<!--:--><!--:it-->Chiuso temporaneo<!--:--><!--:fr-->Temporairement fermé<!--:-->'); ?></div>
				<div class="msg__bd">
					<div><? _e('<!--:en-->We\'ll be back soon.<!--:--><!--:de-->Wir sind bald zurück.<!--:--><!--:it-->Ritorniamo fra poco.<!--:--><!--:fr-->Nous serons bientôt de retour.<!--:-->'); ?>.</div>
				</div>
			</div>
<?php
		break;

		default: //This will display the registration form
		
		do_action('action_hook_espresso_registration_page_top', $event_id, $event_meta, $all_meta);
?>

		<form method="post" action="<?php echo get_permalink( $event_page_id );?>" id="registration_form">
	<?php

			//This hides the date/times and location when usign custom post types or the ESPRESSO_REG_FORM shortcode
if ( $reg_form_only == false ){	
						
					/* Display the address and google map link if available */
					if ($location != '' && (empty($org_options['display_address_in_regform']) || $org_options['display_address_in_regform'] != 'N')) {
	?>
				<p class="event_address" id="event_address-<?php echo $event_id ?>"><span class="section-title"><?php echo __('Address:', 'event_espresso'); ?></span> <br />
					<span class="address-block">
						<?php echo stripslashes_deep($venue_title); ?><br />
						<?php echo stripslashes_deep($location); ?><br />
						<span class="google-map-link"><?php echo $google_map_link; ?></span>
					</span>
				</p>
	<?php
					}
					do_action('action_hook_espresso_social_display_buttons', $event_id);

					$today = getdate();

					if($num_attendees < 20 && $today[mon] <= 2 && $today[year] === 2014) { ?>
						
						<fieldset class="form-section">
							<h2>
								Early Bird
							</h2>
							
							<div class="msg msg--success msg--has-icon space-lover" style="margin-bottom:0!important;">
								<div class="msg__title"><i class="fa fa-fw fa-check"></i><? _e('<!--:en-->Congratulations!<!--:--><!--:de-->Glückwunsch!<!--:--><!--:it-->Congratulazione!<!--:--><!--:fr-->Félicitation!<!--:-->'); ?></div>
								<div class="msg__bd">
									<div><? _e('<!--:en-->You are among the first participants of the Gran Premio Dolomiti and will receive a little surprise at the event<!--:--><!--:de-->Sie zählen zu den ersten Teilnehmern des Gran Premio Dolomiti und erhalten von uns eine kleine Überraschung<!--:--><!--:it-->Siete tra i primi iscritti al Gran Premio Dolomiti, pertanto vogliamo premiarla con una piccola sorpresa<!--:--><!--:fr-->Vous êtes parmi les premiers membres de la Grand Prix Dolomites, si nous voulons les récompenser avec une petite surprise<!--:-->'); ?>.</div>
								</div>
							</div>
						</fieldset>
					<? } ?>

					<fieldset class="form-section">
						<div class="event_form_field">
							<?php do_action( 'espresso_price_select', $event_id, array('show_label'=>TRUE, 'label'=>$price_label) );?>
						</div>
					</fieldset>
	<?php
					//Outputs the custom form questions. This function can be overridden using the custom files addon
					echo event_espresso_add_question_groups( $question_groups, '', NULL, FALSE, array( 'attendee_number' => 1 ), 'ee-reg-page-questions' );
	?>
				
	<?php					
					//Coupons
	?>
					<input type="hidden" name="use_coupon[<?php echo $event_id; ?>]" value="<?php echo $use_coupon_code; ?>" />
	<?php
					if ( $use_coupon_code == 'Y' && function_exists( 'event_espresso_coupon_registration_page' )) {
						echo event_espresso_coupon_registration_page($use_coupon_code, $event_id);
					}
					//End coupons display
							
					//Groupons
	?>
					<input type="hidden" name="use_groupon[<?php echo $event_id; ?>]" value="<?php echo $use_groupon_code; ?>" />
	<?php
					if ( $use_groupon_code == 'Y' && function_exists( 'event_espresso_groupon_registration_page' )) {
						echo event_espresso_groupon_registration_page($use_groupon_code, $event_id);
					}
					//End groupons display					
	?>
					<input type="hidden" name="regevent_action" id="regevent_action-<?php echo $event_id; ?>" value="post_attendee">
					<input type="hidden" name="event_id" id="event_id-<?php echo $event_id; ?>" value="<?php echo $event_id; ?>">
				
	<?php
					//Multiple Attendees
					if ( $allow_multiple == "Y" && $number_available_spaces > 1 ) {					
						//This returns the additional attendee form fields. Can be overridden in the custom files addon.
						echo event_espresso_additional_attendees($event_id, $additional_limit, $number_available_spaces, __('Number of Tickets', 'event_espresso'), true, $event_meta);
					} else {				
	?>
					<input type="hidden" name="num_people" id="num_people-<?php echo $event_id; ?>" value="1">
	<?php
					}					
					//End allow multiple	
					
					wp_nonce_field('reg_nonce', 'reg_form_nonce');
					
					//Recaptcha portion
					if ( $org_options['use_captcha'] == 'Y' && empty($_REQUEST['edit_details']) && ! is_user_logged_in()) {
					
						if ( ! function_exists('recaptcha_get_html')) {
							require_once(EVENT_ESPRESSO_PLUGINFULLPATH . 'includes/recaptchalib.php');
						}
						# the response from reCAPTCHA
						$resp = null;
						# the error code from reCAPTCHA, if any
						$error = null;
	?>
					<p class="event_form_field" id="captcha-<?php echo $event_id; ?>">
						<?php _e('Anti-Spam Measure: Please enter the following phrase', 'event_espresso'); ?>
						<?php echo recaptcha_get_html($org_options['recaptcha_publickey'], $error, is_ssl() ? true : false); ?>
					</p>
					
	<?php 
					} 
					//End use captcha  
	?>
					
					<input class="btn btn--newsletter" id="event_form_field-<?php echo $event_id; ?>" type="submit" name="Submit" value="<? _e("<!--:en-->Proceed to Verification<!--:--><!--:de-->Weiter zur Verifikation<!--:--><!--:it-->Procedi alla verifica<!--:--><!--:fr-->Passer à la vérification<!--:-->"); ?>">
				
	<?php 
				do_action('action_hook_espresso_registration_form_bottom', $event_id, $event_meta, $all_meta);
			}
	 ?>

	    </form>
	
<?php 
				do_action('action_hook_espresso_registration_page_bottom', $event_id, $event_meta, $all_meta);
				break;
				
			}
			//End Switch statement to check the status of the event

		if (isset($ee_style['event_espresso_form_wrapper_close'])) {
			echo $ee_style['event_espresso_form_wrapper_close']; 
		}			
?>

</div>
