<?php if (!defined('EVENT_ESPRESSO_VERSION')) { exit('No direct script access allowed'); }
do_action('action_hook_espresso_log', __FILE__, 'FILE LOADED', '');	?>
<form>

		<h2>
			<?php _e('Your Registration', 'event_espresso'); ?>
		</h2>

		<? //print_r($payment_status); ?>

		<?php // localize all the things!
			switch( $payment_status ) {
				case 'Pending':
					$payment_status_translated = __( 'Pending', 'event_espresso' );
		?>
			<div class="msg msg--warning msg--has-icon space-lover">
				<div class="msg__title"><i class="fa fa-fw fa-warning"></i>Premium Package&nbsp;&nbsp;&nbsp;<?php echo '&euro; ' . number_format($total_cost, 2); ?></div>
				<div class="msg__bd">
					<div>You have registered for the <a href="/packages/">Premium Package</a>.</div>
					<div>The registration is <strong>not complete</strong> until we received and processed your payment.</div>
					<div>Thank you.</div>
				</div>
			</div>
		<?		break;
				case 'Incomplete':
					$payment_status_translated = __( 'Incomplete', 'event_espresso' );
		?>
			<div class="msg msg--warning msg--has-icon space-lover">
				<div class="msg__title"><i class="fa fa-fw fa-warning"></i>Premium Package&nbsp;&nbsp;&nbsp;<?php echo '&euro; ' . number_format($total_cost, 2); ?></div>
				<div class="msg__bd">
					<div>You have registered for the <a href="/packages/">Premium Package</a>.</div>
					<div>The registration is <strong>not complete</strong> until we received and processed your payment.</div>
					<div>Thank you.</div>
				</div>
			</div>
		<?		break;
				case 'Completed':
					$payment_status_translated = __( 'Completed', 'event_espresso' );
		?>
			<div class="msg msg--success msg--has-icon space-lover">
				<div class="msg__title"><i class="fa fa-fw fa-check"></i>Premium Package&nbsp;&nbsp;&nbsp;<?php echo '&euro; ' . number_format($total_cost, 2); ?></div>
				<div class="msg__bd">
					<div>You have registered for the <a href="/packages/">Premium Package</a>.</div>
					<div>Your registration is <strong>complete and confirmed</strong>, your payment has been received and processed.</div>
					<div>Thank you.</div>
				</div>
			</div>
		<?		break;
				case 'Refund':
					$payment_status_translated = __( 'Completed', 'event_espresso' );
		?>
			<div class="msg msg--success msg--has-icon space-lover">
				<div class="msg__title"><i class="fa fa-fw fa-check"></i>Premium Package&nbsp;&nbsp;&nbsp;<?php echo '&euro; ' . number_format($total_cost, 2); ?></div>
				<div class="msg__bd">
					<div>You have registered for the <a href="/packages/">Premium Package</a>.</div>
					<div>Your registration is <strong>complete and confirmed</strong>, your payment has been received and processed.</div>
					<div>Thank you.</div>
				</div>
			</div>
		<?		break;
				case 'Payment Declined':
					$payment_status_translated = __( 'Payment Declined', 'event_espresso' );
		?>
			<div class="msg msg--error msg--has-icon space-lover">
				<div class="msg__title"><i class="fa fa-fw fa-times"></i>Premium Package&nbsp;&nbsp;&nbsp;<?php echo '&euro; ' . number_format($total_cost, 2); ?></div>
				<div class="msg__bd">
					<div>You have registered for the <a href="/packages/">Premium Package</a>.</div>
					<div>We are sorry, but your payment has been declined. For further information, please contact our <a href="mailto:hannes@granpremiodolomiti.com?subject=<? echo 'Payment declined, registration ID: ' . $registration_id; ?>" title="Get help">support team</a></div>
					<div>Thank you.</div>
				</div>
			</div>
		<?		break;
				default:
					$payment_status_translated = __("Error", "event_espresso");
			}
		?>
		

		<h2>
			<?php _e('Your Payment Overview', 'event_espresso'); ?>
		</h2>
		
		<div class="form-component form-component--readonly">
			<label for="attendee_first_name"> <?php _e('Primary Registrant', 'event_espresso'); ?> </label>
			<input type="text" name="attendee_first_name" value="<?php echo stripslashes_deep($fname . ' ' . $lname) ?>" readonly>
		</div>
		
		<div class="form-component form-component--readonly">
			<label for="payment_type"> <?php _e('Payment Type', 'event_espresso'); ?> </label>
			<input type="text" name="attendee_first_name" value="Bank Transfer" readonly>
		</div>
		
		<div class="form-component form-component--readonly">
			<label for="amount"><?php _e('Amount Paid/Owed', 'event_espresso'); ?></label>
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
			<label for="payment_status"><?php _e('Payment Status', 'event_espresso'); ?></label>
			<input type="text" name="payment_status" value="<?php echo $payment_status_translated; ?>" readonly>
		</div>
		
		<div class="form-component form-component--readonly">
			<label for="registration_id"><?php _e('Registration ID', 'event_espresso'); ?></label>
			<input type="text" name="registration_id" value="<?php echo $registration_id ?>" readonly>
		</div>

	<? if($txn_type !== '') { ?>
		<div class="form-component form-component--readonly">
			<label for="transaction_id"><?php _e('Transaction ID', 'event_espresso'); ?></label>
			<input type="text" name="transaction_id" value="<?php echo $txn_id; ?>" readonly>
		</div>
	<? } ?>

	<input  type="hidden" name="allow_leave_page" id="allow_leave_page" value="true"/>
</form>
