<?php 
	function load_bootstrap()
	{
		wp_enqueue_style('bootstrapstyle', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('bootstrapthemestyle', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
		wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true);
		wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-1.11.3.js');
	}

	function load_css()
	{
		wp_enqueue_style('style', get_stylesheet_uri());
	}

	function cienciapr_theme_setup() 
	{
	  register_nav_menus( array( 
	    'sidebar' => 'Sidebar Menu', 
	    'footer' => 'Footer menu' 
	  ) );
	 }

	add_action('wp_enqueue_scripts', 'load_bootstrap');
	add_action('wp_enqueue_scripts', 'load_css');	
	add_action( 'after_setup_theme', 'cienciapr_theme_setup' );
?>