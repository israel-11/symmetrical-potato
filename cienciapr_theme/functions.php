<?php 

function cienciapr_theme_setup() 
{
	add_theme_support( 'post-thumbnails');
	add_image_size('small-preview', 80, 60, true); 
	add_image_size('medium-preview', 310, 270, true); 
	add_image_size('large-preview', 660, 500, true);
	register_nav_menus( array( 
	'sidebar' => 'Sidebar Menu', 
	'footer' => 'Footer menu' 
	) );
 }


function ciencipr_theme_scripts() 
{
	//css
	wp_register_style( 'bootstrapcss', '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrapcss' );

    wp_register_style( 'font-awesomecss', '/assets/css/font-awesome.min.css' );
    wp_enqueue_style( 'font-awesomecss' );

    wp_register_style( 'animatecss', '/assets/css/animate.css' );
    wp_enqueue_style( 'animatecss' );

    wp_register_style( 'fontcss', '/assets/css/font.css' );
    wp_enqueue_style( 'fontcss' );

    wp_register_style( 'liscrollercss', '/assets/css/li-scroller.css' );
    wp_enqueue_style( 'liscrollercss' );

    wp_register_style( 'slickcss', '/assets/css/slick.css' );
    wp_enqueue_style( 'slickcss' );

    wp_register_style( 'fancyboxcss', '/assets/css/jquery.fancybox.css' );
    wp_enqueue_style( 'fancyboxcss' );

    wp_register_style( 'themecss', '/assets/css/theme.css' );
    wp_enqueue_style( 'themecss' );

    wp_register_style( 'style', '/assets/css/jquery.style.css' );
    wp_enqueue_style( 'style' );

    // javscripts
    wp_register_script( 'wowjs', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery') );
    wp_enqueue_script('wowjs');

    wp_register_script( 'bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery') );
    wp_enqueue_script('bootstrapjs');

    wp_register_script( 'slickjs', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery') );
    wp_enqueue_script('slickjs');

    wp_register_script( 'liscrollerjs', get_template_directory_uri() . '/assets/js/jquery.li-scroller.1.0.js', array('jquery') );
    wp_enqueue_script('liscrollerjs');

    wp_register_script( 'newsTickerks', get_template_directory_uri() . '/assets/js/jquery.newsTicker.min.js', array('jquery') );
    wp_enqueue_script('newsTicker');

    wp_register_script( 'fancyboxjs', get_template_directory_uri() . '/assets/js/jquery.fancybox.pack.js', array('jquery') );
    wp_enqueue_script('fancyboxjs');

    wp_register_script( 'customjs', get_template_directory_uri() . '/assets/js/custom.js', array('jquery') );
    wp_enqueue_script('customjs');
	//query.min.js was not included since WP already includes it
}

function new_excerpt_more($more) 
{
    return '<a style="font-weight: bold;" href="'. get_permalink($post->ID) . '">  More&raquo</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');
add_action( 'wp_enqueue_scripts', 'ciencipr_theme_scripts' );
add_action( 'after_setup_theme', 'cienciapr_theme_setup' );
add_theme_support( 'post-thumbnails' );

?>

