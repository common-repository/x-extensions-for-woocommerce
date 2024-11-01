<?php
/**
 * Plugin Name: X-Extensions for WooCommerce
 * Description: Enhance your WooCommerce store with X-Extensions: advanced product listings, fast AJAX search, and quick view for a better user experience and increased sales.
 * Author: Rejuan Ahamed
 * Version: 1.0.4
 * Requires at least: 5.9
 * Requires PHP: 7.2
 * Tested up to: 6.6.1
 * Text Domain: xewc
 * Domain Path: /languages/
 *
 * @package UserRegistration
 */

defined( 'ABSPATH' ) || exit;

/**
* @Type
* @Version
* @Directory URL
* @Directory Path
* @Plugin Base Name
*/
define('XEWC_FILE', __FILE__);
define('XEWC_VERSION', '1.0.4');
define('XEWC_DIR_URL', plugin_dir_url( XEWC_FILE ));
define('XEWC_DIR_PATH', plugin_dir_path( XEWC_FILE ));
define('XEWC_BASENAME', plugin_basename( XEWC_FILE ));

/**
* Load Text Domain Language
*/
add_action('init', 'xewc_language_load');
function xewc_language_load(){
    load_plugin_textdomain('xewc', false, basename(dirname( XEWC_FILE )).'/languages/');
}

if (!function_exists('xewc_function')) {
    function xewc_function() {
        require_once XEWC_DIR_PATH . 'includes/Functions.php';
        return new \XEWC\Functions();
    }
}

if (!class_exists( 'XEWC_Extensions' )) {
    require_once XEWC_DIR_PATH . 'includes/XEWC.php';
    new \XEWC\XEWC_Extensions();
}
