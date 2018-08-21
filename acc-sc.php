<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://sevenagesdesign.com/
 * @since             1.0.0
 * @package           Acc_Sc
 *
 * @wordpress-plugin
 * Plugin Name:       Accordion Shortcode
 * Plugin URI:        https://sevenagesdesign.com/
 * Description:       Creates a shortcode for accordion section creation. Usage => [accordion title="Your Title" content="Your Content Here"] !IMPORTANT! Do not update this plugin
 * Version:           1.0.0
 * Author:            Seven Ages Design
 * Author URI:        https://sevenagesdesign.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       acc-sc
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ACCORDION_SHORTCODE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-acc-sc-activator.php
 */
function activate_acc_sc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-acc-sc-activator.php';
	Acc_Sc_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-acc-sc-deactivator.php
 */
function deactivate_acc_sc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-acc-sc-deactivator.php';
	Acc_Sc_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_acc_sc' );
register_deactivation_hook( __FILE__, 'deactivate_acc_sc' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-acc-sc.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_acc_sc() {

	$plugin = new Acc_Sc();
	$plugin->run();

}
run_acc_sc();
