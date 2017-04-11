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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.css" />
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.js"></script>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Cabin" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/hamburgers-master/dist/hamburgers.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage();
		});
	</script>
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

<script>
  // Look for .hamburger
  var hamburger = document.querySelector(".hamburger");
  // On click
  hamburger.addEventListener("click", function() {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
		$("header .main-menu ul").toggleClass("is-active");
    // Do something else, like open/close menu
  });
</script>

	<div id="content" class="site-content">
