<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sds
 */

get_header(); ?>
 
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="fullpage">
				<div class="section"><img src="<?php echo get_template_directory_uri(); ?>/img/img3.png"/></div>
				<div class="section"><img src="<?php echo get_template_directory_uri(); ?>/img/img2.jpg"/></div>
				<div class="section"><img src="<?php echo get_template_directory_uri(); ?>/img/img1.jpg"/></div>
				<div class="section"><img src="<?php echo get_template_directory_uri(); ?>/img/img4.jpg"/></div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->	
	
<?php /*
get_sidebar();
*/ ?>
<?php
get_footer();
?>