<?php

function espresso_display_bank($payment_data) {
	global $org_options;
	extract($payment_data);
// Setup class
	$bank_gateway_version = empty($bank_gateway_version) ? '' : $bank_gateway_version;
	echo '<!-- Event Espresso Electronic Funds Transfer Gateway Version ' . $bank_gateway_version . ' -->';

	$bank_deposit_settings = get_option('event_espresso_bank_deposit_settings');

	$args = array(
		'page_id' =>$org_options['return_url'],
		'r_id' =>$registration_id,
		'id' =>$attendee_id,
		'payment_type' => 'cash_check',
		'type' => 'bank',
	);
	$finalize_link = add_query_arg( $args, home_url() );	
?>

		<p>
			<?php echo stripslashes_deep(empty($bank_deposit_settings['bank_instructions']) ? '' : $bank_deposit_settings['bank_instructions'] ); ?>					
		</p>

		<div class="form-component form-component--readonly">
			<label for="account_name"> <?php _e('Name on Account', 'event_espresso'); ?> </label>
			<input type="text" name="account_name" value="<?php echo stripslashes_deep( ! empty($bank_deposit_settings['account_name']) ? $bank_deposit_settings['account_name'] : '' ); ?>" readonly>
		</div>

		<div class="form-component form-component--readonly">
			<label for="iban"> <?php _e('IBAN', 'event_espresso'); ?> </label>
			<input type="text" name="iban" value="<?php echo stripslashes_deep( ! empty($bank_deposit_settings['iban']) ? $bank_deposit_settings['iban'] : '' ); ?>" readonly>
		</div>

		<div class="form-component form-component--readonly">
			<label for="swift_bic"> <?php _e('SWIFT/BIC Code', 'event_espresso'); ?> </label>
			<input type="text" name="swift_bic" value="<?php echo stripslashes_deep( ! empty($bank_deposit_settings['swift_bic']) ? $bank_deposit_settings['swift_bic'] : '' ); ?>" readonly>
		</div>

		<div class="form-component form-component--readonly">
			<label for="bank_name"> <?php _e('Financial Institution', 'event_espresso'); ?> </label>
			<input type="text" name="bank_name" value="<?php echo stripslashes_deep( ! empty($bank_deposit_settings['bank_name']) ? $bank_deposit_settings['bank_name'] : '' ); ?>" readonly>
		</div>

		<div class="form-component form-component--readonly">
			<label for="bank_address"> <?php _e('Address', 'event_espresso'); ?> </label>
			<textarea type="text" name="bank_address" rows="3" readonly><?php echo stripslashes_deep( ! empty($bank_deposit_settings['bank_address']) ? $bank_deposit_settings['bank_address'] : '' ); ?></textarea>
		</div>
	</fieldset>
	
	<p class="form-section">
		By clicking Submit I confirm that I have read and fully accept the Gran Premio Dolomiti <a href="#" title="View Terms and Conditions in a new tab"><strong>Terms and Conditions</strong></a>.
	</p>

	<a id="finalize_bank" class="btn btn--primary btn--newsletter finalize_button allow-leave-page inline-link" href="<?php echo $finalize_link;?>" title="<?php _e('Complete your Registration', 'event_espresso'); ?>">
		<?php _e('<!--:en-->Complete Registration<!--:--><!--:de-->Anmeldung abschließen<!--:--><!--:it-->Concludi l\'iscrizione<!--:--><!--:fr-->Confirmer l\'inscription<!--:-->'); ?>					
	</a>

<?php
}

add_action('action_hook_espresso_display_offline_payment_gateway_2', 'espresso_display_bank');
