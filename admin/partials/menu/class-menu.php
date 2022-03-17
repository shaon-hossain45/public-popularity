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

if ( ! class_exists( 'MenuSetup' ) ) {
	class MenuSetup {

		public $functional;

		public function __construct( $functional ) {
			$this->functional = $functional;
			add_action( 'admin_menu', array( $this, 'wpdocs_register_my_custom_menu_page' ) );
		}

		/**
		 * Register a custom menu page.
		 *
		 * @return void
		 */
		public function wpdocs_register_my_custom_menu_page() {
			add_menu_page(
				__( 'Public Popularity Title', 'textdomain' ),
				'Public Popularity',
				'manage_options',
				'public_popularity',
				array( $this->functional, 'public_popularity_menu_page' ),
				'dashicons-tagcloud',
				6
			);
		}

		/**
		 * Register a sub menu page.
		 *
		 * @return void
		 */
		public function wpdocs_register_my_custom_submenu_page() {

			add_submenu_page(
				'public_popularity',
				'Dashboard',
				'Dashboard',
				'manage_options',
				'public_popularity',
				array( $this->functional, 'public_popularity_menu_page' ),
			);

			add_submenu_page(
				'public_popularity',
				'Add New',
				'Add New',
				'manage_options',
				'add_new',
				array( $this->functional, 'public_popularity_sub_menu_page_addnew' ),
			);
		}


	}
}
