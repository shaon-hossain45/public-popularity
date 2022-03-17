<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    Public_Popularity
 * @subpackage Public_Popularity/admin/partials
 */
class Public_Popularity_Admin_Display {
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of this plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct() {

		$this->admin_display_load_dependencies();

		// Menu base setup
		$MenuBaseObj = new MenuBaseSetup();
		// Menu setup
		$MenuPageObj = new MenuSetup( $MenuBaseObj );
		$this->dispatch_actions( $MenuPageObj );

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Public_Popularity_Loader. Orchestrates the hooks of the plugin.
	 * - Public_Popularity_i18n. Defines internationalization functionality.
	 * - Public_Popularity_Admin. Defines all hooks for the admin area.
	 * - Public_Popularity_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function admin_display_load_dependencies() {
		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/menu/class-menu-base.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'partials/menu/class-menu.php';
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Public_Popularity_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Public_Popularity_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/public-popularity-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Public_Popularity_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Public_Popularity_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/public-popularity-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Action dispatch
	 *
	 * @param  [type] $addressbook [description]
	 * @return [type]              [description]
	 */
	private function dispatch_actions( $data ) {
		// Register a custom menu page.
		add_action( 'admin_menu', array( $data, 'wpdocs_register_my_custom_menu_page' ) );
		// Register a sub menu page.
		add_action( 'admin_menu', array( $data, 'wpdocs_register_my_custom_submenu_page' ) );

	}

}
