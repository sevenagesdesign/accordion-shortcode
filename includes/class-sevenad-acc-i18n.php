<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://sevenagesdesign.com/
 * @since      1.0.0
 *
 * @package    SevenAD_ACC
 * @subpackage SevenAD_ACC/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    SevenAD_ACC
 * @subpackage SevenAD_ACC/includes
 * @author     Seven Ages Design <dev@sevenagesdesign.com>
 */
class SevenAD_ACC_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sevenad-acc',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
