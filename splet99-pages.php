<?php
/**
 * Plugin Name:       Splet99 Pages
 * Plugin URI:        https://github.com/ziga32/splet99-pages-plugin
 * Description:       Orodja Splet99 za spletne strani, ki jih vzdržujemo.
 * Version:           0.8.1
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            Splet99 d.o.o.
 * Author URI:        https://splet99.net
 * Text Domain:       splet99-pages
 * Update URI:        https://github.com/ziga32/splet99-pages-plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SPLET99_PAGES_VERSION', '0.8.1' );
define( 'SPLET99_PAGES_FILE', __FILE__ );
define( 'SPLET99_PAGES_DIR', plugin_dir_path( __FILE__ ) );
define( 'SPLET99_PAGES_URL', plugin_dir_url( __FILE__ ) );

require_once SPLET99_PAGES_DIR . 'includes/class-plugin.php';
require_once SPLET99_PAGES_DIR . 'includes/class-settings.php';
require_once SPLET99_PAGES_DIR . 'includes/class-branding.php';
require_once SPLET99_PAGES_DIR . 'includes/class-updater.php';

\Splet99\Pages\Plugin::init();
\Splet99\Pages\Branding::init();
\Splet99\Pages\Updater::init( SPLET99_PAGES_FILE, SPLET99_PAGES_VERSION );
