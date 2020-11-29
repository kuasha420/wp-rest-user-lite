<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://sk8.tech?utm_source=wp-admin&utm_medium=forum&utm_campaign=wp-rest-user
 * @since             1.1.0
 * @package           Wp_Rest_User
 *
 * @wordpress-plugin
 * Plugin Name:       WP REST User Lite
 * Plugin URI:        https://github.com/kuasha420/wp-rest-user-lite
 * Description:       WP REST User adds in the 'User Registration' function for REST API.
 * Version:           1.0.0
 * Author:            Arafat Zahan
 * Author URI:        https://github.com/kuasha420
 * Author:            SK8Tech
 * Author URI:        https://sk8.tech?utm_source=wp-admin&utm_medium=forum&utm_campaign=wp-rest-user
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-rest-user
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.1.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('WP_REST_USER_VERSION', '1.0.0');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-wp-rest-user.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.1.0
 */
function run_wp_rest_user() {

	$plugin = new Wp_Rest_User();
	$plugin->run();

}
run_wp_rest_user();
