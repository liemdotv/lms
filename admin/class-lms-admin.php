<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://edunetjsc.vn
 * @since      1.0.0
 *
 * @package    Lms
 * @subpackage Lms/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Lms
 * @subpackage Lms/admin
 * @author     Edunet JSC <info@edunetjsc.vn>
 */
class Lms_Admin {

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
		 * defined in Lms_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Lms_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/lms-admin.css', array(), $this->version, 'all' );

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
		 * defined in Lms_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Lms_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/lms-admin.js', array( 'jquery' ), $this->version, false );

	}
	public function lms_register_post_type() {
		$args = array(
			'description'         => __( 'Loan', 'lms_post' ),
			'labels'              => array('name' => __('Loans'),'singular_name' => __('Loan'),'add_name' => 'Add New','add_new_item' =>'Add New Property Loan',
				'edit' 			=> 	'Edit',
				'edit_item'		=>	'Edit Property Loan',
				'new_item'		=>	'New Property Loan',
				'view'			=>	'View Loan',
				'view_item'		=>	'View Loan',
				'search_term'	=>	'Search Loans',
				'not_found'		=>	'No Loan found',
				'not_found_in_trash'	=>	'No Loan in Trash'
			),
			'supports'            => array( 'title','thumbnail'),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'rewrite'             => array(
				'slug'	=>	'loans',
				'with_front'	=>	true,
			),
			'capability_type'     => array('lms_loan','lms_loans'),
			'map_meta_cap'        => true,
			'publicly_queryable'	=> true,
			'exclude_from_search'	=>	true,
			'show_in_nav_menus'		=> true,
			'can_export'				=> true,
			'has_archive'			=> false,
			'menu_position'			=>	2,
		);
		register_post_type( 'lms_loan', $args );
		$bank_arg = array(
			'hierarchical'			=>	true,
			'labels'				=>	 array('name' => __('Banks'),'singular_name' => __('Bank'),'add_name' => 'Add New','add_new_item' =>'Add New Bank',
				'edit' 			=> 	'Edit',
				'edit_item'		=>	'Edit Bank',
				'new_item'		=>	'New Bank',
				'view'			=>	'View Bank',
				'view_item'		=>	'View Bank',
				'search_term'	=>	'Search Bank',
				'not_found'		=>	'No Bank found',
			),
			'update_count_callback' => "func_front_end",
			'public' 				=> true,
			'show_ui'				=>	true,
			'show_admin_column'		=>	true,
			'update_count_callback'	=>	'_update_post_term_count',
			'query_var'				=>	true,
			'rewrite'				=>	array('slug' => 'bank'),
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'capabilities' => array (
				'manage_terms' => 'edit_lms_loans', //by default only admin
				'edit_terms' => 'edit_lms_loans',
				'delete_terms' => 'edit_lms_loans',
				'assign_terms' => 'edit_lms_loans'
			)
		);
		register_taxonomy('Bank','lms_loan',$bank_arg);

	}

}
