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
 * @package           SevenAD_ACC
 *
 * @wordpress-plugin
 * Plugin Name:       Accordion Shortcode
 * Plugin URI:        https://sevenagesdesign.com/
 * Description:       Creates a shortcode for accordion section creation. Usage => [accordion title="Your Title" content="Your Content Here"]
 * Version:           1.0.2
 * Author:            Seven Ages Design
 * Author URI:        https://sevenagesdesign.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sevenad-acc
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
define( 'SEVENAD_ACC_VERSION', '1.0.2' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sevenad-acc-activator.php
 */
function activate_sevenad_acc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sevenad-acc-activator.php';
	SevenAD_ACC_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sevenad-acc-deactivator.php
 */
function deactivate_sevenad_acc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sevenad-acc-deactivator.php';
	SevenAD_ACC_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sevenad_acc' );
register_deactivation_hook( __FILE__, 'deactivate_sevenad_acc' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sevenad-acc.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sevenad_acc() {

	$plugin = new SevenAD_ACC();
	$plugin->run();

}
run_sevenad_acc();
