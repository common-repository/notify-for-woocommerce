<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://notify.biz
 * @since             1.0.0
 * @package           Notify_For_Woocommerce
 *
 * @wordpress-plugin
 * Plugin Name:       Notify for WooCommerce
 * Description:       Notify for WooCommerce adds the ability to send SMS notifications for every status of the order.
 * Version:           1.1
 * Author:            notify
 * Author URI:        https://notify.biz
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       notify-for-woocommerce
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
define( 'NOTIFY_FOR_WOOCOMMERCE_VERSION', '1.1' );

/**
 * Name of the plugin.
 */
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_NAME', 'Notify for WooCommerce' );

/**
 * Menu name of the plugin.
 */
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_MENU_NAME', 'Notify' );

/**
 * Tabs found on the plugin page.
 */
define( 'NOTIFY_FOR_WOOCOMMERCE_TABS', ['settings'] );

/**
 * Full path to plugin page.
 */
define( 'NOTIFY_FOR_WOOCOMMERCE_PAGE_PATH_FULL', plugin_dir_path(__FILE__) . 'admin/partials/notify-for-woocommerce-admin-display.php' );

/**
 * Full path to plugin page.
 */
define( 'NOTIFY_FOR_WOOCOMMERCE_PAGE_PATH_RELATIVE', basename(__DIR__)  . '/admin/partials/notify-for-woocommerce-admin-display.php' );

/**
 * Slug of the plugin.
 */
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG', 'notify-for-woocommerce' );

/**
 * Suffix of the plugin.
 */
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SUFFIX', 'nfw' );

/**
 * Options groups for the plugin
 */
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTINGS', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_options_settings' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATES', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_options_templates' );

/**
 * Options for the Settings group
 */
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_API_KEY', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_setting_api_key' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_SLOT_SIM', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_setting_slot_sim' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_SETTING_DEVICE_ID', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_setting_device_id' );

/**
 * Options for the Templates group
 */
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PENDING_TOGGLE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_pending_toggle' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PROCESSING_TOGGLE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_processing_toggle' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_ON_HOLD_TOGGLE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_on_hold_toggle' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_COMPLETED_TOGGLE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_completed_toggle' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_CANCELLED_TOGGLE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_cancel_toggle' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_REFUNDED_TOGGLE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_refunded_toggle' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_FAILED_TOGGLE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_failed_toggle' );

define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PENDING_MESSAGE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_pending_message' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_PROCESSING_MESSAGE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_processing_message' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_ON_HOLD_MESSAGE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_on_hold_message' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_COMPLETED_MESSAGE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_completed_message' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_CANCELLED_MESSAGE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_cancelled_message' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_REFUNDED_MESSAGE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_refunded_message' );
define( 'NOTIFY_FOR_WOOCOMMERCE_PLUGIN_OPTION_TEMPLATE_FAILED_MESSAGE', NOTIFY_FOR_WOOCOMMERCE_PLUGIN_SLUG . '_template_failed_message' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-notify-for-woocommerce-activator.php
 */
function activate_notify_for_woocommerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-notify-for-woocommerce-activator.php';
	Notify_For_Woocommerce_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-notify-for-woocommerce-deactivator.php
 */
function deactivate_notify_for_woocommerce() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-notify-for-woocommerce-deactivator.php';
	Notify_For_Woocommerce_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_notify_for_woocommerce' );
register_deactivation_hook( __FILE__, 'deactivate_notify_for_woocommerce' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-notify-for-woocommerce.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_notify_for_woocommerce() {

	$plugin = new Notify_For_Woocommerce();
	$plugin->run();

}
run_notify_for_woocommerce();
