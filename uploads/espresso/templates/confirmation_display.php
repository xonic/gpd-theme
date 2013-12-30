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

	<h2><?php _e('Verify Registration','event_espresso'); ?></h2>

		<div class="form-component form-component--readonly">
			<label for="event_name"> <?php _e('Event Name','event_espresso'); ?> </label>
			<input type="text" name="event_name" value="<?php echo stripslashes_deep($event_name)?>" readonly>
		</div>

		<div class="form-component form-component--readonly">
			<label for="event_package"> <?php _e('Package', 'event_espresso'); ?> </label>
			<input type="text" name="event_package" value="<?php echo $attendee_prices[0]['option']; ?>" readonly>
		</div>

		<div class="form-component form-component--readonly">
			<label for="total_price"> <?php _e('Total Price','event_espresso'); ?> </label>
			<input type="text" name="total_price" value="<?php echo '&euro; ' . number_format($attendee_prices[0]['price'], 2); ?>" readonly>
		</div>

	</fieldset>
	
	<?php if ($display_questions != '') { ?>

	<fieldset class="form-section">

		<h2><?php _e('Driver Information','event_espresso'); ?></h2>

	<?php foreach ($questions as $question) { ?>
		<?php if(stripslashes( html_entity_decode( $question->answer, ENT_QUOTES, 'UTF-8' )) !== '') { ?>

		<? if (strpos($question->question, 'First Name') !== FALSE) { 
			$nameCount++;

			if ($nameCount >= 2) {
		?>
			</fieldset>
			<fieldset class="form-section">

			<h2><?php _e('Co-Driver Information','event_espresso'); ?></h2>

		<? } } ?>

		<? if (strpos($question->question, 'Brand') !== FALSE) {  ?>

			</fieldset>
			<fieldset class="form-section">

			<h2><?php _e('Vehicle Information','event_espresso'); ?></h2>

		<? } ?>

		<? if (strpos($question->question, 'Hotel') !== FALSE) {  ?>

			</fieldset>
			<fieldset class="form-section">

			<h2><?php _e('Hotel','event_espresso'); ?></h2>

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
