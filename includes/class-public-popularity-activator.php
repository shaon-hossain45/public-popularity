<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    Public_Popularity
 * @subpackage Public_Popularity/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Public_Popularity
 * @subpackage Public_Popularity/includes
 * @author     shaon <shaonhossain615@gmail.com>
 */
class Public_Popularity_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		self::add_version();
		self::create_table();
	}

	/**
	 * Add version
	 *
	 * @return void
	 */
	protected static function add_version() {
		$installed = get_option( 'wp_public_popularity' );

		if ( ! $installed ) {
			$installed = update_option( 'wp_public_popularity', time() );
		}
		$installed = update_option( 'wp_public_popularity', PUBLIC_POPULARITY_VERSION );
	}

	/**
	 * Create table plugin activator
	 *
	 * @return void
	 */
	protected static function create_table() {
		global $wpdb;

		$charset_collate = $wpdb->get_charset_collate();

		$schema = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}public_popularity` (
          `pp_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
		  `pp_name` varchar(100) NOT NULL,
          `pp_email` varchar(150) NOT NULL,
          `pp_verified` int(1) NOT NULL default 0,
          `pp_register` int(1) NOT NULL default 0,
		  `pp_created` varchar(100) NOT NULL
        ) $charset_collate";

		if ( ! function_exists( 'dbDelta' ) ) {
			require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		}

		dbDelta( $schema );
	}

}
