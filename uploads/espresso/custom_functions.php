<?php

//Build the form questions. This function can be overridden using the custom files addon
if (!function_exists('event_espresso_add_question_groups')) {

	function event_espresso_add_question_groups($question_groups, $answer = '', $event_id = null, $multi_reg = 0, $meta = array(), $class = 'my_class') {
		global $wpdb;
		
		//If memebers addon is installed, check to see if we want to disable the form fields for members
		$disabled = '';
		if ( function_exists('espresso_members_installed') && espresso_members_installed() == true ) {
			$member_options = get_option('events_member_settings');
			if ( is_user_logged_in() && !empty($member_options['autofilled_editable']) && $member_options['autofilled_editable'] == 'N' )
			$disabled = 'disabled="disabled"';
		}
				
		$event_id = empty($_REQUEST['event_id']) ? $event_id : $_REQUEST['event_id'];
		if (count($question_groups) > 0) {
			$questions_in = '';

			$FILTER = '';
			if (isset($_REQUEST['regevent_action']))
				$FILTER = " AND q.admin_only != 'Y' ";

			//echo 'additional_attendee_reg_info = '.$meta['additional_attendee_reg_info'].'<br />';
			//Only personal information for the additional attendees in each group
			if (isset($meta['additional_attendee_reg_info']) && $meta['additional_attendee_reg_info'] == '2' && isset($meta['attendee_number']) && $meta['attendee_number'] > 1)
				$FILTER .= " AND qg.system_group = 1 ";
            
			if (!is_array($question_groups) && !empty($question_groups)) {
				$question_groups = unserialize($question_groups);
			}

			//Debug
			//echo "<pre>".print_r($question_groups,true)."</pre>";

			foreach ($question_groups as $g_id) {
				$questions_in .= $g_id . ',';
			}

			$questions_in = substr($questions_in, 0, -1);
			$group_name = '';
			$counter = 0;

			$sql = "SELECT q.*, qg.group_name, qg.group_description, qg.show_group_name, qg.show_group_description, qg.group_identifier
					FROM " . EVENTS_QUESTION_TABLE . " q
					JOIN " . EVENTS_QST_GROUP_REL_TABLE . " qgr ON q.id = qgr.question_id
					JOIN " . EVENTS_QST_GROUP_TABLE . " qg ON qg.id = qgr.group_id
					WHERE qgr.group_id in ( $questions_in ) $FILTER
					ORDER BY qg.group_order ASC, qg.id, q.sequence, q.id ASC";
			//echo $sql;

			$questions = $wpdb->get_results($sql);

			$num_rows = $wpdb->num_rows;
			$html = '';

			if ($num_rows > 0) {
				$questions_displayed = array();
				foreach ($questions as $question) {
					$counter++;
					if (!in_array($question->id, $questions_displayed)) {
						$questions_displayed[] = $question->id;

						//if new group, close fieldset
						$html .= ($group_name != '' && $group_name != $question->group_name) ? '</fieldset>' : '';

						if ($group_name != $question->group_name) {
							if($question->group_name === "Hotel / Unterkunft / Albergo / Logement")
							{
								$html .= '<fieldset class="form-section js-hotel-group" id="' . $question->group_identifier . '">';
							}
							else
							{
								$html .= '<fieldset class="form-section" id="' . $question->group_identifier . '">';
							}
							$html .= $question->show_group_name != 0 ? "<h2 class=\"js-translate\">".stripslashes_deep($question->group_name)."</h2>" : '';
							$html .= $question->show_group_description != 0 && $question->group_description == true ? '<p class="quest-group-descript">' . stripslashes_deep($question->group_description) . '</p>' : '';
							$group_name = stripslashes_deep($question->group_name);
						}

						// BEGIN EDIT TOM
						$html .= event_form_build($question, $answer, $event_id, $multi_reg, $meta, $class , $disabled);
						// END EDIT TOM
					}
					$html .= $counter == $num_rows ? '</fieldset>' : '';
				}
			}//end questions display
		} else {
			$html = '';
		}
		return $html;
	}

}

// Override event form builder to add .js-translate class
if (!function_exists('event_form_build')) {

	function event_form_build( $question, $answer = "", $event_id = null, $multi_reg = 0, $extra = array(), $class = 'ee-reg-page-questions', $disabled = '' ) {
		if ($question->admin_only == 'Y' && empty($extra['admin_only'])) {
			return;
		}
		
		$attendee_number = isset($extra['attendee_number']) ? $extra['attendee_number'] : 'XXXXXX';
		$price_id = isset($extra['price_id']) ? $extra['price_id'] : 0;
		$multi_name_adjust = $multi_reg == 1 ? "[$event_id][$price_id][$attendee_number]" : '';
		$text_input_class = ' ee-reg-page-text-input ';
		
		// XXXXXX will get replaced with the attendee number
		$XATT1 = isset( $extra['x_attendee'] ) && $extra['x_attendee'] ? 'x_attendee_' : '';
		$XATT2 = isset( $extra['x_attendee'] ) && $extra['x_attendee'] ? '[XXXXXX]' : '';

		$field_name = ($question->system_name != '') ? $question->system_name : $question->question_type . '_' . $question->id;
		$email_validate = $question->system_name == 'email' ? 'email' : '';
		$question->system_name = ! empty( $extra["x_attendee"] ) ? "x_attendee_" . $question->system_name . "[XXXXXX]" : $question->system_name;

		$question->question = stripslashes( $question->question );

		if ($question->required == "Y") {
			$required_title = ' title="' . $question->required_text . '"';
			$required_class = ' required ' . $email_validate . ' ';
			$required_label = "<em>*</em>";
		} else {
			$required_title = '';
			$required_class = '';
			$required_label = '';
		}
		$label = '<label for="' . $XATT1 . $field_name . $XATT2 . '" class="' . $class .' js-translate' . '">' . trim( stripslashes( str_replace( '&#039;', "'", $question->question ))) . $required_label . '</label> ';
		
		if (is_array($answer) && array_key_exists('event_attendees', $answer) /*&& $attendee_number === 1*/) {
			$answer = isset($answer['event_attendees'][$price_id][$attendee_number][$XATT1 . $field_name . $XATT2]) ? $answer['event_attendees'][$price_id][$attendee_number][$XATT1 . $field_name . $XATT2] : '';
		}

		//If the members addon is installed, get the users information if available
		if ( function_exists('espresso_members_installed') && espresso_members_installed() == true ) {
			global $current_user;
			global $user_email;
			require_once(EVENT_ESPRESSO_MEMBERS_DIR . "user_vars.php"); //Load Members functions
			$userid = $current_user->ID;
		}

		$html = '';
		
		if ( is_array( $answer )) {
			array_walk_recursive( $answer, 'trim' );
		} else {
			$answer = trim( $answer );
		}
		
		switch ($question->question_type) {
		
			case "TEXT" :
			
				if (defined('EVENT_ESPRESSO_MEMBERS_DIR') && (empty($_REQUEST['event_admin_reports']) || $_REQUEST['event_admin_reports'] != 'add_new_attendee')) {
					if (!empty($question->system_name)) {
					
						$answer = htmlspecialchars( stripslashes( $answer ), ENT_QUOTES, 'UTF-8' );
						
						switch ($question->system_name) {
						
							case $question->system_name == 'fname':							
								$answer = $attendee_number === 1 && ! $answer ? htmlspecialchars( stripslashes( $current_user->first_name ), ENT_QUOTES, 'UTF-8' ) : $answer;
								$html .= empty($answer) ? '' : '<input name="' . $question->system_name . $multi_name_adjust . '" type="hidden" value="' . $answer . '" class="' . $class . '" />';
								break;
								
							case $question->system_name == 'lname':								
								$answer = $attendee_number === 1 && ! $answer ? htmlspecialchars( stripslashes( $current_user->last_name ), ENT_QUOTES, 'UTF-8' ) : $answer;
								$html .= empty($answer) ? '' : '<input name="' . $question->system_name . $multi_name_adjust . '" type="hidden" value="' . $answer . '" class="' . $class . '" />';
								break;
								
							case $question->system_name == 'email':								
								$answer = $attendee_number === 1 && ! $answer ? htmlspecialchars( stripslashes( $user_email ), ENT_QUOTES, 'UTF-8' ) : $answer;
								$html .= empty($answer) ? '' : '<input name="' . $question->system_name . $multi_name_adjust . '" type="hidden" value="' . $answer . '" class="' . $class . '" />';
								break;
								
							case $question->system_name == 'address':								
								$answer = $attendee_number === 1 && ! $answer  ? htmlspecialchars( stripslashes( get_user_meta($userid, 'event_espresso_address', TRUE ) ), ENT_QUOTES, 'UTF-8' ) : $answer;
								$html .= empty($answer) ? '' : '<input name="' . $question->system_name . $multi_name_adjust . '" type="hidden" value="' . $answer . '" class="' . $class . '" />';
								break;
								
							case $question->system_name == 'city':								
								$answer = $attendee_number === 1 && ! $answer ? htmlspecialchars( stripslashes( get_user_meta($userid, 'event_espresso_city', TRUE ) ), ENT_QUOTES, 'UTF-8' ) : $answer;
								$html .= empty($answer) ? '' : '<input name="' . $question->system_name . $multi_name_adjust . '" type="hidden" value="' . $answer . '" class="' . $class . '" />';
								break;
								
							case $question->system_name == 'state':								
								$answer = $attendee_number === 1 && ! $answer ? htmlspecialchars( stripslashes( get_user_meta($userid, 'event_espresso_state', TRUE ) ), ENT_QUOTES, 'UTF-8' ) : $answer;
								$html .= empty($answer) ? '' : '<input name="' . $question->system_name . $multi_name_adjust . '" type="hidden" value="' . $answer . '" class="' . $class . '" />';
								break;
								
							case $question->system_name == 'zip':								
								$answer = $attendee_number === 1 && ! $answer ? htmlspecialchars( stripslashes( get_user_meta($userid, 'event_espresso_zip', TRUE ) ), ENT_QUOTES, 'UTF-8' ) : $answer;
								$html .= empty($answer) ? '' : '<input name="' . $question->system_name . $multi_name_adjust . '" type="hidden" value="' . $answer . '" class="' . $class . '" />';
								break;
								
							case $question->system_name == 'phone':								
								$answer = $attendee_number === 1 && ! $answer ? htmlspecialchars( stripslashes( get_user_meta($userid, 'event_espresso_phone', TRUE ) ), ENT_QUOTES, 'UTF-8' ) : $answer;
								$html .= empty($answer) ? '' : '<input name="' . $question->system_name . $multi_name_adjust . '" type="hidden" value="' . $answer . '" class="' . $class . '" />';
								break;
								
							case $question->system_name == 'country':								
								$answer = $attendee_number === 1 && ! $answer ? htmlspecialchars( stripslashes( get_user_meta($userid, 'event_espresso_country', TRUE ) ), ENT_QUOTES, 'UTF-8' ) : $answer;
								$html .= empty($answer) ? '' : '<input name="' . $question->system_name . $multi_name_adjust . '" type="hidden" value="' . $answer . '" class="' . $class . '" />';
								break;
								
						}
					}
				}

				if (is_array($answer)) { 
					$answer = '';
				}
				if ($answer == '') {
					$disabled = '';
				}
				
				$html .= '<div class="event_form_field">' . $label;
				$html .= '<input type="text" ' . $required_title . ' class="' . $required_class . $class . $text_input_class .' ' . $field_name . '" id="' . $XATT1 . $field_name . $XATT2 . '-' . $event_id . '-' . $price_id . '-' . $attendee_number . '" name="' . $XATT1 . $field_name . $XATT2 . $multi_name_adjust . '" value="' . htmlspecialchars( stripslashes( $answer ), ENT_QUOTES, 'UTF-8' ) . '" ' . $disabled . ' /></div>';	
				break;
				
			case "TEXTAREA" :
			
				if (is_array($answer)) $answer = '';
				$html .= '<div class="event_form_field event-quest-group-textarea">' . $label;
				$html .= '<textarea ' . $required_title . ' class="' . $required_class . $class . $text_input_class . ' ' . $field_name . '" id="' . $XATT1 . $field_name . $XATT2 . '-' . $event_id . '-' . $price_id . '-' . $attendee_number . '" name="' . $XATT1 . $field_name . $XATT2 . $multi_name_adjust . '" rows="5">' . htmlspecialchars( stripslashes( $answer ), ENT_QUOTES, 'UTF-8' ) . '</textarea></div>';
			break;
				
			case "SINGLE" :

				$question = apply_filters('filter_hook_espresso_form_question', $question );
				
				if ( ! empty( $question->response )) {

					$html .= '<div class="single-radio">' . $label;
					$html .= '<ul class="options-list-radio event_form_field">';
					
					$values = explode(",", $question->response);
					$answer = trim( stripslashes( str_replace( '&#039;', "'", $answer )));
					$answer = htmlspecialchars( $answer, ENT_QUOTES, 'UTF-8' );
					
					foreach ($values as $key => $value) {

						$value = trim( stripslashes( str_replace( '&#039;', "'", $value )));
						$value = htmlspecialchars( $value, ENT_QUOTES, 'UTF-8' );
						$checked = ( $value == $answer ) ? ' checked="checked"' : "";
						$value_id = 'SINGLE_' . $question->id . '_' . $key . '_' . $attendee_number;
						
						$formatted = apply_filters('filter_hook_espresso_question_formatted_value', $value, $question );
						
						$html .= '
						<li>
							<label for="' . $value_id . '" class="' . $class . ' radio-btn-lbl">
								<input id="' . $value_id . '" ' . $required_title . ' class="' . $required_class . $class . ' ' . $field_name . '" name="' . $XATT1 . $field_name . $XATT2 . $multi_name_adjust . '"  type="radio" value="' . $value . '" ' . $checked . ' /> 
								<span>' . $formatted . '</span>
							</label>
						</li>';

					}
					
					$html .= '</ul>';
					$html .= '</div>';	

				}

				break;
				
			case "MULTIPLE" :
			
				$question = apply_filters('filter_hook_espresso_form_question', $question );

				if ( ! empty( $question->response )) {

					$html .= '<div class="multi-checkbox">' . $label;
					$html .= '<ul class="options-list-check event_form_field">';

					if ( is_array( $answer )) {
						foreach ( $answer as $key => $value ) {
							$value = trim( stripslashes( str_replace( '&#039;', "'", $value )));
							$answer[$key] = htmlspecialchars( $value, ENT_QUOTES, 'UTF-8' );
						}					
					} else {
						$answer = trim( stripslashes( str_replace( '&#039;', "'", $answer )));
						$answer = htmlspecialchars( $answer, ENT_QUOTES, 'UTF-8' );
					}

					
					$values = explode(",", $question->response);
					foreach ($values as $key => $value) {
						
						$value = trim( stripslashes( str_replace( '&#039;', "'", $value )));
						$value = htmlspecialchars( $value, ENT_QUOTES, 'UTF-8' );
						$checked = (is_array($answer) && in_array($value, $answer)) ? ' checked="checked"' : "";
						$value_id = str_replace(' ', '', $value) . '-' . $event_id . '_' . $attendee_number;

						$formatted = apply_filters('filter_hook_espresso_question_formatted_value', $value, $question );

						$html .= '
						<li>
							<label for="' . $value_id . '" class="' . $class . ' checkbox-lbl">
								<input id="' . $value_id . '" ' . $required_title . ' class="' . $required_class . $class . ' ' . $field_name . '" name="' . $XATT1 . $field_name . $XATT2 . $multi_name_adjust . '[]"  type="checkbox" value="' . $value . '" ' . $checked . '/> 
								<span>' . $formatted . '</span>
							</label>
						</li>';
						
					}
					
					$html .= '</ul>';
					$html .= '</div>';
					
				}
					
				break;
				
			case "DROPDOWN" :
			
				$question = apply_filters('filter_hook_espresso_form_question', $question );

				if ( ! empty( $question->response )) {

					$dd_type = $question->system_name == 'state' ? 'name="state"' : 'name="' . $XATT1 . $field_name . $XATT2 . $multi_name_adjust . '"';

					if($question->question === "Hotel Platinum 1 / Unterkunft Platinum 1 / Albergo Platinum 1 / Logement Platinum 1")
					{
						$html .= '
							<div class="event_form_field is-hidden js-hotel-platinum-1 ' . $class . '">' . $label;
					}
					else if($question->question === "Hotel Platinum 2 / Unterkunft Platinum 2 / Albergo Platinum 2 / Logement Platinum 2")
					{
						$html .= '
							<div class="event_form_field is-hidden js-hotel-platinum-2 ' . $class . '">' . $label;
					}
					else
					{
						$html .= '
							<div class="event_form_field" class="' . $class . '">' . $label;
					}
					$html .= '
						<select ' . $dd_type . ' ' . $required_title . ' class="' . $required_class . $class . ' ' . $field_name . '" id="DROPDOWN_' . $question->id . '-' . $event_id . '-' . $price_id . '-' . $attendee_number . '">';
					
					$html .= '
							<option value="">' . __('Select One', 'event_espresso') . "</option>";
					
					$answer = trim( stripslashes( str_replace( '&#039;', "'", $answer )));
					$answer = htmlspecialchars( $answer, ENT_QUOTES, 'UTF-8' );

					$values = explode( ',', $question->response );
					foreach ( $values as $key => $value ) {
					
						$value = trim( stripslashes( str_replace( '&#039;', "'", $value )));
						$value = htmlspecialchars( $value, ENT_QUOTES, 'UTF-8' );
						$selected = ( $value == $answer ) ? ' selected="selected"' : "";

						$formatted = apply_filters('filter_hook_espresso_question_formatted_value', $value, $question );

						$html .= '
							<option class="js-translate" value="' . $value . '"' . $selected . '> ' . $formatted . '</option>';					
					}
					
					$html .= '
					</select>';
					$html .= '
					</div>';
					
				}
				
				break;
				
			default :
				break;
				
		}
		if (is_numeric($attendee_number)) $attendee_number++;
		return $html;
	}

}

// Hide payment overview since we only accept bank transfer
add_action( 'wp_print_scripts', 'my_no_ee_paybutton_hideform', 100 );

function my_no_ee_paybutton_hideform() {
    wp_deregister_script( 'espresso_payment_page' );
}

if (!function_exists('event_espresso_price_dropdown')) {

    function event_espresso_price_dropdown($event_id, $atts) {
		
		do_action('action_hook_espresso_log', __FILE__, __FUNCTION__, '');
		//Attention:
		//If changes to this function are not appearing, you may have the members addon installed and will need to update the function there.
		//echo "<pre>".print_r($atts,true)."</pre>";
		extract($atts);
        global $wpdb, $org_options;
       	
		$html = '';
		
		$label = $label == '' ? '<span class="section-title">'.__('Choose an Option: ', 'event_espresso').'</span>' : $label;
		
		//Will make the name an array and put the time id as a key so we know which event this belongs to
        $multi_name_adjust = isset($multi_reg) && $multi_reg == true ? "[$event_id]" : '';
       
	    $surcharge_text = isset($org_options['surcharge_text']) ? $org_options['surcharge_text'] : __('Surcharge', 'event_espresso');

        $results = $wpdb->get_results( $wpdb->prepare("SELECT id, event_cost, surcharge, surcharge_type, price_type FROM " . EVENTS_PRICES_TABLE . " WHERE event_id='" . $event_id . "' ORDER BY id ASC", '') );

        if ($wpdb->num_rows > 1) {
           //Create the label for the drop down
			$html .= $show_label == 1 ? '<label class="ee-reg-page-questions" for="event_cost"><h2 class="js-translate">Package / Paket / Pacchetto / Forfait</h2></label>' : '';
	
			//Create a dropdown of prices
			$html .= '<select name="price_option' . $multi_name_adjust . '" id="price_option-' . $event_id . '">';

            foreach ($results as $result) {

                $selected = isset($current_value) && $current_value == $result->id ? ' selected="selected" ' : '';

                // Addition for Early Registration discount
                if ($early_price_data = early_discount_amount($event_id, $result->event_cost)) {
                    $result->event_cost = $early_price_data['event_price'];
                    $message = __(' Early Pricing', 'event_espresso');
                } else {
					$message = '';
				}

                $surcharge = '';

                if ($result->surcharge > 0 && $result->event_cost > 0.00) {
                    $surcharge = " + {$org_options['currency_symbol']}{$result->surcharge} " . $surcharge_text;
                    if ($result->surcharge_type == 'pct') {
                        $surcharge = " + {$result->surcharge}% " . $surcharge_text;
                    }
                }

                //Using price ID
                $html .= '<option' . $selected . ' value="' . $result->id . '|' . stripslashes_deep($result->price_type) . '">' . stripslashes_deep($result->price_type) . ' (&euro; ' . number_format($result->event_cost, 2) . $message . ') ' . $surcharge . ' </option>';
            }
            $html .= '</select><input type="hidden" name="price_select" id="price_select-' . $event_id . '" value="true" />';
        } else if ($wpdb->num_rows == 1) {
            foreach ($results as $result) {

                // Addition for Early Registration discount
                if ($early_price_data = early_discount_amount($event_id, $result->event_cost)) {
                    $result->event_cost = $early_price_data['event_price'];
                    $message = sprintf(__(' (including %s early discount) ', 'event_espresso'), $early_price_data['early_disc']);
                }

                $surcharge = '';

                if ($result->surcharge > 0) {
                    $surcharge = " + {$org_options['currency_symbol']}{$result->surcharge} " . $surcharge_text;
                    if ($result->surcharge_type == 'pct') {
                        $surcharge = " + {$result->surcharge}% " . $surcharge_text;
                    }
                }
                $message = isset($message) ? $message : '';

              
                $html .= '<span class="event_price_label">' . __('Price:', 'event_espresso') . '</span> <span class="event_price_value">' . $org_options['currency_symbol'] . number_format($result->event_cost, 2) . $message . $surcharge . '</span>';
                $html .= '<input type="hidden" name="price_id' . $multi_name_adjust . '" id="price_id-' . $result->id . '" value="' . $result->id . '" />';
               
            }
        }
       	echo $html;
		return;
    }
	add_action('espresso_price_select', 'event_espresso_price_dropdown', 20, 2);
}

// make the payment option (ticket name) available on the thank you page
function espresso_prepare_payment_data_for_gateways_custom( $payment_data ) {
	remove_filter('filter_hook_espresso_prepare_payment_data_for_gateways', 'espresso_prepare_payment_data_for_gateways');
	global $wpdb, $org_options;
	$SQL = "SELECT ea.price_option, ea.email, ea.event_id, ea.registration_id, ea.txn_type, ed.start_date,";
	$SQL .= " ea.attendee_session, ed.event_name, ea.lname, ea.fname, ea.total_cost,";
	$SQL .= " ea.payment_status, ea.payment_date, ea.address, ea.city, ea.txn_id,";
	$SQL .= " ea.zip, ea.state, ea.phone, ed.event_meta FROM " . EVENTS_ATTENDEE_TABLE . " ea";
	$SQL .= " JOIN " . EVENTS_DETAIL_TABLE . " ed ON ed.id=ea.event_id";
	$SQL .= " WHERE ea.id = %d";
	$temp_data = $wpdb->get_row( $wpdb->prepare( $SQL, $payment_data['attendee_id'] ), ARRAY_A );
	$payment_data = array_merge( $payment_data, $temp_data );
	$payment_data['contact'] = $org_options['contact_email'];
	$payment_data['event_meta'] = unserialize($temp_data['event_meta']);
	return $payment_data;
}

add_filter('filter_hook_espresso_prepare_payment_data_for_gateways', 'espresso_prepare_payment_data_for_gateways_custom', 5);

?>