<?php

// basic setup function
if ( ! function_exists( 'theme_setup' ) ) :
	
	function theme_setup() {
		load_theme_textdomain( 'theme', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'main_menu' => esc_html__( 'Primary', 'theme' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_theme_support('woocommerce');
	}
endif;
add_action( 'after_setup_theme', 'theme_setup' );


function theme_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_content_width', 0 );

// sidebar
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'theme_widgets_init' );


// add css and js
function flipmart_scripts() {

	wp_enqueue_style('flipmart-bootstrapcss',get_template_directory_uri().'/assets/css/bootstrap.min.css','215',true);
	wp_enqueue_style('flipmart-maincss',get_template_directory_uri().'/assets/css/main.css','2151',true);
	wp_enqueue_style('flipmart-bluecss',get_template_directory_uri().'/assets/css/blue.css','2152',true);
	wp_enqueue_style('flipmart-owlcss',get_template_directory_uri().'/assets/css/owl.carousel.css','2153',true);
	wp_enqueue_style('flipmart-transitionscss',get_template_directory_uri().'/assets/css/owl.transitions.css','2154',true);
	wp_enqueue_style('flipmart-animatecss',get_template_directory_uri().'/assets/css/animate.min.css','2155',true);
	wp_enqueue_style('flipmart-rateitcss',get_template_directory_uri().'/assets/css/rateit.css','2156',true);
	wp_enqueue_style('flipmart-bootstrapselect',get_template_directory_uri().'/assets/css/bootstrap-select.min.css','2157',true);
	wp_enqueue_style('flipmart-woo',get_template_directory_uri().'/assets/css/woo.css','21658',true);

	wp_enqueue_style('flipmart-bootstrapcss', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700');
	wp_enqueue_style('flipmart-bootstrapcss', '//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800');
	wp_enqueue_style('flipmart-bootstrapcss', '//fonts.googleapis.com/css?family=Montserrat:400,700');



	wp_enqueue_script('flipmart-jqueryjss',get_template_directory_uri(). '/assets/js/jquery-1.11.1.min.js',array(),'21957',true);
	wp_enqueue_script('flipmart-bootstrapjss',get_template_directory_uri(). '/assets/js/bootstrap.min.js',array(),'219527',true);
	wp_enqueue_script('flipmart-bootstraphover',get_template_directory_uri(). '/assets/js/bootstrap-hover-dropdown.min.js',array(),'213957',true);
	wp_enqueue_script('flipmart-carouseljss',get_template_directory_uri(). '/assets/js/owl.carousel.min.js',array(),'219517',true);
	wp_enqueue_script('flipmart-echojss',get_template_directory_uri(). '/assets/js/echo.min.js',array(),'219572',true);
	wp_enqueue_script('flipmart-jqueryeasing',get_template_directory_uri(). '/assets/js/jquery.easing-1.3.min.js',array(),'219557',true);
	wp_enqueue_script('flipmart-bootstrapslider',get_template_directory_uri(). '/assets/js/bootstrap-slider.min.js',array(),'219657',true);
	wp_enqueue_script('flipmart-jqueryrateit',get_template_directory_uri(). '/assets/js/jquery.rateit.min.js',array(),'219957',true);
	wp_enqueue_script('flipmart-lightboxcss',get_template_directory_uri(). '/assets/js/lightbox.min.js',array(),'219597',true);
	wp_enqueue_script('flipmart-bootstrapselectjs',get_template_directory_uri(). '/assets/js/bootstrap-select.min.js',array(),'219577',true);
	wp_enqueue_script('flipmart-wowjss',get_template_directory_uri(). '/assets/js/wow.min.js',array(),'219587',true);
	wp_enqueue_script('flipmart-scriptsjss',get_template_directory_uri(). '/assets/js/scripts.js',array(),'219517',true);
	
}
add_action( 'wp_enqueue_scripts', 'flipmart_scripts' );

