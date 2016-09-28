<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
	<h1> <?php bloginfo('name'); ?> </h1>
	<h5> <?php bloginfo('description'); ?> </h5>
</header>
<div class=''>
	<div class='row'>
		<div class='col-md-2'> 
			<div> 
				<?php  wp_nav_menu(array( theme_location => 'sidebar' ));  ?> 
			</div> 
		 </div>
		<div class='col-md-10'>
		<!-- contents of the page -->