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
class Public_Popularity_Uninstall {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function uninstall() {
    }

    protected static function drop_table(){
        global $wpdb;
        $wpdb->query('DROP TABLE IF EXISTS public_popularity');

        delete_option('wp_public_popularity');
    }
}