<?php if (!defined('EVENT_ESPRESSO_VERSION')) { exit('No direct script access allowed'); }
do_action('action_hook_espresso_log', __FILE__, 'FILE LOADED', '');	
//Confirmation Page Template
?>

<form>
	<fieldset class="form-section">
		<h2>
			<?php _e('Payment Overview', 'event_espresso'); ?>
		</h2>

		<div class="msg msg--warning msg--has-icon">
			<div class="msg__title"><i class="fa fa-fw fa-warning"></i>Payment Pending</div>
			<div class="msg__bd">
				<div><?php _e('Your registration is not complete until payment is received.', 'event_espresso'); ?></div>
			  	<div>
					<span class="event_espresso_name section-title"><?php _e('Amount due: ', 'event_espresso'); ?></span> 
					<span class="event_espresso_value"><strong><?php echo '&euro; ' . number_format($total_cost, 2); ?></strong></span>
				</div>
			  	
				<div>
					<span class="section-title"><?php _e('Your Registration ID: ', 'event_espresso'); ?></span><strong><?php echo $registration_id ?></strong>
				</div>
			</div>
		</div>
		
		<div class="space-lover">
			<?php echo $org_options['email_before_payment'] == 'Y' ? __('A confirmation email has been sent with additional details of your registration.', 'event_espresso') : ''; ?>
		</div>
