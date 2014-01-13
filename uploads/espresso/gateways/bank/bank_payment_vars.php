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
			<?php _e('<!--:en-->Please transfer the money to the following bank account. The payment must be performed within 10 days after registration.<!--:--><!--:de-->Bitte überweisen Sie den Betrag auf das folgende Bankkonto. Die Zahlung muss innerhalb 10 Tagen nach der Anmeldung durchgeführt werden.<!--:--><!--:it-->La preghiamo di trasferire l\'importo sul seguente conto bancario. Il pagamento deve essere effettuato entro e non oltre 10 giorno dopo l\'iscrizione.<!--:--><!--:fr-->Veuillez transférer s\'il vous plaît le montant sur ​​le compte bancaire suivant. Le paiement doit être effectué au plus tard 10 jours après l\'inscription.<!--:-->'); ?>
		</p>

		<div class="form-component form-component--readonly">
			<label for="account_name"> <?php _e('<!--:en-->Name on Account<!--:--><!--:de-->Name des Empfängers<!--:--><!--:it-->Nome del destinatario<!--:--><!--:fr-->Nom du destinataire<!--:-->'); ?> </label>
			<input type="text" name="account_name" value="<?php echo stripslashes_deep( ! empty($bank_deposit_settings['account_name']) ? $bank_deposit_settings['account_name'] : '' ); ?>" readonly>
		</div>

		<div class="form-component form-component--readonly">
			<label for="iban"> <?php _e('IBAN', 'event_espresso'); ?> </label>
			<input type="text" name="iban" value="IT 21 H 08133 58593 000040104941" readonly>
		</div>

		<div class="form-component form-component--readonly">
			<label for="swift_bic"> <?php _e('SWIFT/BIC Code', 'event_espresso'); ?> </label>
			<input type="text" name="swift_bic" value="ICRAITRR3P0" readonly>
		</div>
	</fieldset>
	
	<p class="form-section">
		<?php _e('<!--:en-->By clicking "Complete Registration" I confirm that I have read and fully accept the Gran Premio Dolomiti <a href="#" title="View Terms and Conditions"><strong>Terms and Conditions</strong></a>.<!--:--><!--:de-->Durch Klick auf "Anmeldung abschließen" bestätige ich, dass ich die Gran Premio Dolomiti <a href="#" title="Teilnahmebedingungen anzeigen"><strong>Teilnahmebedingungen</strong></a> gelesen und akzeptiert habe.<!--:--><!--:it-->Cliccando su "Concludi l\'iscrizione" confermo di aver letto e accettato i <a href="#" title="Mostra Termini e Condizioni"><strong>Termini e Condizioni</strong></a> del Gran Premio Dolomiti.<!--:--><!--:fr-->En cliquant sur Confirmer l\'inscription, vous confirmez votre accord avec <a href="#" title="Voir les Termes et Conditions"><strong>les Termes et Conditions du Gran Premio Dolomiti</strong></a>.<!--:-->'); ?>
	</p>

	<a id="finalize_bank" class="btn btn--primary btn--newsletter finalize_button allow-leave-page inline-link" href="<?php echo $finalize_link;?>" title="<?php _e('Complete your Registration', 'event_espresso'); ?>">
		<?php _e('<!--:en-->Complete Registration<!--:--><!--:de-->Anmeldung abschließen<!--:--><!--:it-->Concludi l\'iscrizione<!--:--><!--:fr-->Confirmer l\'inscription<!--:-->'); ?>					
	</a>

<?php
}

add_action('action_hook_espresso_display_offline_payment_gateway_2', 'espresso_display_bank');
