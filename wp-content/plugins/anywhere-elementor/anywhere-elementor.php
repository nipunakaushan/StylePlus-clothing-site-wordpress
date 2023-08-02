<?php
/**
 * Plugin Name: Anywhere Elementor
 * Description: Allows you to insert elementor pages and library templates anywhere using shortcodes.
 * Plugin URI: https://www.elementoraddons.com/
 * Author: WPVibes
 * Version: 1.2.8
 * Author URI: https://wpvibes.com/
 * Elementor tested up to: 3.12
 * Elementor Pro tested up to: 3.12
 * Text Domain: wts_ae
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

define( 'AE_VERSION', '1.2.8' );

define( 'WTS_AE__FILE__', __FILE__ );
define( 'WTS_AE_PLUGIN_BASE', plugin_basename( WTS_AE__FILE__ ) );
define( 'WTS_AE_URL', plugins_url( '/', WTS_AE__FILE__ ) );
define( 'WTS_AE_PATH', plugin_dir_path( WTS_AE__FILE__ ) );
define( 'WTS_AE_ASSETS_URL', WTS_AE_URL . 'includes/assets/' );


require_once( WTS_AE_PATH . 'includes/bootstrap.php' );
