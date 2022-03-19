<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    Public_Popularity
 * @subpackage Public_Popularity/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Public_Popularity
 * @subpackage Public_Popularity/public
 * @author     shaon <shaonhossain615@gmail.com>
 */
class Public_Popularity_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->public_load_dependencies();
		if ( class_exists( 'Public_Popularity_Public_Display' ) ) {
			new Public_Popularity_Public_Display();
		}

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
	private function public_load_dependencies() {
		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/public-popularity-public-display.php';
	}
	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( 'carouselcss', plugin_dir_url( __FILE__ ) . 'css/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css', array(), '2.3.4', 'all' );
		wp_enqueue_style( 'carouseldefault', plugin_dir_url( __FILE__ ) . 'css/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css', array(), '2.3.4', 'all' );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/public-popularity-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( 'carouseljs', plugin_dir_url( __FILE__ ) . 'js/OwlCarousel2-2.3.4/dist/owl.carousel.min.js', array( 'jquery' ), '2.3.4', false );
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/public-popularity-public.js', array( 'jquery' ), $this->version, false );

	}

}
