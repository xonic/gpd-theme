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
			<?php _e('<!--:en-->Please transfer the money to the following bank account. The payment must be processed at least 72 hours before the start of the event.<!--:--><!--:de-->Bitte überweisen Sie den Betrag auf das folgende Bankkonto. Die Zahlung muss bis spätestens 72 Stunden vor dem Tag der Veranstaltung abgewickelt sein.<!--:--><!--:it-->La preghiamo di trasferire l\'importo sul seguente conto bancario. Il pagamento deve essere effettuato entro e non oltre 72 ore prima del giorno dell\' evento.<!--:--><!--:fr-->S\'il vous plaît transférer le montant sur ​​le compte bancaire suivant. Le paiement doit être réglé au plus tard 72 heures avant le jour de l\'événement.<!--:-->'); ?>
		</p>

		<div class="form-component form-component--readonly">
			<label for="account_name"> <?php _e('<!--:en-->Name on Account<!--:--><!--:de-->Name des Empfängers<!--:--><!--:it-->Nome del destinatario<!--:--><!--:fr-->Nom du destinataire<!--:-->'); ?> </label>
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
			<label for="bank_name"> <?php _e('<!--:en-->Financial Institution<!--:--><!--:de-->Name der Bank<!--:--><!--:it-->Nome della banca<!--:--><!--:fr-->Nom de la banque<!--:-->'); ?> </label>
			<input type="text" name="bank_name" value="<?php echo stripslashes_deep( ! empty($bank_deposit_settings['bank_name']) ? $bank_deposit_settings['bank_name'] : '' ); ?>" readonly>
		</div>

		<div class="form-component form-component--readonly">
			<label for="bank_address"> <?php _e('<!--:en-->Address<!--:--><!--:de-->Adresse<!--:--><!--:it-->Indirizzo<!--:--><!--:fr-->Adresse<!--:-->'); ?> </label>
			<textarea type="text" name="bank_address" rows="3" readonly><?php echo stripslashes_deep( ! empty($bank_deposit_settings['bank_address']) ? $bank_deposit_settings['bank_address'] : '' ); ?></textarea>
		</div>
	</fieldset>
	
	<p class="form-section">
		<?php _e('<!--:en-->By clicking "Complete Registration" I confirm that I have read and fully accept the Gran Premio Dolomiti <a href="#" title="View Terms and Conditions"><strong>Terms and Conditions</strong></a>.<!--:--><!--:de-->Durch Klick auf "Anmeldung abschließen" bestätige ich, dass ich die Gran Premio Dolomiti <a href="#" title="Teilnahmebedingungen anzeigen"><strong>Teilnahmebedingungen</strong></a> gelesen und akzeptiert habe.<!--:--><!--:it-->Cliccando su "Concludi l\'iscrizione" confermo di aver letto e accettato i <a href="#" title="Mostra Termini e Condizioni"><strong>Termini e Condizioni</strong></a> del Gran Premio Dolomiti.<!--:--><!--:fr-->By clicking Submit I confirm that I have read and fully accept the Gran Premio Dolomiti <a href="#" title="View Terms and Conditions in a new tab"><strong>Terms and Conditions</strong></a>.<!--:-->'); ?>
	</p>

	<a id="finalize_bank" class="btn btn--primary btn--newsletter finalize_button allow-leave-page inline-link" href="<?php echo $finalize_link;?>" title="<?php _e('Complete your Registration', 'event_espresso'); ?>">
		<?php _e('<!--:en-->Complete Registration<!--:--><!--:de-->Anmeldung abschließen<!--:--><!--:it-->Concludi l\'iscrizione<!--:--><!--:fr-->Confirmer l\'inscription<!--:-->'); ?>					
	</a>

<?php
}

add_action('action_hook_espresso_display_offline_payment_gateway_2', 'espresso_display_bank');
