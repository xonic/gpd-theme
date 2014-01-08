<?php if (!defined('EVENT_ESPRESSO_VERSION')) { exit('No direct script access allowed'); }
do_action('action_hook_espresso_log', __FILE__, 'FILE LOADED', '');	
//Confirmation Page Template
?>

<form>
	<fieldset class="form-section">
		<h2>
			<? _e('<!--:en-->Payment Overview<!--:--><!--:de-->Zahlungsinformationen<!--:--><!--:it-->Informazioni pagamento<!--:--><!--:fr-->Informations de paiement <!--:-->'); ?>
		</h2>

		<div class="msg msg--warning msg--has-icon">
			<div class="msg__title"><i class="fa fa-fw fa-warning"></i><? _e('<!--:en-->Payment Pending<!--:--><!--:de-->Zahlung ausständig<!--:--><!--:it-->Pagamento non effetuato<!--:--><!--:fr-->En attente de paiement<!--:-->'); ?></div>
			<div class="msg__bd">
				<div><? _e('<!--:en-->Your registration is not complete until payment is received.<!--:--><!--:de-->Ihre Anmeldung ist erst nach Eingang Ihrer Zahlung vollständig abgeschlossen.<!--:--><!--:it-->La registrazione non è completa finché il pagamento è stato effetuato.<!--:--><!--:fr-->Votre inscription est complète seulement après réception de votre paiement.<!--:-->'); ?></div>
			  	<div>
					<span class="event_espresso_name section-title"><? _e('<!--:en-->Amount Due:<!--:--><!--:de-->Fälliger Betrag:<!--:--><!--:it-->Importo dovuto:<!--:--><!--:fr-->Montant dû:<!--:-->'); ?></span> 
					<span class="event_espresso_value"><strong><?php echo '&euro; ' . number_format($total_cost, 2); ?></strong></span>
				</div>
			  	
				<div>
					<span class="section-title"><? _e('<!--:en-->Your Registration ID:<!--:--><!--:de-->Ihre Registrierungs-ID:<!--:--><!--:it-->ID di registrazione:<!--:--><!--:fr-->ID d\'enregistrement:<!--:-->'); ?></span><strong><?php echo $registration_id ?></strong>
				</div>
			</div>
		</div>
		
		<div class="space-lover">
			<?php echo $org_options['email_before_payment'] == 'Y' ? _e('<!--:en-->A confirmation email has been sent with additional details of your registration and payment.<!--:--><!--:de-->Wir haben Ihnen eine E-mail mit Ihren Registrierungsdaten und den Zahlungsinformationen gesendet.<!--:--><!--:it-->Le abbiamo inviato una e-mail con ulteriori informazioni sulla registrazione e il pagamento.<!--:--><!--:fr-->Nous vous avons envoyé un e-mail avec vos informations d\'enregistrement et les informations de paiement.<!--:-->') : ''; ?>
		</div>
