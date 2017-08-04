<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>
	<?php do_action( 'foundationpress_layout_start' ); ?>
	<header class="site-header" role="banner">
		<div class="row title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
		  <div class="columns small-10">
		  	 <img class="align-right" src="<?php bloginfo('template_directory'); ?>/assets/images/umbrella-logo.png"  alt="Space" style="width:233px ,height: 100px"></li>
		  </div>
		  <div class="columns small-2 align-right">
		  	 <button class="menu-icon" type="button" data-toggle="example-menu"></button>
		  </div>
		</div>
		<div class="top-bar" id="example-menu">
		  <div class="top-bar-left hide-for-small-only">
		    <ul class="dropdown menu" data-dropdown-menu>
		      <li ><img src="<?php bloginfo('template_directory'); ?>/assets/images/umbrella-logo.png"  alt="Space" style="width:233px ,height: 100px"></li>
		      <li>
		    </ul>
		  </div>
		  <div class="top-bar-right">
		  	<ul class="menu headermenu" id="example-menu">
					  <li><a href="#">Familia Umbrella</a></li>
					  <li><a href="#">Evidencia Cientifica</a></li>
					  <li><a href="#">Blog</a></li>
					  <li><a href="#">Contacto</a></li>
					 <!--  <li><input type="search" placeholder="Search"></li>
		      		  <li><button type="button" class="button">Search</button></li> -->
			</ul>
		  </div>
		</div>
	
	</header>

	<section class="container">
	<?php do_action( 'foundationpress_after_header' );
