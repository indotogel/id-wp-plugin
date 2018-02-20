<?php

/**
 * The plugin bootstrap file
 *
 * @link              https://indotogel.pw/
 * @since             1.0.0
 * @package           Idtogel
 *
 * @wordpress-plugin
 * Plugin Name:       Indotogel
 * Plugin URI:        https://github.com/indotogel/idtogel-wp-plugin
 * Description:       Theme's specific plugin for Indotogel.pw website
 * Version:           1.0.0
 * Author:            Indotogel
 * Author URI:        https://indotogel.pw/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       idtogel
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-idtogel-activator.php
 */
function activate_idtogel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-idtogel-activator.php';
	Idtogel_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-idtogel-deactivator.php
 */
function deactivate_idtogel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-idtogel-deactivator.php';
	Idtogel_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_idtogel' );
register_deactivation_hook( __FILE__, 'deactivate_idtogel' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-idtogel.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_idtogel() {

	$plugin = new Idtogel();
	$plugin->run();

}
run_idtogel();
