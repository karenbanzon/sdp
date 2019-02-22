<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       karenbanzon.com
 * @since      1.0.0
 *
 * @package    Sdp_Post_Types
 * @subpackage Sdp_Post_Types/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Sdp_Post_Types
 * @subpackage Sdp_Post_Types/admin
 * @author     Karen Monica Banzon <kabanzon@gmail.com>
 */
class Sdp_Post_Types_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

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
		 * defined in Sdp_Post_Types_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sdp_Post_Types_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/sdp-post-types-admin.css', array(), $this->version, 'all' );

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
		 * defined in Sdp_Post_Types_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sdp_Post_Types_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/sdp-post-types-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register the Custom Post types
	 *
	 * @since    1.0.0
	 */
	
	// Register Videos Post Type
	function create_videos_post_type() {

		$labels = array(
			'name'                  => _x( 'Videos', 'Post Type General Name', 'sdp' ),
			'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'sdp' ),
			'menu_name'             => __( 'Videos', 'sdp' ),
			'name_admin_bar'        => __( 'Videos', 'sdp' ),
			'archives'              => __( 'Item Archives', 'sdp' ),
			'attributes'            => __( 'Item Attributes', 'sdp' ),
			'parent_item_colon'     => __( 'Parent Item:', 'sdp' ),
			'all_items'             => __( 'All Items', 'sdp' ),
			'add_new_item'          => __( 'Add New Item', 'sdp' ),
			'add_new'               => __( 'Add New', 'sdp' ),
			'new_item'              => __( 'New Item', 'sdp' ),
			'edit_item'             => __( 'Edit Item', 'sdp' ),
			'update_item'           => __( 'Update Item', 'sdp' ),
			'view_item'             => __( 'View Item', 'sdp' ),
			'view_items'            => __( 'View Items', 'sdp' ),
			'search_items'          => __( 'Search Item', 'sdp' ),
			'not_found'             => __( 'Not found', 'sdp' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'sdp' ),
			'featured_image'        => __( 'Featured Image', 'sdp' ),
			'set_featured_image'    => __( 'Set featured image', 'sdp' ),
			'remove_featured_image' => __( 'Remove featured image', 'sdp' ),
			'use_featured_image'    => __( 'Use as featured image', 'sdp' ),
			'insert_into_item'      => __( 'Insert into item', 'sdp' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'sdp' ),
			'items_list'            => __( 'Items list', 'sdp' ),
			'items_list_navigation' => __( 'Items list navigation', 'sdp' ),
			'filter_items_list'     => __( 'Filter items list', 'sdp' ),
		);
		$args = array(
			'label'                 => __( 'Video', 'sdp' ),
			'description'           => __( 'Video series', 'sdp' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-format-video',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
		);
		register_post_type( 'videos', $args );

	}
	
	 // Register Events Post Type
	public function create_events_post_type() {

		$labels = array(
			'name'                  => _x( 'Events', 'Post Type General Name', 'sdp' ),
			'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'sdp' ),
			'menu_name'             => __( 'Events', 'sdp' ),
			'name_admin_bar'        => __( 'Events', 'sdp' ),
			'archives'              => __( 'Item Archives', 'sdp' ),
			'attributes'            => __( 'Item Attributes', 'sdp' ),
			'parent_item_colon'     => __( 'Parent Item:', 'sdp' ),
			'all_items'             => __( 'All Items', 'sdp' ),
			'add_new_item'          => __( 'Add New Item', 'sdp' ),
			'add_new'               => __( 'Add New', 'sdp' ),
			'new_item'              => __( 'New Item', 'sdp' ),
			'edit_item'             => __( 'Edit Item', 'sdp' ),
			'update_item'           => __( 'Update Item', 'sdp' ),
			'view_item'             => __( 'View Item', 'sdp' ),
			'view_items'            => __( 'View Items', 'sdp' ),
			'search_items'          => __( 'Search Item', 'sdp' ),
			'not_found'             => __( 'Not found', 'sdp' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'sdp' ),
			'featured_image'        => __( 'Featured Image', 'sdp' ),
			'set_featured_image'    => __( 'Set featured image', 'sdp' ),
			'remove_featured_image' => __( 'Remove featured image', 'sdp' ),
			'use_featured_image'    => __( 'Use as featured image', 'sdp' ),
			'insert_into_item'      => __( 'Insert into item', 'sdp' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'sdp' ),
			'items_list'            => __( 'Items list', 'sdp' ),
			'items_list_navigation' => __( 'Items list navigation', 'sdp' ),
			'filter_items_list'     => __( 'Filter items list', 'sdp' ),
		);
		$args = array(
			'label'                 => __( 'Event', 'sdp' ),
			'description'           => __( 'Events in the organization', 'sdp' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-calendar-alt',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
		);
		register_post_type( 'events', $args );

	}

	// Register Projects Post Type
	public function create_projects_post_type() {

		$labels = array(
			'name'                  => _x( 'Projects', 'Post Type General Name', 'sdp' ),
			'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'sdp' ),
			'menu_name'             => __( 'Projects', 'sdp' ),
			'name_admin_bar'        => __( 'Projects', 'sdp' ),
			'archives'              => __( 'Item Archives', 'sdp' ),
			'attributes'            => __( 'Item Attributes', 'sdp' ),
			'parent_item_colon'     => __( 'Parent Item:', 'sdp' ),
			'all_items'             => __( 'All Items', 'sdp' ),
			'add_new_item'          => __( 'Add New Item', 'sdp' ),
			'add_new'               => __( 'Add New', 'sdp' ),
			'new_item'              => __( 'New Item', 'sdp' ),
			'edit_item'             => __( 'Edit Item', 'sdp' ),
			'update_item'           => __( 'Update Item', 'sdp' ),
			'view_item'             => __( 'View Item', 'sdp' ),
			'view_items'            => __( 'View Items', 'sdp' ),
			'search_items'          => __( 'Search Item', 'sdp' ),
			'not_found'             => __( 'Not found', 'sdp' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'sdp' ),
			'featured_image'        => __( 'Featured Image', 'sdp' ),
			'set_featured_image'    => __( 'Set featured image', 'sdp' ),
			'remove_featured_image' => __( 'Remove featured image', 'sdp' ),
			'use_featured_image'    => __( 'Use as featured image', 'sdp' ),
			'insert_into_item'      => __( 'Insert into item', 'sdp' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'sdp' ),
			'items_list'            => __( 'Items list', 'sdp' ),
			'items_list_navigation' => __( 'Items list navigation', 'sdp' ),
			'filter_items_list'     => __( 'Filter items list', 'sdp' ),
		);
		$args = array(
			'label'                 => __( 'Project', 'sdp' ),
			'description'           => __( 'Organization projects', 'sdp' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-awards',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => false,
			'exclude_from_search'   => true,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
			'show_in_rest'          => true,
		);
		register_post_type( 'projects', $args );

	}

	// Register taxonomies for custom post types
	public function add_taxonomies_to_custom_types() {
		register_taxonomy_for_object_type( 'category', 'videos' );
		register_taxonomy_for_object_type( 'category', 'events' );
		register_taxonomy_for_object_type( 'category', 'projects' );
		register_taxonomy_for_object_type( 'post_tag', 'videos' );
		register_taxonomy_for_object_type( 'post_tag', 'events' );
		register_taxonomy_for_object_type( 'post_tag', 'projects' );
	}
}
