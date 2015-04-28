<?php 
/**
 * tspear functions and definitions.
 *
 **/


	// THEME SUPPORT
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'html5', array( 'search-form' ) );

	/**
	 * Enqueue scripts and styles
	 */
	function tspear_scripts() {
		define("LIVEDOMAIN", "tspear.com");
		// Boostrap CSS		
		if (strpos($_SERVER['HTTP_HOST'], LIVEDOMAIN) !== FALSE) {
			// CDN
			wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css' );
			wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array('jquery'));
		} else {
			// local version
			wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/bower_components/bootstrap/dist/css/bootstrap.css' );
			wp_enqueue_script('bootstrap', get_template_directory_uri().'/bower_components/bootstrap/dist/js/bootstrap.js', array('jquery'));
		};
		// main stylesheet.
		wp_enqueue_style( 'tspear-style', get_stylesheet_uri() );
	}
	add_action( 'wp_enqueue_scripts', 'tspear_scripts' );


	/**
	*		 REGISTER NAVBARS
	*
	**/

	function register_my_menu() {
		register_nav_menu( 'primary', 'Primary Menu' );
		register_nav_menu( 'footernav', __( 'Footer Navbar' ));
	}
	add_action( 'init', 'register_my_menu' );



	/**
	 * 		REGISTER WIDGET AREAS
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


	function ts_placeholder() {	
	 	$imgurl = "http://placehold.it/1024x576&text=No+Featured+Image";		
	 	// $imgurl = get_template_directory_uri() . "/img/ph_576p.gif";
		return $imgurl;
	};


?>