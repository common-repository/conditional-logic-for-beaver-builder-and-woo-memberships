<?php
/**
 * Plugin Name: Conditional Logic for Beaver Builder and Woo Memberships
 * Plugin URI: https://wordpress.org/plugins/conditional-logic-for-beaver-builder-and-woo-memberships
 * Description: A simple plugin to add conditional logic rules to Beaver Builder for WooCommerce Membership status.
 * Version: 1.3
 * Author: Peter Gerard
 * Author URI: https://pgerard.com
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// https://docs.wpbeaverbuilder.com/beaver-themer/developer/conditional-logic-apis/

define( 'BB_LOGIC_DIGITAL_MEMBER_DIR', plugin_dir_path( __FILE__ ) );
define( 'BB_LOGIC_DIGITAL_MEMBER_URL', plugins_url( '/', __FILE__ ) );

add_action( 'bb_logic_init', function() {
	require_once BB_LOGIC_DIGITAL_MEMBER_DIR . 'includes/rules.php';
} );

add_action( 'bb_logic_enqueue_scripts', function() {
	wp_enqueue_script(
		'bb-logic-digital-member-rules',
		BB_LOGIC_DIGITAL_MEMBER_URL . 'js/rules.js',
		array( 'bb-logic-core' ),
		'1.2',
		true
	);
} );

