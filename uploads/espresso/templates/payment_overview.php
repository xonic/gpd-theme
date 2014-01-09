<?php if (!defined('EVENT_ESPRESSO_VERSION')) { exit('No direct script access allowed'); }
do_action('action_hook_espresso_log', __FILE__, 'FILE LOADED', '');	?>
<form>

		<h2>
			<? _e('<!--:en-->Your Registration<!--:--><!--:de-->Ihre Anmeldung<!--:--><!--:it-->La sua registrazione<!--:--><!--:fr-->Votre Inscription<!--:-->'); ?>
		</h2>

		<?// print_r($payment_status); ?>

		<?php // localize all the things!
			switch( $payment_status ) {
				case 'Pending':
					$payment_status_translated = __( 'Pending', 'event_espresso' );
		?>
			<div class="msg msg--warning msg--has-icon space-lover">
				<div class="msg__title"><i class="fa fa-fw fa-warning"></i><? _e('<!--:en-->Payment pending<!--:--><!--:de-->Zahlung ausständig<!--:--><!--:it-->Pagamento non effettuato<!--:--><!--:fr-->En attente de paiement<!--:-->'); ?></div>
				<div class="msg__bd">
					<div><? _e('<!--:en-->Your registration is <strong>not complete</strong> until payment is received.<!--:--><!--:de-->Ihre Anmeldung ist erst <strong>nach Eingang Ihrer Zahlung</strong> vollständig abgeschlossen.<!--:--><!--:it-->La registrazione <strong>non è completa</strong> finché il pagamento è stato effetuato.<!--:--><!--:fr-->Votre inscription est complète <strong>seulement après réception de votre paiement</strong>.<!--:-->'); ?></div>
					<div><? _e('<!--:en-->Thank you.<!--:--><!--:de-->Vielen Dank.<!--:--><!--:it-->Molte grazie.<!--:--><!--:fr-->Merci beaucoup.<!--:-->'); ?></div>
				</div>
			</div>
		<?		break;
				case 'Incomplete':
					$payment_status_translated = __( 'Incomplete', 'event_espresso' );
		?>
			<div class="msg msg--warning msg--has-icon space-lover">
				<div class="msg__title"><i class="fa fa-fw fa-warning"></i><? _e('<!--:en-->Payment pending<!--:--><!--:de-->Zahlung ausständig<!--:--><!--:it-->Pagamento non effettuato<!--:--><!--:fr-->En attente de paiement<!--:-->'); ?></div>
				<div class="msg__bd">
					<div><? _e('<!--:en-->Your registration is <strong>not complete</strong> until payment is received.<!--:--><!--:de-->Ihre Anmeldung ist erst <strong>nach Eingang Ihrer Zahlung</strong> vollständig abgeschlossen.<!--:--><!--:it-->La registrazione <strong>non è completa</strong> finché il pagamento è stato effetuato.<!--:--><!--:fr-->Votre inscription est complète <strong>seulement après réception de votre paiement</strong>.<!--:-->'); ?></div>
					<div><? _e('<!--:en-->Thank you.<!--:--><!--:de-->Vielen Dank.<!--:--><!--:it-->Molte grazie.<!--:--><!--:fr-->Merci beaucoup.<!--:-->'); ?></div>
				</div>
			</div>
		<?		break;
				case 'Completed':
					$payment_status_translated = __( 'Completed', 'event_espresso' );
		?>
			<div class="msg msg--success msg--has-icon space-lover">
				<div class="msg__title"><i class="fa fa-fw fa-check"></i><? _e('<!--:en-->Payment completed<!--:--><!--:de-->Zahlung erhalten<!--:--><!--:it-->Pagamento effettuato<!--:--><!--:fr-->Paiement effectué<!--:-->'); ?></div>
				<div class="msg__bd">
					<div><? _e('<!--:en-->Your registration is <strong>complete and confirmed</strong>, your payment has been received and processed.<!--:--><!--:de-->Ihre Anmeldung ist <strong>vollständig abgeschlossen</strong>. Wir haben Ihre Zahlung erhalten und bearbeitet.<!--:--><!--:it-->La registrazione <strong>è completa</strong>. Il pagamento è stato effettuato.<!--:--><!--:fr-->Votre inscription <strong>est complète</strong>.<!--:-->'); ?></div>
					<div><? _e('<!--:en-->Thank you.<!--:--><!--:de-->Vielen Dank.<!--:--><!--:it-->Molte grazie.<!--:--><!--:fr-->Merci beaucoup.<!--:-->'); ?></div>
				</div>
			</div>
		<?		break;
				case 'Refund':
					$payment_status_translated = __( 'Completed', 'event_espresso' );
		?>
			<div class="msg msg--success msg--has-icon space-lover">
				<div class="msg__title"><i class="fa fa-fw fa-check"></i><? _e('<!--:en-->Payment completed<!--:--><!--:de-->Zahlung erhalten<!--:--><!--:it-->Pagamento effettuato<!--:--><!--:fr-->Paiement effectué<!--:-->'); ?></div>
				<div class="msg__bd">
					<div><? _e('<!--:en-->Your registration is <strong>complete and confirmed</strong>, your payment has been received and processed.<!--:--><!--:de-->Ihre Anmeldung ist <strong>vollständig abgeschlossen</strong>. Wir haben Ihre Zahlung erhalten und bearbeitet.<!--:--><!--:it-->La registrazione <strong>è completa</strong>. Il pagamento è stato effettuato.<!--:--><!--:fr-->Votre inscription <strong>est complète</strong>.<!--:-->'); ?></div>
					<div><? _e('<!--:en-->Thank you.<!--:--><!--:de-->Vielen Dank.<!--:--><!--:it-->Molte grazie.<!--:--><!--:fr-->Merci beaucoup.<!--:-->'); ?></div>
				</div>
			</div>
		<?		break;
				case 'Payment Declined':
					$payment_status_translated = __( 'Payment Declined', 'event_espresso' );
		?>
			<div class="msg msg--error msg--has-icon space-lover">
				<div class="msg__title"><i class="fa fa-fw fa-times"></i><? _e('<!--:en-->Payment declined<!--:--><!--:de-->Zahlung abgelehnt<!--:--><!--:it-->Pagamento rifiutato<!--:--><!--:fr-->Paiement refusé<!--:-->'); ?></div>
				<div class="msg__bd">
					<div><? _e('<!--:en-->We are sorry, but your <strong>payment has been declined</strong>. For further information, please <!--:--><!--:de-->Es tut uns leid, Ihnen mitteilen zu müssen, dass Ihre <strong>Zahlung abgelehnt</strong> wurde. Um weitere Informationen zu erhalten, <!--:--><!--:it-->Siamo spiacenti di comunicarle che il suo <strong>pagamento è stato rifiutato</strong>. Per ottenere ulteriori informazioni, la preghiamo di <!--:--><!--:fr-->Nous sommes désolés de vous informer que votre <strong>paiement a été refusé</strong>. Pour plus d\'informations, s\'il vous plaît <!--:-->'); ?>
						<a href="mailto:hannes@granpremiodolomiti.com?subject=<? echo 'Payment declined, registration ID: ' . $registration_id; ?>"><? _e('<!--:en-->contact us.<!--:--><!--:de-->kontaktieren Sie uns bitte.<!--:--><!--:it-->contattarci.<!--:--><!--:fr-->contactez-nous.<!--:-->') ?></a>
					</div>
					<div><? _e('<!--:en-->Thank you.<!--:--><!--:de-->Vielen Dank.<!--:--><!--:it-->Molte grazie.<!--:--><!--:fr-->Merci pour votre compréhension.<!--:-->'); ?></div>
				</div>
			</div>
		<?		break;
				default:
					$payment_status_translated = __("Error", "event_espresso");
			}
		?>
		

		<h2>
			<? _e('<!--:en-->Payment Overview<!--:--><!--:de-->Zahlungsinformationen<!--:--><!--:it-->Informazioni pagamento<!--:--><!--:fr-->Informations de paiement <!--:-->'); ?>
		</h2>
		
		<div class="form-component form-component--readonly">
			<label for="attendee_first_name"><? _e('<!--:en-->Name<!--:--><!--:de-->Name<!--:--><!--:it-->Nome<!--:--><!--:fr-->Nom<!--:-->'); ?></label>
			<input type="text" name="attendee_first_name" value="<?php echo stripslashes_deep($fname . ' ' . $lname) ?>" readonly>
		</div>
		
		<div class="form-component form-component--readonly">
			<label for="package"><? _e('<!--:en-->Package<!--:--><!--:de-->Paket<!--:--><!--:it-->Pacchetto<!--:--><!--:fr-->Forfait<!--:-->'); ?></label>
			<input type="text" name="package" value="<?php echo $price_option; ?>" readonly>
		</div>
		
		<div class="form-component form-component--readonly">
			<label for="amount"><? _e('<!--:en-->Amount Paid/Owed<!--:--><!--:de-->Bezahlter/Offener Betrag<!--:--><!--:it-->Importo pagato/residuo<!--:--><!--:fr-->Montant payé/demandé<!--:-->'); ?></label>
			<div class="media">
				<div class="media__img media__img--payment">
					<?php event_espresso_paid_status_icon($payment_status) ?>
				</div>
				<div class="media__bd">
					<input type="text" name="amount" value="<?php echo '&euro; ' . number_format($total_cost, 2); ?>" readonly>
				</div>
			</div>
		</div>
		
		<div class="form-component form-component--readonly">
			<label for="payment_status"><? _e('<!--:en-->Payment Status<!--:--><!--:de-->Status der Zahlung<!--:--><!--:it-->Stato del pagamento<!--:--><!--:fr-->Statut du paiement<!--:-->'); ?></label>
			<input type="text" name="payment_status" value="<?php echo $payment_status_translated; ?>" readonly>
		</div>
		
		<div class="form-component form-component--readonly">
			<label for="registration_id"><? _e('<!--:en-->Registration ID<!--:--><!--:de-->Registrierungs-ID<!--:--><!--:it-->ID di registrazione<!--:--><!--:fr-->ID d\'enregistrement<!--:-->'); ?></label>
			<input type="text" name="registration_id" value="<?php echo $registration_id ?>" readonly>
		</div>

	<? if($txn_type !== '') { ?>
		<div class="form-component form-component--readonly">
			<label for="transaction_id"><? _e('<!--:en-->Transaction ID<!--:--><!--:de-->Transaktions-ID<!--:--><!--:it-->ID di transazione<!--:--><!--:fr-->ID de la transaction<!--:-->'); ?></label>
			<input type="text" name="transaction_id" value="<?php echo $txn_id; ?>" readonly>
		</div>
	<? } ?>

	<input  type="hidden" name="allow_leave_page" id="allow_leave_page" value="true"/>
</form>
