<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.reneecampanilla.com
 * @since      1.0.0
 *
 * @package    Simple_Fieldset
 * @subpackage Simple_Fieldset/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Simple_Fieldset
 * @subpackage Simple_Fieldset/includes
 * @author     Renee Campanilla <renee.campanilla@gmail.com>
 */
class Simple_Fieldset_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'simple-fieldset',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
