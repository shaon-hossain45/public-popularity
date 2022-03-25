<?php

/**
 * Provide a admin area view for the plugin
 *
 * @link       https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    public_plugin
 * @subpackage public_plugin/admin/partials
 */

if ( ! class_exists( 'CptBaseSetup' ) ) {
	class CptBaseSetup {

		/**
		 * Initialize the class and set its properties.
		 *
		 * @since    1.0.0
		 * @param      string $plugin_name       The name of this plugin.
		 * @param      string $version    The version of this plugin.
		 */
		public function __construct() {
			add_action( 'init', array( $this, 'custom_post_type' ), 0 );
		}

		// Register Custom Post Type
		function custom_post_type() {

			$labels = array(
				'name'                  => _x( 'Public Sliders', 'Post Type General Name', 'public-popularity' ),
				'singular_name'         => _x( 'Public Slider', 'Post Type Singular Name', 'public-popularity' ),
				'menu_name'             => __( 'Public Sliders', 'public-popularity' ),
				'name_admin_bar'        => __( 'Public Slider', 'public-popularity' ),
				'archives'              => __( 'Item Archives', 'public-popularity' ),
				'attributes'            => __( 'Item Attributes', 'public-popularity' ),
				'parent_item_colon'     => __( 'Parent Item:', 'public-popularity' ),
				'all_items'             => __( 'All Items', 'public-popularity' ),
				'add_new_item'          => __( 'Add New Item', 'public-popularity' ),
				'add_new'               => __( 'Add New', 'public-popularity' ),
				'new_item'              => __( 'New Item', 'public-popularity' ),
				'edit_item'             => __( 'Edit Item', 'public-popularity' ),
				'update_item'           => __( 'Update Item', 'public-popularity' ),
				'view_item'             => __( 'View Item', 'public-popularity' ),
				'view_items'            => __( 'View Items', 'public-popularity' ),
				'search_items'          => __( 'Search Item', 'public-popularity' ),
				'not_found'             => __( 'Not found', 'public-popularity' ),
				'not_found_in_trash'    => __( 'Not found in Trash', 'public-popularity' ),
				'featured_image'        => __( 'Featured Image', 'public-popularity' ),
				'set_featured_image'    => __( 'Set featured image', 'public-popularity' ),
				'remove_featured_image' => __( 'Remove featured image', 'public-popularity' ),
				'use_featured_image'    => __( 'Use as featured image', 'public-popularity' ),
				'insert_into_item'      => __( 'Insert into item', 'public-popularity' ),
				'uploaded_to_this_item' => __( 'Uploaded to this item', 'public-popularity' ),
				'items_list'            => __( 'Items list', 'public-popularity' ),
				'items_list_navigation' => __( 'Items list navigation', 'public-popularity' ),
				'filter_items_list'     => __( 'Filter items list', 'public-popularity' ),
			);
			$args   = array(
				'label'               => __( 'Public Slider', 'public-popularity' ),
				'description'         => __( 'Post Type Description', 'public-popularity' ),
				'labels'              => $labels,
				'supports'            => array( 'title', 'editor', 'thumbnail' ),
				'taxonomies'          => array( 'category', 'post_tag' ),
				'hierarchical'        => false,
				'public'              => true,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'menu_position'       => 5,
				'menu_icon'           => 'dashicons-welcome-widgets-menus',
				'show_in_admin_bar'   => true,
				'show_in_nav_menus'   => true,
				'can_export'          => true,
				'has_archive'         => true,
				'exclude_from_search' => false,
				'publicly_queryable'  => true,
				'capability_type'     => 'page',
			);
			register_post_type( 'public_slider', $args );

		}
	}
}
