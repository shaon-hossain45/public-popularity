<?php

/**
 * Provide a admin area view for the plugin
 *
 * @link       https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    Itechpublic_Newsletter
 * @subpackage Itechpublic_Newsletter/admin/partials
 */

if ( ! class_exists( 'MenuBaseSetup' ) ) {
	class MenuBaseSetup {
		/**
		 * Menu page function callback
		 *
		 * @return void
		 */
		public function public_popularity_menu_page() {
			include_once plugin_dir_path( dirname( __FILE__ ) ) . 'views/page.php';
		}

		/**
		 * Sub menu page function callback
		 *
		 * @return void
		 */
		public function public_popularity_sub_menu_page_addnew() {
			echo 'shaon2222';
		}

	}
}
