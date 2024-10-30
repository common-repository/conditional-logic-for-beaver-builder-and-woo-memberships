<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

BB_Logic_Rules::register( array(
    'bb-logic-digital-member/membership-active' => 'bb_logic_digital_member_user_membership_active',
) );

function bb_logic_digital_member_user_membership_active( $rule ) {
  if (isset($rule->key)) {
    $value = $rule->key;
  }
  else {
    $value = null;
  }
  if (isset($rule->compare)) {
    $compare = $rule->compare;
  }
  else {
    $compare = null;
  }
  if (isset($rule->operator)) {
    $operator = $rule->operator;
  }
  else {
    $operator = 'is_set'; // default
  }
  return BB_Logic_Rules::evaluate_rule( array(
		'value' 	=> bb_logic_digital_member_membership_status($value),
    'isset' => bb_logic_digital_member_membership_active($value),
		'operator' 	=> $operator,
    'compare' => $compare,
	) );
}

function bb_logic_digital_member_membership_status($plan_id) {
  if (empty($plan_id)) {
    $plan_id = 'digital'; // fall back to digital
  }
  //mg_log("comparing to ".$plan_id);
  $user_id = get_current_user_id();
  if (!$user_id || empty($user_id)) {
    return 'inactive';
  }
  
  $customer_membership = wc_memberships_get_user_membership( $user_id, $plan_id );
  if ($customer_membership) {
    return $customer_membership->get_status();
  }
  else {
    return 'inactive';
  }
}

function bb_logic_digital_member_membership_active($plan_id) {
  if (empty($plan_id)) {
    $plan_id = 'digital'; // fall back to digital
  }
  //mg_log("checking active on ".$plan_id);
  $status = bb_logic_digital_member_membership_status($plan_id);
  // TODO use WC_Memberships_User_Memberships get_active_access_membership_statuses()
  if ( in_array( $status, array('active', 'complimentary', 'pending', 'free_trial') ) ) {
    return true;
  }
  else {
    return false;
  }
}