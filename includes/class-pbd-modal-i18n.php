<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://pbdigital.com.au/
 * @since      1.0.0
 *
 * @package    Pbd_Modal
 * @subpackage Pbd_Modal/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Pbd_Modal
 * @subpackage Pbd_Modal/includes
 * @author     PB Digital <info@pbdigital.com.au>
 */
class Pbd_Modal_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'pbd-modal',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
