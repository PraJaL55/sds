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
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	
<header id="Header">
	<div class="row">
		<div class="col-xs-12 col-lg-2 sds-logo">
			<p><a href="/"><img src="http://www.satnam.com/wp-content/uploads/2015/01/1111111.png" alt="Logo" style="height: 100%;"></a></p>
		</div>
		<!--Main Menu-->
		<div class="col-lg-8 main-menu">
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
		</div><!--Main Menu ends-->
		<div class="mobile-menu col-lg-2">
			<button class="hamburger hamburger--emphatic" type="button">
			  <span class="hamburger-box">
				<span class="hamburger-inner">
				</span>
			  </span>
			</button>
		</div>
	</div><!--Header Row Ends-->
	
	<div class="grad-border row">
		<div class="col-lg-6 grad-blue"></div>
		<div class="col-lg-6 grad-red"></div>
	</div>
</header>	
	<div id="content" class="site-content">