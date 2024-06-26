<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://webgarh.com
 * @since      1.0.0
 *
 * @package    Woocommerce_Paypangea_Payment_Gateway
 * @subpackage Woocommerce_Paypangea_Payment_Gateway/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woocommerce_Paypangea_Payment_Gateway
 * @subpackage Woocommerce_Paypangea_Payment_Gateway/includes
 * @author     Webgarh Plugin Team <gurjinder@webgarh.co.in>
 */
class Woocommerce_Paypangea_Payment_Gateway_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woocommerce-paypangea-payment-gateway',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
