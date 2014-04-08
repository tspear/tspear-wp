<?php 
/**
 * tspear functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 */



	add_theme_support( 'custom-background' );


	/**
	 * Custom post type for Portfolio
	 */
	add_action( 'init', 'create_post_type' );
	function create_post_type() {
		register_post_type( 'ts_portfolio',
			array(
				'labels' => array(
					'name' => __( 'Portfolio Items' ),
					'singular_name' => __( 'Portfolio Item' )
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'portfolio'),
			'taxonomies' => array('category', 'post_tag') // this is IMPORTANT
			)
		);
	}



	/**
	 * Enqueue scripts and styles
	 */
	function tspear_scripts() {
		wp_enqueue_style( 'tspear-style', get_stylesheet_uri() );
	}

	add_action( 'wp_enqueue_scripts', 'tspear_scripts' );


	/**
	 * Register Navbars.
	 *
	 **/

	function register_my_menu() {
		register_nav_menu( 'primary', 'Primary Menu' );
		register_nav_menu( 'footernav', __( 'Footer Navbar' ));
	}
	add_action( 'init', 'register_my_menu' );



	/**
	 * Register widget areas.
	 *
	 **/
	function ts_widgets_init() {

		register_sidebar( array(
			'name'          => __( 'footer left' ),
			'id'            => 'footerleft',
			'description'   => __( 'Footer Widget Area left' ),
			'before_widget' => '<div class="col-sm-6">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		) );

		register_sidebar( array(
			'name'          => __( 'footer centre' ),
			'id'            => 'footercentre',
			'description'   => __( 'Footer Widget Area' ),
			'before_widget' => '<div class="col-sm-3">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		) );

		register_sidebar( array(
			'name'          => __( 'footer right' ),
			'id'            => 'footerright',
			'description'   => __( 'Footer Widget Area' ),
			'before_widget' => '<div class="col-sm-3">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		) );
	}
	add_action( 'widgets_init', 'ts_widgets_init' );




?>