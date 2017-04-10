	<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sds
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cabin" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!--
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sds' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
		<!--
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sds' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
<!--</header><!-- #masthead -->
	
<header id="Header">
	<div class="row">
		<div class="col-xs-12 col-lg-2 sds-logo">
			<p><a href="/"><img src="http://www.satnam.com/wp-content/uploads/2015/01/1111111.png" alt="Logo" style="height: 100%;"></a></p>
		</div>
		<div class="col-lg-10 main-menu pull-right">
			<ul>
				<li class="nav-bar-items">
					<a href="javascript:void(0)" class="reg-pointer">HOME</a>
					<div class="fulldrop">
					</div>
				</li>
				<li class="nav-bar-items">
					<a href="javascript:void(0)" class="reg-pointer">WHO WE ARE</a>
					<div class="fulldrop">
					</div>
				</li>
				<li class="nav-bar-items">
					<a href="javascript:void(0)" class="reg-pointer">WHAT WE DO</a>
					<div class="fulldrop">
					</div>
				</li>
				<li class="nav-bar-items">
					<a href="javascript:void(0)" class="reg-pointer">WHAT THEY SAY</a>
					<div class="fulldrop">
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="grad-border row">
		<div class="col-lg-6 grad-blue"></div>
		<div class="col-lg-6 grad-red"></div>
	</div>
</header>	
	
	<div id="content" class="site-content">
