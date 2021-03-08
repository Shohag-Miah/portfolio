<?php 

	require_once('metabox/init.php');
	require_once('metabox/functions.php');

	add_theme_support('title-tag');
	
	add_theme_support('post-thumbnails');
	function portfolio_enqueue_script(){
		// Css file call here
		wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1.1.1');
		wp_enqueue_style('animated',get_template_directory_uri().'/assets/css/animated-text.css',array(),'1.1.1');
		wp_enqueue_style('fontawesome',get_template_directory_uri().'/fontawesome/css/all.min.css',array(),'1.1.1');
		wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css',array(),'1.1.1');
		wp_enqueue_style('responsive',get_template_directory_uri().'/assets/css/responsive.css',array(),'1.1.1');
		wp_enqueue_style('stylesheet',get_stylesheet_uri());
		
		
		// Js file call here
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/jquery.min.js',array(),'1.1.1');
		wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),'1.1.1');
		wp_enqueue_script('mixitup',get_template_directory_uri().'/assets/js/mixitup.min.js',array(),'1.1.1');
		wp_enqueue_script('typed',get_template_directory_uri().'/assets/js/typed.min.js',array(),'1.1.1');
		wp_enqueue_script('waypoints',get_template_directory_uri().'/assets/js/jquery.waypoints.min.js',array(),'1.1.1');
		wp_enqueue_script('progress-bar',get_template_directory_uri().'/assets/js/progress-bar-min.js',array(),'1.1.1');
		wp_enqueue_script('main',get_template_directory_uri().'/assets/js/main.js',array(),'1.1.1');

	}
	add_action('wp_enqueue_scripts','portfolio_enqueue_script');

	// Register menu
	if(function_exists('register_nav_menu')){
		register_nav_menu('main_menu','Main Menu');
		register_nav_menu('mobile_menu','Mobile Menu');
	}


	// Customize Api
	function portfolio_customize_api($portfolioitem){
		$portfolioitem->add_section('General_Option',array(
			'title'     => 'Header Options',
			'priority' => 20
		));
		$portfolioitem->add_section('footer_section',array(
			'title'     => 'Footer Options',
			'priority' => 30
		));

		$portfolioitem->add_setting('copyright_text',array(
			'default'   => 'All right reserved',
			'transport' => 'refresh'
		));

		$portfolioitem->add_control('copyright_text',array(
			'section'   => 'footer_section',
			'label'     => 'Please add your copyright text here',
			'type'      => 'text'
		));

		$portfolioitem->add_setting('logo_text',array(
			'default'   => 'Shohag',
			'transport' => 'refresh'
		));

		$portfolioitem->add_control('logo_text',array(
			'section'   => 'General_Option',
			'label'     => 'Please add your logo text here',
			'type'      => 'text'
		));
		$portfolioitem->add_setting('header_image',array(
			'default'   => 'Shohag',
			'transport' => 'refresh'
		));

		$portfolioitem->add_control(
			new WP_Customize_Image_Control($portfolioitem,'header_image',array(
				'section'   => 'General_Option',
				'label'     => 'Please add your Banner Backgroud Image here',
				'setting'   => 'header_image'	))
		);
		$portfolioitem->add_setting('service_image',array(
			'default'   => 'Shohag',
			'transport' => 'refresh'
		));

		$portfolioitem->add_control(
			new WP_Customize_Image_Control($portfolioitem,'service_image',array(
				'section'   => 'General_Option',
				'label'     => 'Please add your Service Backgroud Image here',
				'setting'   => 'service_image'	
			))
		);
		$portfolioitem->add_setting('contact_image',array(
			'default'   => 'Shohag',
			'transport' => 'refresh'
		));

		$portfolioitem->add_control(
			new WP_Customize_Image_Control($portfolioitem,'contact_image',array(
				'section'   => 'General_Option',
				'label'     => 'Please add your Contact Backgroud Image here',
				'setting'   => 'contact_image'	
			))
		);
	}
	add_action('customize_register','portfolio_customize_api');

	function post_type(){

		register_post_type('about',array(
			'labels'  => array(
				'name'   => 'About'
			),
			'public'    => true,
			'supports'  => array('title','editor'),
			'menu_icon' => 'dashicons-admin-users'
		));
		register_post_type('slider',array(
			'labels'   => array(
				'name'  => 'Sliders'
			),
			'public'   => true,
			'supports' => array('title','editor','thumbnail'),
			'menu_icon' => 'dashicons-format-gallery'
		));

		register_post_type('service',array(
			'labels'  => array(
				'name'   => 'Services'
			),
			'public'    => true,
			'supports'  => array('title','editor'),
			'menu_icon' => 'dashicons-cart'
		));

		register_post_type('portfolio',array(
			'labels'  => array(
				'name'   => 'Portfolio',
				'all_items'           => __( 'All Portfolio', 'portfolio' ),
		        'view_item'           => __( 'View Portfolio', 'portfolio' ),
		        'add_new_item'        => __( 'Add New Portfolio', 'portfolio' ),
		        'add_new'             => __( 'Add Portfolio', 'portfolio' ),
		        'edit_item'           => __( 'Edit Portfolio', 'portfolio' ),
		        'update_item'         => __( 'Update Portfolio', 'portfolio' ),
		        'search_items'        => __( 'Search Portfolio', 'portfolio' ),
		        'not_found'           => __( 'Not Found', 'portfolio' ),
		        'not_found_in_trash'  => __( 'Not found in Trash', 'portfolio' ),
					),
			'public'    => true,
			'supports'  => array('title','editor','thumbnail'),
			'menu_icon' => 'dashicons-forms'
		));

		register_post_type('process',array(
			'labels'  => array(
				'name'   => 'Process'
			),
			'public'    => true,
			'supports'  => array('title','editor'),
			'menu_icon' => 'dashicons-admin-site-alt3'
		));

	}
	add_action('after_setup_theme','post_type');







//===== Resources Custom Type ======//
function custom_resource_type() {
    // Labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Resources', 'Post Type General Name', 'gucherry-blog' ),
        'singular_name'       => _x( 'Resource', 'Post Type Singular Name', 'gucherry-blog' ),
        'menu_name'           => __( 'Resources', 'gucherry-blog' ),
        'parent_item_colon'   => __( 'Parent Resource', 'gucherry-blog' ),
        'all_items'           => __( 'All Resources', 'gucherry-blog' ),
        'view_item'           => __( 'View Resource', 'gucherry-blog' ),
        'add_new_item'        => __( 'Add New Resource', 'gucherry-blog' ),
        'add_new'             => __( 'Add Resource', 'gucherry-blog' ),
        'edit_item'           => __( 'Edit Resource', 'gucherry-blog' ),
        'update_item'         => __( 'Update Resource', 'gucherry-blog' ),
        'search_items'        => __( 'Search Resource', 'gucherry-blog' ),
        'not_found'           => __( 'Not Found', 'gucherry-blog' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'gucherry-blog' ),
    );
     
    // Customize option for Custom Post Type  
    $args = array(
        'label'               => __( 'resources', 'gucherry-blog' ),
        'description'         => __( 'Resource for software products and online', 'gucherry-blog' ),
        'labels'              => $labels,
        // Custom Post Type supports features in the Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this Custom Post Type with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( '' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
    'menu_icon'           => 'dashicons-admin-site-alt2',
        'capability_type'     => 'page',
    );
    // Registering your Custom Post Type
    register_post_type( 'resources', $args );
}
 
add_action( 'init', 'custom_resource_type', 0 );


 
function resource_categories_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI   
 
// Now register the taxonomy. Replace the parameter resources withing the array by the name of your custom post type.
 
  register_taxonomy('portfolio_cat',array('portfolio'), array(
    'hierarchical' => true,
    'labels' => 'Portfolio Category',
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'portfolio' ),
  ));
 
}
add_action( 'init', 'resource_categories_taxonomy', 0 );

function register_portfolio_widget(){
	register_sidebar(array(
		'name'   => __('Widget #1','portfolio'),
		'id'     => 'widget1',
		'before_widget' => '<div class="contact-form">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="form-title">',
		'after_title' => '</h5>'
	));
}
add_action('after_setup_theme','register_portfolio_widget');