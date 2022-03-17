<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/shaon-hossain45/
 * @since             1.0.0
 * @package           Public_Popularity
 *
 * @wordpress-plugin
 * Plugin Name:       Public Popularity
 * Plugin URI:        https://github.com/shaon-hossain45/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            shaon
 * Author URI:        https://github.com/shaon-hossain45/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       public-popularity
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
define( 'PUBLIC_POPULARITY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-public-popularity-activator.php
 */
function activate_public_popularity() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-public-popularity-activator.php';
	Public_Popularity_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-public-popularity-deactivator.php
 */
function deactivate_public_popularity() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-public-popularity-deactivator.php';
	Public_Popularity_Deactivator::deactivate();
}

/**
 * The code that runs during plugin uninstallation.
 * This action is documented in includes/class-public-popularity-uninstall.php
 */
function uninstall_public_popularity() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-public-popularity-uninstall.php';
	Public_Popularity_Deactivator::uninstall();
}

register_activation_hook( __FILE__, 'activate_public_popularity' );
register_deactivation_hook( __FILE__, 'deactivate_public_popularity' );
register_uninstall_hook( __FILE__, 'uninstall_public_popularity' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-public-popularity.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_public_popularity() {

	$plugin = new Public_Popularity();
	$plugin->run();

}
run_public_popularity();
