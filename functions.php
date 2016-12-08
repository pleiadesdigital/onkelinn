<?php

	if (!function_exists('pleiades17_setup')) {
		function pleiades17_setup() {
			
			// NAVIGATION
			register_nav_menus(array(
				'primary' => esc_html__('Primary', 'pleiades17'),
				'social'	=> esc_html__('Social', 'pleiades17'),
			));

			// UTILITIES
			add_theme_support('html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			));

			// POST THUMBNAILS
			add_theme_support('post-thumbnails');
			add_image_size('news-blog-page', 600, 300, true);

			// MISC THEME SUPPORTS
			load_theme_textdomain('pleiades17', get_template_directory() . '/languages');
			add_theme_support('automatic-feed-links');
			add_theme_support('title-tag');
			
		} //pleiades17_setup()
	} //!function_exists('pleiades17_setup')
	add_action( 'after_setup_theme', 'pleiades17_setup' );


	// MIN CONTENT WITH
	function pleiades17_content_width() {
		$GLOBALS['content_width'] = apply_filters('pleiades17_content_width', 640);
	}
	add_action('after_setup_theme', 'pleiades17_content_width', 0);

	// REGISTER WIDGETS (SIDEBAR)
	function pleiades17_widgets_init() {
		register_sidebar(array(
			'name'          => esc_html__('Sidebar', 'pleiades17'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'pleiades17' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		));
	}
	add_action( 'widgets_init', 'pleiades17_widgets_init' );

	// STYLES & SCRIPTS
	function pleiades17_scripts() {

		/* CSS */

		// Main CSS style.css
		wp_enqueue_style('pleiades17-style', get_stylesheet_uri());

		// Fontawesome
		wp_enqueue_script('pleiades17-fontawesome', 'https://use.fontawesome.com/b1403a6995.js', array(), '20161204', true);

		// Google Fonts
		wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400|Source+Sans+Pro:300,400,600');

		// Flexslider CSS
		wp_enqueue_style('flexslider_css', get_template_directory_uri() . '/css/flexslider.css');

		/* JAVASCRIPT */

		// Navigation
		wp_enqueue_script('pleiades17-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

		// Accessability
		wp_enqueue_script('pleiades17-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

		// Flexslider
		wp_enqueue_script('flexslider_js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '', true);

		// Google Maps
		// wp_enqueue_script('pleiades16-googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDjEcnBmAHgm_LfegO9o84NLPAfBLwVjSY', array(), '20161130', true);

		// Custom JavaScript
		wp_enqueue_script('pleiades17-app', get_template_directory_uri() . '/js/app.js', array('jquery'), '20161204', true);

		// Comments
		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		} //comments function

	} //pleiades17_scripts()
	add_action('wp_enqueue_scripts', 'pleiades17_scripts');

	// ADDING EXCERPTS TO PAGES
	function add_excerpts_to_pages() {
		add_post_type_support('page', 'excerpt');
	}
	add_action('init', 'add_excerpts_to_pages');


	/*MISC REQUIRED FILES*/
	// Template TAGS
	require get_template_directory() . '/inc/template-tags.php';

	// Custom Functions
	require get_template_directory() . '/inc/extras.php';

	// Customizer
	require get_template_directory() . '/inc/customizer.php';

	// JetPack compatibility
	require get_template_directory() . '/inc/jetpack.php';

/*====================================================
		pleiades17 Custom Post Types
====================================================*/

	function pleiades17_custom_post_types() {
		// Servicios Post Type
		$labels = array(
			'name'                => 'Servicios',
			'singular_name'       => 'Servicio',
			'menu_name'           => 'Servicios',
			'name_admin_bar'			=> 'Servicio',
			'add_new'             => 'Add New',
			'add_new_item'				=> 'Add New Servicio',
			'new_item'            => 'New Servicio',
			'edit_item'           => 'Edit Servicio',	
			'view_item'           => 'View Servicio',
			'all_items'						=> 'All Servicios',
			'search_items'        => 'Search Servicios',
			'parent_item_colon'   => 'Parent Servicios:',
			'not_found'           => 'No Servicio Found.',
			'not_found_in_trash'  => 'No Servicios Found In Trash.',
		);
		$args = array(
			'labels'              => $labels,
			'public'							=> true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,	
			'menu_icon'           => 'dashicons-id-alt',
			'query_var'           => true,
			'rewrite'             => array('slug' => 'servicios'),
			'capability_type'     => 'post', //page
			'has_archive'         => false, //false
			'hierarchical'        => true, //true
			'supports'            => array('title', 'editor', 'thumbnail','excerpt')
		);
		register_post_type('servicios', $args);

	} //pleiades17_custom_post_types()
	add_action('init', 'pleiades17_custom_post_types');






















