<?php
/**
 * Plugin Name: KCMS PWA
 * Plugin URI: https://github.com/KubeeCMS/KCMS-PWA
 * Description: Super Progressive Web Apps extension
 * Author: Kubee
 * Author URI: https://github.com/KubeeCMS/KCMS-PWA
 * Contributors: KubeeCMS
 * Version: 2.1.8
 * Text Domain: super-progressive-web-apps
 * Domain Path: /languages
 * License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * ~ Directory Structure ~
 *
 * Based on the starter plugin template
 * @link https://github.com/KubeeCMS/KCMS-PWA/
 *
 * /3rd-party/					- Functions for compatibility with 3rd party plugins and hosts.
 * /addons/ 					- Bundled add-ons
 * /admin/					- Plugin backend.
 * /functions/					- Functions and utilites.
 * /includes/					- External third party classes and libraries.
 * /languages/					- Translation files go here. 
 * /public/ 					- Front end files go here.
 * index.php					- Dummy file.
 * license.txt					- GPL v2
 * loader.php					- Loads everything.
 * superpwa.php					- Main plugin file.
 * README.MD					- Readme for GitHub.
 * readme.txt					- Readme for WordPress plugin repository.
 * uninstall.php				- Fired when the plugin is uninstalled. 
 */

// Exit if accessed directly
if ( ! defined('ABSPATH') ) exit;

/**
 * SuperPWA current version
 *
 * @since 1.0
 */
if ( ! defined( 'SUPERPWA_VERSION' ) ) {
	define( 'SUPERPWA_VERSION'	, '2.1.8' ); 
}

/**
 * Absolute path to the plugin directory. 
 * eg - /var/www/html/wp-content/plugins/super-progressive-web-apps/
 *
 * @since 1.0
 */
if ( ! defined( 'SUPERPWA_PATH_ABS' ) ) {
	define( 'SUPERPWA_PATH_ABS'	, plugin_dir_path( __FILE__ ) ); 
}

/**
 * Link to the plugin folder. 
 * eg - https://example.com/wp-content/plugins/super-progressive-web-apps/
 *
 * @since 1.0
 */
if ( ! defined( 'SUPERPWA_PATH_SRC' ) ) {
	define( 'SUPERPWA_PATH_SRC'	, plugin_dir_url( __FILE__ ) ); 
}

/**
 * Full path to the plugin file. 
 * eg - /var/www/html/wp-content/plugins/Super-Progressive-Web-Apps/superpwa.php
 *
 * @since 2.0
 */
if ( ! defined( 'SUPERPWA_PLUGIN_FILE' ) ) {
	define( 'SUPERPWA_PLUGIN_FILE', __FILE__ ); 
}

// Load everything
require_once( SUPERPWA_PATH_ABS . 'loader.php' );
