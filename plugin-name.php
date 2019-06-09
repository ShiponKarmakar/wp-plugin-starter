<?php
/**
 * @package wp-plugin-starter
 */
/**
 * Plugin Name: WP Plugin Starter
 * Plugin URI:  https://github.com/Shiponkormoker/wp-plugin-starter
 * Description: Basic WordPress Plugin Development Starter
 * Version:     1.0.0
 * Author:      Shovon and Shipon
 * Author URI:  https://github.com/Shiponkormoker/wp-plugin-starter
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wporg, wp-plugin-starter
 * Domain Path: /languages
 */

// This can be achieved in a few ways. You can either check to see if the ABSPATH constant is defined, or check if a function such as add_action exists. Either method can be used to ensure PHP execution is only allowed when it is included as part of the core system.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}


define( 'PLUGIN_VERSION', '1.0.0' );
define( 'PLUGIN__MINIMUM_WP_VERSION', '4.0' );
define( 'PLUGIN__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_DELETE_LIMIT', 100000 );
/** Display verbose errors */
define( 'IMPORT_DEBUG', false );



register_activation_hook( __FILE__, array( 'Akismet', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'Akismet', 'plugin_deactivation' ) );