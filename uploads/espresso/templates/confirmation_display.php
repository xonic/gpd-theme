<?php if (!defined('EVENT_ESPRESSO_VERSION')) { exit('No direct script access allowed'); }
do_action('action_hook_espresso_log', __FILE__, 'FILE LOADED', '');		

/* WARNING MODIFYING THIS AT YOUR OWN RISK  */
/* Payments template page. Currently this just shows the registration data block.*/
//This page gets all of the varaibles from includes/process-registration/payment_page.php
//Payment confirmation block
$attendee_num = apply_filters('action_hook_espresso_confirmation_page_primary_attendee_count',1);

$nameCount = 0;

?>
<form id="form1" name="form1" method="post" action="<?php echo get_permalink($org_options['event_page_id']);?>">

	<fieldset class="form-section">

	<h2><? _e('<!--:en-->Verify Registration<!--:--><!--:de-->Daten prüfen<!--:--><!--:it-->Verifica dati<!--:--><!--:fr-->Vérifier les données<!--:-->'); ?></h2>

		<div class="form-component form-component--readonly">
			<label for="event_name"> <? _e('<!--:en-->Event Name<!--:--><!--:de-->Name des Events<!--:--><!--:it-->Nome del evento<!--:--><!--:fr-->Nom de l\'événement<!--:-->'); ?> </label>
			<input type="text" name="event_name" value="<?php echo stripslashes_deep($event_name)?>" readonly>
		</div>

		<div class="form-component form-component--readonly">
			<label for="event_package"> <? _e('<!--:en-->Package<!--:--><!--:de-->Paket<!--:--><!--:it-->Pacchetto<!--:--><!--:fr-->Forfait<!--:-->'); ?> </label>
			<input type="text" name="event_package" value="<?php echo $attendee_prices[0]['option']; ?>" readonly>
		</div>

		<div class="form-component form-component--readonly">
			<label for="total_price"> <? _e('<!--:en-->Total Price<!--:--><!--:de-->Gesamtpreis<!--:--><!--:it-->Prezzo totale<!--:--><!--:fr-->Prix total<!--:-->'); ?> </label>
			<input type="text" name="total_price" value="<?php echo '&euro; ' . number_format($attendee_prices[0]['price'], 2); ?>" readonly>
		</div>

	</fieldset>
	
	<?php if ($display_questions != '') { ?>

	<fieldset class="form-section">

		<h2><? _e('<!--:en-->Driver Information<!--:--><!--:de-->Fahrerdaten<!--:--><!--:it-->Dati del pilota<!--:--><!--:fr-->Données du conducteur<!--:-->'); ?></h2>

	<?php foreach ($questions as $question) { ?>
		<?php if(stripslashes( html_entity_decode( $question->answer, ENT_QUOTES, 'UTF-8' )) !== '') { ?>

		<? if (strpos($question->question, 'First Name') !== FALSE) { 
			$nameCount++;

			if ($nameCount >= 2) {
		?>
			</fieldset>
			<fieldset class="form-section">

			<h2><? _e('<!--:en-->Co-Driver Information<!--:--><!--:de-->Daten des Beifahrers<!--:--><!--:it-->Dati del co-pilota<!--:--><!--:fr-->Données de la co-pilote<!--:-->'); ?></h2>

		<? } } ?>

		<? if (strpos($question->question, 'Brand') !== FALSE) {  ?>

			</fieldset>
			<fieldset class="form-section">

			<h2><? _e('<!--:en-->Car Information<!--:--><!--:de-->Fahrzeugdaten<!--:--><!--:it-->Dati del veicolo<!--:--><!--:fr-->Données du voiture<!--:-->'); ?></h2>

		<? } ?>

		<? if (strpos($question->question, 'Hotel') !== FALSE) {  ?>

			</fieldset>
			<fieldset class="form-section">

			<h2><? _e('<!--:en-->Hotel<!--:--><!--:de-->Hotel<!--:--><!--:it-->Albergo<!--:--><!--:fr-->Logement<!--:-->'); ?></h2>

		<? } ?>

		<div class="form-component form-component--readonly">
			<label for="total_attendees" class="js-translate"> <?php echo stripslashes( html_entity_decode( $question->question, ENT_QUOTES, 'UTF-8' )); ?> </label>
			<input type="text" name="total_attendees" value="<?php echo stripslashes( html_entity_decode( $question->answer, ENT_QUOTES, 'UTF-8' )); ?>" readonly>
		</div>
		<?php } ?>

	<?php } ?>
	</fieldset>

	<input class="btn btn--primary btn--newsletter" type="submit" name="confirm2" id="confirm2" value="<? _e('<!--:en-->Proceed to Payment<!--:--><!--:de-->Weiter zur Zahlung<!--:--><!--:it-->Procedi al pagamento<!--:--><!--:fr-->Passer au paiement<!--:-->'); ?>" />

	<?php	} ?>
							
	<?php /* This form builds the confirmation buttons */?>
	<input name="confirm_registration" id="confirm_registration" type="hidden" value="true" />
	<input type="hidden" name="attendee_id" id="attendee_id" value="<?php echo $attendee_id ?>" />
	<input type="hidden" name="registration_id" id="registration_id" value="<?php echo $registration_id ?>" />
	<input type="hidden" name="regevent_action" id="regevent_action-<?php echo $event_id;?>" value="confirm_registration">
	<input type="hidden" name="event_id" id="event_id-<?php echo $event_id;?>" value="<?php echo $event_id;?>">
	<?php wp_nonce_field('reg_nonce', 'reg_form_nonce'); ?>
		
</form>
