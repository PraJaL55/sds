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
				<div class="section">Some section</div>
				<div class="section">Some section</div>
				<div class="section">Some section</div>
				<div class="section">Some section</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
 
<script type="text/javascript">
	$(document).ready(function() {
		$('#fullpage').fullpage();
	});
</script>
	
<?php /*
get_sidebar();
*/ ?>
<?php
//get_footer();
?>